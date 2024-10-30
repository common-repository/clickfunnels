<?php
/**
 * ClickFunnels
 *
 * @package     ClickFunnels
 * @author      Etison, LLC
 * @copyright   2016+ Etison, LLC
 * @license     GPL-2.0-or-later
 *
 * @wordpress-plugin
 * Plugin Name: ClickFunnels
 * Plugin URI: https://www.clickfunnels.com
 * Description: Connect to your ClickFunnels account with simple authorization key and show any ClickFunnels page as your homepage or as 404 error pages or simply choose any of your pages and make clean URLs to your ClickFunnels pages. Don't have an account? <a target="_blank" href="https://www.clickfunnels.com">Sign up for your 2 week <em>free</em> trial now.</a>
 * Version: 3.1.3
 * Author: Etison, LLC
 * Author URI: https://www.clickfunnels.com
 * License: GPL v2 or later
 * License URI: http://www.gnu.org/licenses/gpl-2.0.txt
 */

require plugin_dir_path(__FILE__) . 'includes/class-clickfunnels.php';

register_activation_hook(
	__FILE__,
	'clickfunnels_plugin_activated'
);
