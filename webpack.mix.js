const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js(['resources/js/layouts/master.js',
    'resources/js/layouts/header.js',
    'resources/js/layouts/footer.js',
    'resources/js/pages/home.js'], 'public/js/app.js')

    .styles(['resources/css/layouts/master.css',
        'resources/css/layouts/header.css',
        'resources/css/layouts/footer.css',
        'resources/css/pages/home.css',
        'resources/css/components/products-card.css'], 'public/css/app.css')

    .version();
