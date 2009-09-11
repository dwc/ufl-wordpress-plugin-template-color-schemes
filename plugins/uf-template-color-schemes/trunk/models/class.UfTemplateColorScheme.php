<?php
if (! class_exists('UfTemplateColorScheme')) {
	class UfTemplateColorScheme {
	        var $name;
		var $color_scheme;

		function UfTemplateColorScheme($name, $color_scheme) {
 		        $this->name = $name;
			$this->color_scheme = $color_scheme;
		}

	}
}
?>
