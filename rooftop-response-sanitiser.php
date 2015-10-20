<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://www.rooftopcms.com
 * @since             1.0.0
 * @package           Rooftop_Response_Sanitiser
 *
 * @wordpress-plugin
 * Plugin Name:       Rooftop Response Sanitiser
 * Plugin URI:        http://errorstudio.co.uk
 * Description:       This is a short description of what the plugin does. It's displayed in the WordPress admin area.
 * Version:           1.0.0
 * Author:            Error
 * Author URI:        https://www.rooftopcms.com
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-3.0.txt
 * Text Domain:       rooftop-response-sanitiser
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-rooftop-response-sanitiser-activator.php
 */
function activate_Rooftop_Response_Sanitiser() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rooftop-response-sanitiser-activator.php';
	Rooftop_Response_Sanitiser_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-rooftop-response-sanitiser-deactivator.php
 */
function deactivate_Rooftop_Response_Sanitiser() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-rooftop-response-sanitiser-deactivator.php';
	Rooftop_Response_Sanitiser_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_Rooftop_Response_Sanitiser' );
register_deactivation_hook( __FILE__, 'deactivate_Rooftop_Response_Sanitiser' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-rooftop-response-sanitiser.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_Rooftop_Response_Sanitiser() {

	$plugin = new Rooftop_Response_Sanitiser();
	$plugin->run();

}
run_Rooftop_Response_Sanitiser();
