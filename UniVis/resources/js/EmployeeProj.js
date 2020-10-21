var _ = require('lodash');

function MovieCast(name, title) {
    _.extend(this, {
        name: name,
        title: title.map(function(c) {

        })
    });
}

module.exports = MovieCast;