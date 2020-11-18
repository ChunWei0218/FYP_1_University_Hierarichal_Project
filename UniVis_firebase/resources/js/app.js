var api = require('./neo4jApi');

$(function() {
    renderGraph();
    search();

    $("#search").submit(e => {
        e.preventDefault();
        search();
    });
});

// function showEmployee(name) {
//     api
//         .getEmployee(name)
//         .then(employee => {
//             if (!employee) return;

//             $("#name").text(employee.name);
//             $("#poster").attr("src", "img/" + employee.name + ".jpg");
//             var $list = $("#person").empty();
//             employee.forEach(employee => {
//                 $list.append($("<li>" + employee.name + "also participate in this project </li>"));
//             });
//         }, "json");
// }    

function search() {
    var query = $("#search").find("input[name=search]").val();
    api
        .searchEmployee(query)
        .then(employee => {
            var t = $("table#results tbody").empty();

            if (employee) {
                employee.forEach(employee => {
                    $("<tr><td class='employee'>" + employee.name + "</td><td>" + employee.Project + "</td><td>" + employee.Department + "</td><td>" + employee.University + "</td></tr>").appendTo(t)
                        .click(function() {
                            showEmployee($(this).find("td.employee").text());
                        })
                });

                // var first = employee[0];
                // if (first) {
                //     showEmployee(first.name);
                // }
            }
        });
}

function renderGraph() {
    var width = 800,
        height = 800;
    var force = d3.layout.force()
        .charge(-200).linkDistance(30).size([width, height]);

    var svg = d3.select("#graph").append("svg")
        .attr("width", "100%").attr("height", "100%")
        .attr("pointer-events", "all");

    api
        .getGraph()
        .then(graph => {
            force.nodes(graph.nodes).links(graph.links).start();

            var link = svg.selectAll(".link")
                .data(graph.links).enter()
                .append("line").attr("class", "link");

            var node = svg.selectAll(".node")
                .data(graph.nodes).enter()
                .append("circle")
                .attr("class", d => {
                    return "node " + d.label
                })
                .attr("r", 10)
                .call(force.drag);

            // html title attribute
            node.append("name")
                .text(d => {
                    return d.name;
                });

            // force feed algo ticks
            force.on("tick", () => {
                link.attr("x1", d => {
                    return d.source.x;
                }).attr("y1", d => {
                    return d.source.y;
                }).attr("x2", d => {
                    return d.target.x;
                }).attr("y2", d => {
                    return d.target.y;
                });

                node.attr("cx", d => {
                    return d.x;
                }).attr("cy", d => {
                    return d.y;
                });
            });
        });
}