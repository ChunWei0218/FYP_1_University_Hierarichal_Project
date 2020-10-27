function draw() {
    var config = {
        container_id: "viz",
        server_url: "bolt://54.144.136.36:33153",
        server_user: "neo4j",
        server_password: "proficiencies-expiration-storm",
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
        initial_cypher: "MATCH p=()-->() RETURN p"
    }

    var viz = new NeoVis.default(config);
    viz.render();
}