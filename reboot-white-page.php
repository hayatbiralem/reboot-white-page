<?php

/**
 * Plugin Name: Reboot White Page
 * Description:  Disables front-end but wp login page.
 * Version:     1.0.0
 * Author:      Reboot
 * Author URI:  https://reboot.com.tr
 */

if (!defined('ABSPATH')) {
    exit('No direct script access allowed');
}

if ( $GLOBALS['pagenow'] !== 'wp-login.php' && !is_admin() ) {
    exit;
}