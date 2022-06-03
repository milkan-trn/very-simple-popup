<?php
/**
 * @wordpress-plugin
 * Plugin Name:      	Simple Popup - Mehadrin
 * Plugin URI:        	https://www.brainstorm.rs/
 * Description:         Simple Popup has predesignated templates that you can use for your popup
 * Version:           	1.0.0
 * Requires at least: 	5.3
 * Requires PHP:      	7.3
 * Author:            	Milkan Trninic brainstorm.rs
 * Author URI:         	https://profiles.wordpress.org/milkan2002/
 * Text Domain:       	email-custom-fields
 * License:           	GPLv2 or later
 * License URI:       	http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: 	https://github.com/milkan-trn/simple-popup
 */
/*
Thanks https://www.brainstorm.rs/ for supporting this plugin.
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.
This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.
*/
defined('ABSPATH') or die('Nothing Here!');


if (!class_exists('Spop_simple_popup')) {
    class Spop_simple_popup
    { 

        function __construct() {
            // include plugin dependencies: admin only
            
            include_once plugin_dir_path(__FILE__) .'templates/firstTemplate/firstTemplate.php';
          
       
        }
//activate, deactivate plugin functions 
        function activate()
        {
            flush_rewrite_rules();
        }

        function deactivate()
        {
            flush_rewrite_rules();
        }

    }
}

$Spop_simple_popup = new Spop_simple_popup();

register_activation_hook(__FILE__, [$Spop_simple_popup, 'activate']);
register_deactivation_hook(__FILE__, [$Spop_simple_popup, 'deactivate']);