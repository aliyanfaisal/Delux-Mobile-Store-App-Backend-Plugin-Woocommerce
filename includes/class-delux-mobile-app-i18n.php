<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       http://afbinc.epizy.com
 * @since      1.0.0
 *
 * @package    Delux_Mobile_App
 * @subpackage Delux_Mobile_App/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Delux_Mobile_App
 * @subpackage Delux_Mobile_App/includes
 * @author     Aliyan Faisal <aliyanfaisal15@gmail.com>
 */
class Delux_Mobile_App_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'delux-mobile-app',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
