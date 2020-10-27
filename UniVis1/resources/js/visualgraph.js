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
            "HAVE": {
                caption: true,
            },
            "INCHARGE_OF": {
                caption: true,
            },
            "RESEARCH_ON": {
                caption: true,
            }
        },
        initial_cypher: "MATCH p=()-->() RETURN p"
    }

    var viz = new NeoVis.default(config);
    viz.render();
}