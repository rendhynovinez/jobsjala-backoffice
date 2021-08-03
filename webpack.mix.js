const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.styles([ 
    'public/css/app.css', 
    'public/css/bootstrap.css',
    'public/css/bootstrap.min.css',
    'public/css/bootstrap-grid.css',
    'public/css/bootstrap-grid.min.css',
    'public/css/bootstrap-reboot.css',
    'public/css/bootstrap-reboot.min.css',
],'public/css/all.css').version();


mix.scripts([
    'public/js/app.js', 
    'public/js/bootstrap.bundle.js',
    'public/js/bootstrap.bundle.min.js',
    'public/js/bootstrap.js',
    'public/js/bootstrap.min.js',
    'public/js/jquery',
    'public/js/jquery.min',
    'public/js/jquery.slim',
    'public/js/jquery.slim.min',

], 'public/js/all.js').version();


mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');
