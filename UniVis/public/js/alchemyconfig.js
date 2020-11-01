var config = {
    dataSource: '../../data/univis.json',

    cluster: true,

    nodeTypes: {
        "labels": [
            "UNIVERSITY",
            "DEPARTMENT",
            "PROJECT",
            "EMPLOYEE"
        ]
    },
    nodeCaption: "name",
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
};

alchemy.begin(config);