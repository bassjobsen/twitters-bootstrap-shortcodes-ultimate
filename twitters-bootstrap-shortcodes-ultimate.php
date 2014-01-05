<?php
/*
Plugin Name: Twitter's Bootstrap Shortcodes Ultimate
Depends: Shortcodes Ultimate
Plugin URI: https://github.com/bassjobsen/twitterbootstrap-shortcodes-ultimate
Description: Add short codes for Twitter's Bootstrap 3 css and components to your site addon for Shortcodes Ultimate
Version: 1.0.4
Author: Bass Jobsen
Author URI: http://bassjobsen.weblogs.fm/
License: GPLv2
*/

/*  Copyright 2013 Bass Jobsen (email : bass@w3masters.nl)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/


/**
 * Check if Shortcodes Ultimate is active
 **/
if ( !in_array( 'shortcodes-ultimate/shortcodes-ultimate.php', apply_filters( 'active_plugins', get_option( 'active_plugins' ) ) ) ) 
{
//Put your plugin code here
//die('install Shortcodes Ultimate first');

}
else
{
/* add new check, see: http://ottopress.com/2012/themeplugin-dependencies/*/

// Includes
require_once 'inc/jbst.php';
require_once 'inc/jbst-shortcodes.php';
require_once 'inc/shortcodes.php';

if(!class_exists('Bootstrap_Shortcodes_Ultimate')) 
{ 
	
class Bootstrap_Shortcodes_Ultimate 
{ 
/*
* Construct the plugin object 
*/ 
public function __construct() 
{ 
	load_plugin_textdomain( 'bootstrapshortcodesultimate', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
    add_filter( 'init', array( $this, 'init' ) );
} 
// END public 

/** 
 * Activate the plugin 
**/ 
public static function activate() 
{ 
	// Do nothing 
} 
// END public static function activate 

/** 
 * Deactivate the plugin 
 * 
**/ 
public static function deactivate() 

{ // Do nothing 
} 
// END public static function deactivate 

/** 
 * hook into WP's admin_init action hook 
 * */ 
 
public function admin_init() 
{ 
	// Set up the settings for this plugin 
	
	$this->init_settings(); 
	// Possibly do additional admin_init tasks 
} 
// END public static function activate - See more at: http://www.yaconiello.com/blog/how-to-write-wordpress-plugin/#sthash.mhyfhl3r.JacOJxrL.dpuf

/** * Initialize some custom settings */ 
public function init_settings() 
{ 
	// register the settings for this plugin 

} // END public function init_custom_settings()


function init()
{

//short codes	
	add_action( 'admin_notices', 'my_admin_notice' );

	/**
	 * Function to show admin notice if Shortcodes Ultimate is not installed
	 */
	function my_admin_notice() {
		// Check that plugin is not installed
		if ( function_exists( 'shortcodes_ultimate' ) ) return;
		?>
		<div class="error">
			<p>For full functionality of this plugin you need to install and activate plugin <strong>Shortcodes Ultimate</strong>. <a href="<?php echo admin_url( 'plugin-install.php?tab=search&s=shortcodes+ultimate' ); ?>">Install now &rsaquo;</a></p>
		</div>
		<?php
	}
    delete_transient( 'su/generator/popup' );// do we need this? empty cache
	add_filter( 'su/data/groups', 'tbusc_add_group',0,1);
	add_filter( 'su/data/shortcodes', 'register_my_custom_shortcodes',0,1);
	
}



} // END class 

}

if(class_exists('Bootstrap_Shortcodes_Ultimate')) 
{ // Installation and uninstallation hooks 
	register_activation_hook(__FILE__, array('Bootstrap_Shortcodes_Ultimate', 'activate')); 
	register_deactivation_hook(__FILE__, array('Bootstrap_Shortcodes_Ultimate', 'deactivate')); 
	
	new Bootstrap_Shortcodes_Ultimate();
}

}
