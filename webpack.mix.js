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

mix.copy('./node_modules/font-awesome/fonts/', 'public/fonts')
   .copy('./node_modules/orchid-icons/src/fonts/', 'public/fonts')
   .copyDirectory('./node_modules/tinymce', 'public/plugins/tinymce')
   .js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .sourceMaps()

if (mix.config.inProduction) {
  mix.version();
  mix.minify();
}