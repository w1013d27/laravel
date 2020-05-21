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

mix.js('resources/js/app.js', 'public/js').version()
//    .extract(['vue','socket.io-client'])
;

mix.sass('resources/sass/app.scss', 'public/css/app.css').version();

mix.browserSync({
     proxy: 'homestead.test',
    files: [
     'public/**/*',
     'public/index.php'
    ],
    open: false,
    watchOptions: {
        usePolling: true,
        interval: 500,
    },
});
