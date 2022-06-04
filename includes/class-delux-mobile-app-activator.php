<?php

/**
 * Fired during plugin activation
 *
 * @link       http://afbinc.epizy.com
 * @since      1.0.0
 *
 * @package    Delux_Mobile_App
 * @subpackage Delux_Mobile_App/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    Delux_Mobile_App
 * @subpackage Delux_Mobile_App/includes
 * @author     Aliyan Faisal <aliyanfaisal15@gmail.com>
 */
class Delux_Mobile_App_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		// create DB_ TABLE
		global $wpdb;

		$charset_collate = $wpdb->get_charset_collate();
		$table_name = $wpdb->prefix."dma_settings";
		$sql = "CREATE TABLE $table_name (
		  id int NOT NULL AUTO_INCREMENT,
		  meta_key text,
		  meta_value text ,
		  screen_name text,
		  PRIMARY KEY  (id)
		) $charset_collate;";

		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		// dbDelta( $sql );
		maybe_create_table($table_name, $sql);

	}

}
