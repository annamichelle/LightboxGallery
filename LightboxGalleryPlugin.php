<?php

/**
 * Add Subtitle Plugin
 *
 * @author Anna Michelle Martinez-Montavon
 * @license http://www.gnu.org/licenses/gpl-3.0.txt GPLv3 or any later version
 */

class LightboxGalleryPlugin extends Omeka_Plugin_AbstractPlugin
{
	protected $_hooks = array('exhibit_builder_page_head');

	protected $_filters = array('exhibit_layouts');

	public function hookExhibitBuilderPageHead($args) {
		if(array_key_exists('lightbox-gallery', $args['layouts'])) {
			queue_js_file('lightbox.min', 'javascripts/lightbox');
			queue_css_file('lightbox');
		}
	}

	public function filterExhibitLayouts($layouts) {
    	$layouts['lightbox-gallery'] = array(
        	'name' => 'Lightbox Gallery',
        	'description' => 'A gallery layout that uses Lightbox to display all files attached to an exhibit page.'
    	);
    return $layouts;
	}
}
?>
