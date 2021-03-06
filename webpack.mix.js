let mix = require('laravel-mix');
let build = require('./tasks/build.js');
let tailwind = require('tailwindcss');

mix.disableSuccessNotifications();
mix.setPublicPath('source/assets/build');
mix.webpackConfig({
    plugins: [
        build.jigsaw,
        build.watch([
            'source/**/*.md',
            'source/**/*.php',
            'source/**/*.scss',
            '!source/**/_tmp/*',
        ]),
    ],
});

mix.js('source/_assets/js/main.js', 'js')
    .sass('source/_assets/sass/main.scss', 'css')
    .options({
        processCssUrls: false,
        postCss: [
            tailwind('./tailwind.config.js'),
            process.env.NODE_ENV === 'production' &&
                require('@fullhuman/postcss-purgecss')({
                    content: [
                        './source/_layouts/**/*.blade.php',
                        './source/**/*.blade.php',
                        './source/index.blade.php',
                    ],
                    defaultExtractor: content =>
                        content.match(/[A-Za-z0-9-_:/]+/g) || [],
                }),
        ],
    })
    .version();
