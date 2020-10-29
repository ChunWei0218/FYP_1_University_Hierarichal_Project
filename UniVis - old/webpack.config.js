'use strict';

var webpack = require('webpack');
var HtmlWebpackPlugin = require('html-webpack-plugin');
// var PhpWebpackPlugin = require('php-webpack-plugin');
/**
 * Get configuration for Webpack
 *
 * @see http://webpack.github.io/docs/configuration
 *      https://github.com/petehunt/webpack-howto
 *
 * @param {boolean} release True if configuration is intended to be used in
 * a release mode, false otherwise
 * @return {object} Webpack configuration
 */

const pages = glob.sync('**/*.blade.php', {
        cwd: path.join(process.cwd(), `resources/views/`),
        root: '/',
    })
    .map((page) => new HtmlWebpackPlugin({
        filename: page.replace('.blade.php', '.html'),
        template: `resources/views/${page}`,
    }));

module.exports = {
    entry: {
        app: './public/js/app.js'
    },

    output: {
        filename: 'app.js',
        path: './build/',
        publicPatch: './build/'
    },

    debug: true,
    devtool: false,

    devServer: {
        host: "univis.me",
    },

    stats: {
        colors: true,
        reasons: true
    },

    plugins: [
        new HtmlWebpackPlugin({ template: './resources/views/university_page.blade.php' })
    ],

    resolve: {
        extensions: ['', '.webpack.js', '.web.js', '.js', '.jsx']
    },

    module: {
        rules: [{
            test: /\.blade\.php$/,
            use: [{
                loader: 'webpack-blade-native-loader',
                options: {
                    viewDir: 'resources/views'
                }
            }],
        }, ],
        loaders: [{
                test: /\.css$/,
                loader: 'style!css'
            },
            {
                test: /\.(jpe?g|png|gif|svg)$/i,
                loader: 'file-loader?name=[name].[ext]'
            },
            {
                test: /\.js|\.jsx/,
                exclude: /node_modules|bower_components/,
                loader: 'babel'
            }
        ]
    }
};