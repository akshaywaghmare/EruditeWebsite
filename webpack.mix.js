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

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')



.combine([
    'public/assets/vendor/font-awesome/css/font-awesome.min.css',
    'public/assets/vendor/themify-icons/css/themify-icons.css',
    'public/assets/vendor/animate/animate.min.css',
    'public/assets/vendor/fancybox/css/jquery.fancybox.min.css',
    'public/assets/vendor/owlcarousel/css/owl.carousel.min.css',
    'public/assets/vendor/swiper/css/swiper.min.css',
    'public/assets/css/style.css',
], 'public/css/main.css')


.combine([
    'public/assets/vendor/jquery/jquery.min.js',
    'public/assets/vendor/popper.js/umd/popper.min.js',
    'public/assets/vendor/bootstrap/dist/js/bootstrap.min.js',
    'public/assets/vendor/jquery-easing/jquery.easing.min.js',
    'public/assets/vendor/fancybox/js/jquery.fancybox.min.js',
    'public/assets/vendor/owlcarousel/js/owl.carousel.min.js',
    'public/assets/vendor/jarallax/jarallax.min.js',
    'public/assets/vendor/jarallax/jarallax-video.min.js',
    'public/assets/vendor/wavify/wavify.js',
    'public/assets/vendor/swiper/js/swiper.js',
    'public/assets/vendor/wow/wow.min.js',
    'public/assets/js/functions.js',

], 'public/js/main.js');
