require.config({
    baseUrl: '/',
    paths: {
        backbone: 'bower_components/backbone/backbone-min',
        bootstrap: 'bower_components/bootstrap/dist/js/bootstrap.min',
        colorpicker: 'bower_components/xaguilars-bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min',
        d3: 'bower_components/d3/d3.v2.min',
        firebase: 'bower_components/firebase/firebase',
        jquery: 'bower_components/jquery/dist/jquery.min',
        underscore: 'bower_components/underscore/underscore-min',

        forceView: 'js/force-view',
        myView: 'js/my-backbone-view',
        myModel: 'js/my-backbone-model',
        dbaas: 'js/dbaas',
        io: 'js/socket.io/socket.io'
    },
    shim: {
        bootstrap: {
            deps: ['jquery']
        },
        d3: {
            exports: 'd3'
        },
        colorpicker: ['jquery']
    }
});

require(['myView', 'bootstrap', 'colorpicker', 'firebase'], function(MyView) {
    new MyView();
});