<?php

/**
 * The plugin bootstrap file
 *
 * This file is read by WordPress to generate the plugin information in the plugin
 * admin area. This file also includes all of the dependencies used by the plugin,
 * registers the activation and deactivation functions, and defines a function
 * that starts the plugin.
 *
 * @link              https://https://www.facebook.com/webkawsar/
 * @since             1.0.0
 * @package           Emp
 *
 * @wordpress-plugin
 * Plugin Name:       Emp
 * Plugin URI:        https://kawsar.com/emp-plugin
 * Description:       This is EMP plugin
 * Version:           1.0.0
 * Author:            Kawsar Ahmed
 * Author URI:        https://https://www.facebook.com/webkawsar//
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       emp
 * Domain Path:       /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/**
 * Currently plugin version.
 * Start at version 1.0.0 and use SemVer - https://semver.org
 * Rename this for your plugin and update it as you release new versions.
 */
define( 'EMP_VERSION', '1.0.0' );

/**
 * The code that runs during plugin activation.
 * This action is documented in includes/class-emp-activator.php
 */
function activate_emp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-emp-activator.php';
	Emp_Activator::activate();
}

/**
 * The code that runs during plugin deactivation.
 * This action is documented in includes/class-emp-deactivator.php
 */
function deactivate_emp() {
	require_once plugin_dir_path( __FILE__ ) . 'includes/class-emp-deactivator.php';
	Emp_Deactivator::deactivate();
}

register_activation_hook( __FILE__, 'activate_emp' );
register_deactivation_hook( __FILE__, 'deactivate_emp' );

/**
 * The core plugin class that is used to define internationalization,
 * admin-specific hooks, and public-facing site hooks.
 */
require plugin_dir_path( __FILE__ ) . 'includes/class-emp.php';
require plugin_dir_path( __FILE__ ) . 'index.php';
require plugin_dir_path( __FILE__ ) . 'emp-list.php';

/**
 * Begins execution of the plugin.
 *
 * Since everything within the plugin is registered via hooks,
 * then kicking off the plugin from this point in the file does
 * not affect the page life cycle.
 *
 * @since    1.0.0
 */
function run_emp() {

	$plugin = new Emp();
	$plugin->run();

}
run_emp();
