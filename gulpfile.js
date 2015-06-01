var elixir = require('laravel-elixir');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir.config.sourcemaps = false;

elixir(function(mix) {
	mix.styles([
		'minimal/minimal.css',
		'square/square.css',
		'square/red.css',
		'square/blue.css',
	], 'public/css/icheck.min.css', 'resources/assets/js/iCheck/skins');

	mix.styles([
		'style.css',
		'table-responsive.css',
		'style-responsive.css',
		'jquery.stepy.css',
	], 'public/css/all-styles.min.css', 'resources/assets/css');

	mix.copy('resources/assets/css/clndr.css', 'public/css/calendar.min.css');

	mix.copy('resources/assets/js/gritter/css/jquery.gritter.css', 'public/css/gritter.min.css');

	mix.scripts([
		'html5shiv.js',
		'respond.min.js'
	], 'public/js/responsive-hack.min.js', 'resources/assets/js');

	mix.scripts([
		'jquery-1.10.2.min.js',
		'jquery-ui-1.9.2.custom.min.js',
		'jquery-migrate-1.2.1.min.js',
		'bootstrap.min.js',
		'jquery.validate.min.js',
		'jquery.stepy.js',
		'modernizr.min.js',
		'jquery.nicescroll.js',
		'bootbox.min.js',
		'bootstrap-notify.js'
	], 'public/js/common.min.js', 'resources/assets/js');

	mix.scripts([
		'iCheck/jquery.icheck.js',
		'icheck-init.js'
	], 'public/js/iCheck.min.js', 'resources/assets/js');

	mix.scripts([
		'calendar/clndr.js',
		'calendar/evnt.calendar.init.js',
		'calendar/moment-2.2.1.js',
		'underscore.min.js'
	], 'public/js/calendar.min.js', 'resources/assets/js');

	mix.scripts([
		'jquery.gritter.min.js',
		'gritter-init.js',
	], 'public/js/gritter.min.js', 'resources/assets/js/gritter/js');

	mix.copy('resources/assets/js/scripts.js', 'public/js/all-pages-scripts.min.js');

	mix.styles([
		'advanced-datatable/css/demo_page.css',
		'advanced-datatable/css/demo_table.css',
		'data-tables/DT_bootstrap.css',
	], 'public/css/tables.min.css', 'resources/assets/js/');

	mix.scripts([
		'advanced-datatable/js/jquery.dataTables.js',
		'data-tables/DT_bootstrap.js',
		'dynamic_table_init.js',
	], 'public/js/tables.min.js');

});
