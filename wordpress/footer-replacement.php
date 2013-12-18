<?php

/**
Plugin Name: Website Footer Replacement Plugin
Plugin URI: http://crowncitynews.com
Description: WordPress footer replacement
Author: Grant Derderian for Crown City News
Version: 1.0
Author URI: http://crowncitynews.com
**/

function dashboard_footer () {
	// Any text you enter in the box below will replace the default WordPress admin footer text
	echo "You're at the staff area of XYZ Site, proudly powered by WordPress." . ' Unauthorized access to this system is strictly prohibited.' . ' - <a href="mailto:help@website.com" title="Contact XYZ Website Support">Contact XYZ Website Support</a>';
}

add_filter('admin_footer_text', 'dashboard_footer');