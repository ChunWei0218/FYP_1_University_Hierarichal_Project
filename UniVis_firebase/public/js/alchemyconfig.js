var config = {
    dataSource: "data/univis.json",
    cluster: true,
    clusterColours: ["#DD79FF", "#00FF30", "#5168FF", "#f83f00", "#ff8d8f"],
    forceLocked: false,
    nodeCaptionsOnByDefault: true,
    directedEdges: true,
    initialScale: 0.7,
    initialTranslate: [250, 150],
    nodeTypes: {
        "node_type": [
            "family",
            "coworker",
            "classmate",
            "friend",
            "other"
        ]
    },
    nodeCaption: "firstName",
    rootNodeRadius: 30,

    showControlDash: true,

    showStats: true,
    nodeStats: true,

    showFilters: true,
    nodeFilters: true,

    captionToggle: true,
    edgesToggle: true,
    nodesToggle: true,
    toggleRootNotes: false,

    zoomControls: true
}


alchemy = new Alchemy(config);