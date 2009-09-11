<?php
/*
Plugin Name: UF Template Color Schemes
Version: 0.1
Plugin URI: http://www.webadmin.ufl.edu/
Description: Color scheme selector for WordPress themes based on UF Templates.
Author: Joey Spooner <spooner@ufl.edu>
Author URI: http://www.spoonstein.com/
*/

define('UF_TEMPLATE_COLOR_SCHEMES_PLUGIN_BASE', dirname(__FILE__) . '/');
define('UF_TEMPLATE_COLOR_SCHEMES_PLUGIN_URL', WP_PLUGIN_URL . '/' . str_replace(basename(__FILE__), "", plugin_basename(__FILE__)));

// Load the plugin after the framework
add_action('plugins_loaded', 'uf_template_color_schemes_plugins_loaded');
//add_action('wp_head', 'uf_template_color_schemes_display');

$uf_template_color_schemes_plugin = null;
function uf_template_color_schemes_plugins_loaded() {
	global $uf_template_color_schemes_plugin;

        require_once('models/class.UfTemplateColorScheme.php');
	$color_scheme = new UfTemplateColorScheme(get_option('blogname'), get_option('uf_template_color_scheme'));

	require_once('plugins/class.UfTemplateColorSchemesPlugin.php');
	$uf_template_color_schemes_plugin = new UfTemplateColorSchemesPlugin('Color Schemes', __FILE__, $color_scheme->color_scheme);
}

function uf_template_color_scheme() {
	global $uf_template_color_schemes_plugin;
  
        $color_scheme = null;
	$color_scheme = $uf_template_color_schemes_plugin->color_scheme;

	if($color_scheme) {
	    return $color_scheme;
	}
}

?>