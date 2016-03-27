<?php
/*
Plugin Name: Cyclone Slider 2 Remove Import Export
Version: 1.0.0
Description: Removes import and export. Requires Cyclone Slider 2 and Pro version 2.10.3 and up. Older versions do not have the 'cyclone_slider_services' filter.
Author: Nico Amarilla
Author URI: http://www.codefleet.net/
License: GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
*/

// Hook this before the plugin loads
add_action( 'plugins_loaded', 'cycloneslider_remove_import_export_init', 9 );
function cycloneslider_remove_import_export_init() {

	// Add the filter
	add_filter( 'cycloneslider_services', 'cycloneslider_remove_import_export_override_services' );
}

function cycloneslider_remove_import_export_override_services( $services ) {

	// Unset services
	unset(
		$services['exporter'],
		$services['importer'],
		$services['export_page'],
		$services['import_page']
	);

	return $services;
}