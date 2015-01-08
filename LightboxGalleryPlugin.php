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
		if(array_key_exists('lightbox-gallery', $args['layouts'])
            || array_key_exists('lightbox-file-text', $args['layouts'])
            || array_key_exists('lightbox-book', $args['layouts'])) {
			queue_js_file('lightbox.min', 'javascripts/lightbox');
			queue_css_file('lightbox');
		}
	}

	public function filterExhibitLayouts($layouts) {
    	$layouts['lightbox-file-text'] = array(
        	'name' => 'Lightbox File with Text',
        	'description' => 'A layout that features files justified to the left or right and uses Lightbox to display larger versions of those files.'
    	);
    	$layouts['lightbox-gallery'] = array(
        	'name' => 'Lightbox Gallery',
        	'description' => 'A gallery layout that uses Lightbox to display all files attached to an exhibit page.'
    	);
    	$layouts['lightbox-book'] = array(
        	'name' => 'Lightbox Book',
        	'description' => 'A layout that features the first file attached to an exhibit page and displays the rest only in Lightbox.'
    	);
    return $layouts;
	}
}
?>
