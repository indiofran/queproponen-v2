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

mix
	.js('resources/js/app.js', 'public/js/app.js')
    .sass('resources/sass/app.scss', 'public/css');
// .scripts([
// 	'resources/js/materialize/anime.min.js',
// 	'resources/js/materialize/autocomplete.js',
// 	'resources/js/materialize/buttons.js',
// 	'resources/js/materialize/cards.js',
// 	'resources/js/materialize/carrousel.js',
// 	'resources/js/materialize/cash.js',
// 	'resources/js/materialize/characterCounter',
// 	'resources/js/materialize/chip.js',
// 	'resources/js/materialize/collapsible.js',
// 	'resources/js/materialize/component.js',
// 	'resources/js/materialize/datepicker.js',
// 	'resources/js/materialize/dropdown.js',
// 	'resources/js/materialize/forms.js',
// 	'resources/js/materialize/global.js',
// 	'resources/js/materialize/materialbox.js',
// 	'resources/js/materialize/modal.js',
// 	'resources/js/materialize/parralax.js',
// 	'resources/js/materialize/pushpin.js',
// 	'resources/js/materialize/range.js',
// 	'resources/js/materialize/scrollspy.js',
// 	'resources/js/materialize/sidenav.js',
// 	'resources/js/materialize/slider.js',
// 	'resources/js/materialize/tabs.js',
// 	'resources/js/materialize/tapTarget.js',
// 	'resources/js/materialize/timepicker.js',
// 	'resources/js/materialize/toasts.js',
// 	'resources/js/materialize/tooltip.js',
// 	'resources/js/materialize/waves.js',
// ],'resources/js/materialize/bin/materialize.js')

