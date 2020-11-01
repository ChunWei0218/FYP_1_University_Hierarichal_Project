var _ = require('lodash');

function EmployeeProj(name, title) {
    _.extend(this, {
        name: name,
        title: title.map(function(c) {

        })
    });
}

module.exports = EmployeeProj;