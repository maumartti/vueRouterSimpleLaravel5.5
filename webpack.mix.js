let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
   .styles([
			'resources/assets/template/css/jquery-ui.css',
			'resources/assets/template/css/fontawesome-all.min.css.css',
			'resources/assets/template/css/font-awesome.min.css.css',
			'resources/assets/template/revolution/css/settings.css',
			'resources/assets/template/revolution/css/layers.css',
			'resources/assets/template/revolution/css/navigation.css',
			'resources/assets/template/css/search.css',
			'resources/assets/template/css/animate.css',
			'resources/assets/template/css/magnific-popup.css',
			'resources/assets/template/css/lightcase.css',
			'resources/assets/template/css/owl-carousel.css',
			'resources/assets/template/css/owl.carousel.min.css',
			'resources/assets/template/css/styles.css',
			'resources/assets/template/css/default.css'
			], 'public/css/all.css');
