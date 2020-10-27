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
                caption: "Name",
            }
        },
        relationships: {
            "INCHARGE_OF": {
                caption: true,
            },
            "RESEARCH_ON": {
                caption: true,
            },
            "HAVE": {
                caption: true,
            }
        },
        initial_cypher: "MATCH (n) RETURN n LIMIT 25"
    }

    var viz = new NeoVis.default(config);
    viz.render();
}