require('file?name=[name].[ext]!/../../../node_modules/neo4j-driver/lib/browser/neo4j-web.min.js');
var Employee = require('./models/Employee');
var EmployeeProj = require('./models/EmployeeProj');
var _ = require('lodash');

var neo4j = window.neo4j;
var url = "bolt://localhost:7687";
var user = "neo4j";
var pass = "fyp1234";

var driver = neo4j.driver(url, neo4j.auth.basic(user, pass));

function searchEmployee(queryString) {
    var session = driver.session();
    return session
        .run(
            'MATCH (e:EMPLOYEE) \
      WHERE e.name =~ $name \
      RETURN e', { name: '(?i).*' + queryString + '.*' }
        )
        .then(result => {
            session.close();
            return result.records.map(record => {
                return new Employee(record.get('e'));
            });
        })
        .catch(error => {
            session.close();
            throw error;
        });
}

function getEmployee(name) {
    var session = driver.session();
    return session
        .run(
            "MATCH (e:EMPLOYEE {name:$name})<-[:INCHARGE_OF]-(p:PROJECT) \
      RETURN e.name AS name, p.title AS title \
      LIMIT 1", { name })
        .then(result => {
            session.close();

            if (_.isEmpty(result.records))
                return null;

            var record = result.records[0];
            return new EmployeeProj(record.get('name'), record.get('title'));
        })
        .catch(error => {
            session.close();
            throw error;
        });
}

function getGraph() {
    var session = driver.session();
    return session.run(
            'MATCH (e:EMPLOYEE)<-[:INCHARGE_OF]-(p:PROJECT) \
    RETURN e.name AS Name, p.title AS title \
    LIMIT $limit', { limit: 100 })
        .then(results => {
            session.close();
            var nodes = [],
                rels = [],
                i = 0;
            results.records.forEach(res => {
                nodes.push({ name: res.get('Name'), label: 'Name' });
                var target = i;
                i++;

                res.get('cast').forEach(name => {
                    var actor = { name: name, label: 'actor' };
                    var source = _.findIndex(nodes, actor);
                    if (source == -1) {
                        nodes.push(actor);
                        source = i;
                        i++;
                    }
                    rels.push({ source, target })
                })
            });

            return { nodes, links: rels };
        });
}

exports.searchEmployee = searchEmployee;
exports.getEmployee = getEmployee;
exports.getGraph = getGraph;