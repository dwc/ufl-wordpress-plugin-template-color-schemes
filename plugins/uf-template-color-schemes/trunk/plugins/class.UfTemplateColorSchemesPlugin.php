<?php
require_once(UF_PLUGIN_FRAMEWORK_LIBRARY . '/class.UfImageRadioOption.php');
require_once(UF_PLUGIN_FRAMEWORK_LIBRARY . '/class.UfOptionGroup.php');
require_once(UF_PLUGIN_FRAMEWORK_LIBRARY . '/class.UfOptionsPage.php');
require_once(UF_PLUGIN_FRAMEWORK_LIBRARY . '/class.UfPlugin.php');

if (! class_exists('UfTemplateColorSchemesPlugin')) {
	class UfTemplateColorSchemesPlugin extends UfPlugin {
	        var $color_scheme = "";

		function UfTemplateColorSchemesPlugin($name, $file) {
		    $source = UF_TEMPLATE_COLOR_SCHEMES_PLUGIN_URL . '/screenshots/';
		    $radioOptions = array();

                    for($option = 1; $option <= 8; $option++) {
		        $radioOptions[$option] = new UfImageRadioOption('uf_template_color_scheme', '0' . $option . 'a', 'Color Scheme ' . $option, $source . '0' . $option . 'a.jpg');
		    }

		    $options = array(new UfOptionGroup('Template A', $radioOptions));

		    $this->add_admin_page(new UfOptionsPage($name, '', $options));

		    $this->{get_parent_class(__CLASS__)}($name, $file);
		}
	}
}
?>