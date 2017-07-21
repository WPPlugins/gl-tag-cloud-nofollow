<?php
/*
Plugin Name: GL Tag Cloud Nofollow
Plugin URI: http://tech.graphicline.co.za/gl-tag-cloud-nofollow-plugin/
Description: Simple plugin to insert rel="nofollow" to WordPress Tag Cloud links for SEO reasons. That is all the plugin does. GL Tag Cloud Nofollow should work with any Tag Cloud plugin that correctly uses the wp_tag_cloud function. Just install and activate plugin - no configuration options exist. <a title="Find help from the community" href="http://tech.graphicline.co.za/support-forum/plugin-support-group2/gl-tag-cloud-nofollow-plugin-forum3/" target="_blank">Help Forum</a> | <a title="Request Help" href="http://support.graphicline.co.za/ostic/" target="_blank">Premium Support</a>
Version: 1.1
Author: mikeotgaar
Author URI: http://profiles.wordpress.org/mikeotgaar
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: gl-tag-cloud-nofollow

	Copyright (c) 2013 Mike Otgaar (http://www.graphicline.co.za)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License. or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/	


function glow_nofollow_tag($text) {
	return str_replace('<a href=', '<a rel="nofollow" href=',  $text);	
}

add_filter('wp_tag_cloud', 'glow_nofollow_tag');

?>