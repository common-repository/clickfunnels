<?php
/**
 * ClickFunnels
 *
 * @package     ClickFunnels
 * @author      Etison, LLC
 * @copyright   2016+ Etison, LLC
 * @license     GPL-2.0-or-later
 */

// If uninstall.php is not called by WordPress, die.
if ( ! defined( 'WP_UNINSTALL_PLUGIN' ) ) {
	die;
}

delete_option('clickfunnels_api_email');
delete_option('clickfunnels_api_auth');
delete_option('clickfunnels_display_method');
delete_option('clickfunnels_favicon_method');
delete_option('clickfunnels_additional_snippet');
