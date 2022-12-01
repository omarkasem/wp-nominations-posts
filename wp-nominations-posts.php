<?php
/**
 * Plugin Name: WP Nominations Posts
 * Description: Create nominations posts with custom fields.
 * Version:     1.0.0
 * Author:      Omar Kasem
 * License:     GPL v3
 * License URI: https://www.gnu.org/licenses/gpl-3.0.txt
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
define( 'OK_NOM_POSTS_VERSION', '1.0.0' );
define( 'OK_NOM_POSTS_NAME', 'wp-nominations-posts' );
define( 'OK_NOM_POSTS_URL', plugin_dir_url( __FILE__ ) );
define( 'OK_NOM_POSTS_PATH', plugin_dir_path( __FILE__ ) );
define( 'OK_NOM_POSTS_ACF_PATH', plugin_dir_path(__FILE__) . '/includes/acf/' );
define( 'OK_NOM_POSTS_ACF_URL', plugin_dir_url(__FILE__) . '/includes/acf/' );
define( 'OK_NOM_POSTS_ACF_SHOW', true );

require plugin_dir_path( __FILE__ ) . 'app/App.php';

require plugin_dir_path( __FILE__ ) . 'app/Acf.php';

require plugin_dir_path( __FILE__ ) . 'app/PostType.php';