=== Reboot White Page ===
Contributors: hayatbiralem
Donate link: http://buymeacoff.ee/hayatbiralem
Tags: suspend, under construction
Requires at least: 3.0.0
Tested up to: 5.2.2
Stable tag: 1.0.0
License: GPLv3 or later
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Disables front-end but login and admin area.

== Description ==

This is a very simple plugin to disable the front-end area by showing an empty white page but login and admin area.

Sometimes we need to suspend websites without deleting their code. For example unpaid accounts or something like that.

Of course we could use some maintenance plugin for that but they are a little heavy and unnecessary to simple and naive purpose, we think.

Probably you heard that before: "Less is more!". We believe that. So this plugin has a single line of code.

`<?php if ( !defined('ABSPATH') || ($GLOBALS['pagenow'] !== 'wp-login.php' && !is_admin()) ) exit;`

It is the lightest weight :)

== Usage ==

Just activate to enable and deactivate to disable. No settings needed.

== Installation ==

Installing this plugin can be done either by searching for "Reboot White Page" via the "Plugins > Add New" screen in your WordPress dashboard, or by using the following steps:

1. Download the plugin via WordPress.org.
1. Upload the ZIP file through the "Plugins > Add New > Upload" screen in your WordPress dashboard.
1. Activate the plugin through the 'Plugins' menu in WordPress
1. Visit the settings screen and configure, as desired.

== Changelog ==

= 1.0.0 =
* Initial release.

== Frequently Asked Questions ==

= How do I contribute? =

We encourage everyone to contribute their ideas, thoughts and code snippets. This can be done by forking the [repository over at GitHub](https://github.com/hayatbiralem/reboot-white-page).