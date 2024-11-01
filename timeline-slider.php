<?php
/*
Plugin Name: Timeline Slider
Description: Create beautiful and responsive Timline Sliders using the power of block editor
Author: Thin-Code
Author URI: https://hamzamairaj.dev/
Text Domain: timelineslider_wp
Domain Path: /languages
License: GPL v2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Version: 1.0
*/

// Prevent Direct Access
if ( !defined( 'ABSPATH' ) ) {
    exit();
}

define( 'TWP_PATH', plugin_dir_path( __FILE__ ) );
define( 'TWP_URL', plugin_dir_url( __FILE__ ) );
define( 'TWP_BASE', plugin_basename(__FILE__) );
define( 'TWP_FILE', __FILE__ );
define( 'TWP_VERSION', '1.0' );

require_once(TWP_PATH . 'includes/timelinewp-class.php');
require_once(TWP_PATH . 'public/timelinewp-front-class.php');