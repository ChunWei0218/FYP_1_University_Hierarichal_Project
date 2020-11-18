define(['jquery', 'backbone'], function($, Backbone) {
    var Channel, firebaseRef, nodeRef, edgeRef;
    // nodeRef. orderByKey().equalTo('-JxQM_fQTywKZtwOs90V').limitToFirst(1).once('value', function(data){debugger})
    // Object.keys( data.val() )[0]

    Channel = $.extend({}, Backbone.Events);
    ref = new Firebase("https://fyp-univis.firebaseio.com");
    nodeRef = ref.child('nodes');
    edgeRef = ref.child('edges');

    function removeEdgeIfNodeNotExist(edgeId, nodeId) {
        nodeRef
            .orderByKey()
            .equalTo(nodeId)
            .limitToFirst(1)
            .once('value', function(data) {
                !data.val() && edgeRef.child(edgeId).remove();
            });
    }

    function removeEdgeIfNecessary(edgeId, edge) {
        removeEdgeIfNodeNotExist(edgeId, edge.sourceId);
        removeEdgeIfNodeNotExist(edgeId, edge.targetId);
    }

    function removeAllEdgesConnectedTo(nodeId) {
        ["sourceId", "targetId"].forEach(function(variable) {
            edgeRef
                .orderByChild(variable)
                .equalTo(nodeId)
                .once('value', function(data) {
                    data.val() && Object.keys(data.val()).forEach(function(edgeId) {
                        edgeRef.child(edgeId).remove();
                    })
                });
        });
    }

    Channel.on('disconnect', function() {
        console.warn('disconnected');
    });

    Channel.on('remove-all-nodes', function() {
        ref.set({});
    });

    Channel.on('retrieve-all-nodes', function() {
        nodeRef.on('child_added', function(data) {

            var isPlainObject = $.isPlainObject(data.val());
            if (!isPlainObject) {
                nodeRef.child(data.key()).remove();
                return;
            }

            Channel.trigger('node-added', {
                id: data.key(),
                label: data.val().label,
                category: data.val().category
            });
        });

        nodeRef.on('child_changed', function(data) {
            Channel.trigger('node-edited', {
                id: data.key(),
                label: data.val().label,
                category: data.val().category
            });
        });

        nodeRef.on('child_removed', function(data) {
            Channel.trigger('node-removed', {
                id: data.key()
            });

            removeAllEdgesConnectedTo(data.key());
        });

        edgeRef.on('child_added', function(data) {
            var link = data.val(),
                isPlainObject = $.isPlainObject(link);

            if (!isPlainObject || !link.sourceId || !link.targetId) {
                edgeRef.child(data.key()).remove();
                return;
            }

            Channel.trigger('link-added', {
                id: data.key(),
                source: {
                    id: link.sourceId
                },
                target: {
                    id: link.targetId
                }
            });

            removeEdgeIfNecessary(data.key(), link);
        });

        edgeRef.on('child_removed', function(data) {
            var link = data.val(),
                isPlainObject = $.isPlainObject(link);

            if (!isPlainObject || !link.sourceId || !link.targetId) {
                return;
            }

            Channel.trigger('link-removed', {
                id: data.key(),
                sourceId: data.val().sourceId,
                targetId: data.val().targetId
            });
        });

    });

    Channel.on('add-node', function(node, cb) {
        var node = nodeRef.push({
            label: node.label || '',
            category: node.category || ''
        }, function() {
            if (cb) {
                node.id = node.key();
                cb(node);
            }
        });
    });

    Channel.on('edit-node', function(node) {
        if (node && node.id) {
            nodeRef.child(node.id).update({
                label: node.label || '',
                category: node.category || ''
            });
        }
    });

    Channel.on('remove-node', function(node) {
        if (node && node.id) {
            nodeRef.child(node.id).remove();
        }
    });

    Channel.on('add-link', function(link) {
        if (!link || !link.source || !link.target || !link.source.id || !link.target.id) return;

        var edge = edgeRef.push({
            sourceId: link.source.id,
            targetId: link.target.id
        }, function() {
            link.id = edge.key();
            Channel.trigger('link-added', link);
        });

    });

    Channel.on('remove-link', function(link) {
        if (link && link.id) {
            edgeRef.child(link.id).remove(function() {
                Channel.trigger('link-removed', link);
            });
        }
    });

    return Channel;
});