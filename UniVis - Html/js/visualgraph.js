function draw() {
    var config = {
        container_id: "viz",
        server_url: "bolt://localhost:7687",
        server_user: "neo4j",
        server_password: "fyp1234",
        labels: {
            "EMPLOYEE": {
                caption: "name",
            },
            "PROJECT": {
                caption: "title",
            },
            "DEPARTMENT": {
                caption: "name",
            },
            "UNIVERSITY": {
                caption: "name",
            }

        },
        relationships: {
            "ACTED_IN": {
                caption: true,
            },
            "DIRECTED": {
                caption: true,
            },
            "FOLLOWS": {
                caption: true,
            },
            "PRODUCED": {
                caption: true,
            },
            "REVIEWED": {
                caption: true,
            },
            "WROTE": {
                caption: true,
            }
        },
        initial_cypher: "MATCH p=()-->() RETURN p"
    }

    var viz = new NeoVis.default(config);
    viz.render();
}