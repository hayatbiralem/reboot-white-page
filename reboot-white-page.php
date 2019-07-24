<?php

/**
 * Plugin Name: Reboot White Page
 * Description:  Disables front-end but login and admin area.
 * Version:     1.0.2
 * Author:      Reboot
 * Author URI:  https://reboot.com.tr
 */

if (!defined('ABSPATH') || ($GLOBALS['pagenow'] !== 'wp-login.php' && !is_admin())) {

    /**
     * The HTTP 503 header Handling site maintenance for SEO
     *
     * @source https://yoast.com/http-503-site-maintenance-seo/
     */

    $protocol = 'HTTP/1.0';

    if ($_SERVER['SERVER_PROTOCOL'] === 'HTTP/1.1') {
        $protocol = 'HTTP/1.1';
    }

    header($protocol . ' 503 Service Unavailable', true, 503);
    header('Retry-After: 3600');

    /**
     * Exit to white page
     *
     * Explorer and Firefox shows a white space but Chrome and Chromium based browsers shows an error page.
     */

    exit;
}