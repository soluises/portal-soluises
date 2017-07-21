var mix = require('laravel-mix');

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

// Fonts
mix.copyDirectory('resources/assets/fonts', 'public/assets/fonts');

// SASS
mix.sass('resources/assets/sass/style.scss', 'public/assets/css/app.css')
    .sass('resources/assets/sass/custom.scss', 'public/assets/css/app.css');

// CSS
mix.copyDirectory('resources/assets/css', 'public/assets/css');

// JS
mix.copyDirectory('resources/assets/js', 'public/assets/js');

// Imagens
mix.copyDirectory('resources/assets/images', 'public/assets/images');