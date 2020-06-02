function draw() {
    var config = {
        container_id: "viz",
        server_url: "bolt://18.233.63.181:33780",
        server_user: "neo4j",
        server_password: "erasers-platform-admiralties",
        labels: {
            "SUPERVISOR": {
                caption: "FirstName",
            },
            "EMPLOYEE": {
                caption: "FirstName",
            },
            "PROJECT": {
                caption: "Name",
            },
            "DEPARTMENT": {
                caption: "Name",
            },
            "UNIVERSITY": {
                caption: "Name",
            }
        },
        relationships: {
            "SUPERVISED": {
                caption: true,
            },
            "INCHARGE_OF": {
                caption: true,
            },
            "CONTROL": {
                caption: true,
            },
            "HAVE": {
                caption: true,
            }
        },
        initial_cypher: "MATCH p=(:SUPERVISOR)<-[:SUPERVISED]-(:EMPLOYEE)-[:INCHARGE_OF]->(:PROJECT)<-[:CONTROL]-(:DEPARTMENT)<-[:HAVE]-(:UNIVERSITY) RETURN p"
    }

    var viz = new NeoVis.default(config);
    viz.render();
}
