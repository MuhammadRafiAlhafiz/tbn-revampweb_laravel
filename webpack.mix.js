const mix = require('laravel-mix');

mix.setResourceRoot('../'); // Mengatur root resource ke parent folder
mix.js('resources/js/app.js', 'public/js')
    .postCss('resources/css/app.css', 'public/css', [
        require('tailwindcss'),
    ]);