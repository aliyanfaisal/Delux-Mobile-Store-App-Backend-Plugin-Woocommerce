<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              http://afbinc.epizy.com
 * @since             1.0.0
 * @package           Delux_Mobile_App
 *
 * @wordpress-plugin
 * Plugin Name:       Delux Mobile App
 * Plugin URI:        http://afbinc.epizy.com
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Aliyan Faisal
 * Author URI:        http://afbinc.epizy.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       delux-mobile-app
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

if(! defined("dmaPluginPath")){
	define("dmaPluginPath",plugin_dir_path( __FILE__  ));
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'DELUX_MOBILE_APP_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-delux-mobile-app-activator.php
 */
function activate_delux_mobile_app() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-delux-mobile-app-activator.php';
	Delux_Mobile_App_Activator::activate();
}

function deactivate_delux_mobile_app() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-delux-mobile-app-deactivator.php';
	Delux_Mobile_App_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_delux_mobile_app' );
register_deactivation_hook( __FILE__, 'deactivate_delux_mobile_app' );

require plugin_dir_path( __FILE__ ) . 'includes/class-delux-mobile-app.php';


function run_delux_mobile_app() {

	$plugin = new Delux_Mobile_App();
	$plugin->addAdminPages();
	$plugin->addAPIs();
	$plugin->run();

}
run_delux_mobile_app();
