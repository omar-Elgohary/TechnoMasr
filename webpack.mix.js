const mix = require('laravel-mix');

mix.webpackConfig({
    stats: {
        children: true,
    },
});

mix.js('resources/js/app.js', 'public/js')
    .css('resources/css/app.css', 'public/css')
    .sourceMaps();


