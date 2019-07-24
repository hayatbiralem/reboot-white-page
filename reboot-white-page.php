<?php

/**
 * Plugin Name: Reboot White Page
 * Description:  Disables front-end but login and admin area.
 * Version:     1.0.0
 * Author:      Reboot
 * Author URI:  https://reboot.com.tr
 */

if ( !defined('ABSPATH') || ($GLOBALS['pagenow'] !== 'wp-login.php' && !is_admin()) ) exit;