define(['backbone'], function(Backbone) {

    return Backbone.Model.extend({

        initialize: function(options) {
            this.on('change:id', this.notifyEachIdChange, this);
            this.on('change:category', this.notifyEachCategoryChange, this);
            this.on('change:label', this.notifyEachLabelChange, this);
        },

        notifyEachIdChange: function() {
            console.log('id was changed');
        },

        notifyEachCategoryChange: function() {
            console.log('category was changed');
        },

        notifyEachLabelChange: function() {
            console.log('label was changed');
        }

    });

});