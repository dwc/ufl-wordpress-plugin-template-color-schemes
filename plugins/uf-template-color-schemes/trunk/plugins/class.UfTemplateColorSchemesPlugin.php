<?php
require_once(UF_PLUGIN_FRAMEWORK_LIBRARY . '/class.UfImageRadioOption.php');
require_once(UF_PLUGIN_FRAMEWORK_LIBRARY . '/class.UfOptionGroup.php');
require_once(UF_PLUGIN_FRAMEWORK_LIBRARY . '/class.UfOptionsPage.php');
require_once(UF_PLUGIN_FRAMEWORK_LIBRARY . '/class.UfPlugin.php');
require_once(UF_TEMPLATE_COLOR_SCHEMES_PLUGIN_BASE . '/models/class.UfTemplateColorScheme.php');


if (! class_exists('UfTemplateColorSchemesPlugin')) {
	class UfTemplateColorSchemesPlugin extends UfPlugin {
	        var $color_scheme = "";
		var $source = "";

		function UfTemplateColorSchemesPlugin($name, $file, $color_scheme) {
		  $this->source = UF_TEMPLATE_COLOR_SCHEMES_PLUGIN_URL . '/screenshots/';
			$options = array(
				new UfOptionGroup('Template A', array(
			            new UfImageRadioOption('uf_template_color_scheme', '01a', 'Color Scheme 1', $this->source . '01a.jpg'),
				    new UfImageRadioOption('uf_template_color_scheme', '02a', 'Color Scheme 2', $this->source . '02a.jpg'),
				    new UfImageRadioOption('uf_template_color_scheme', '03a', 'Color Scheme 3', $this->source . '03a.jpg'),
				    new UfImageRadioOption('uf_template_color_scheme', '04a', 'Color Scheme 4', $this->source . '04a.jpg'),
				    new UfImageRadioOption('uf_template_color_scheme', '05a', 'Color Scheme 5', $this->source . '05a.jpg'),
				    new UfImageRadioOption('uf_template_color_scheme', '06a', 'Color Scheme 6', $this->source . '06a.jpg'),
				    new UfImageRadioOption('uf_template_color_scheme', '07a', 'Color Scheme 7', $this->source . '07a.jpg'),
				    new UfImageRadioOption('uf_template_color_scheme', '08a', 'Color Scheme 8', $this->source . '08a.jpg'),
				)),
			);
			$this->add_admin_page(new UfOptionsPage($name, '', $options));

			$this->color_scheme = $color_scheme;

			$this->{get_parent_class(__CLASS__)}($name, $file);
		}
	}
}
?>