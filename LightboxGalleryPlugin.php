<?php

/**
 * Add Subtitle Plugin
 *
 * @author Anna Michelle Martinez-Montavon
 * @license http://www.gnu.org/licenses/gpl-3.0.txt GPLv3 or any later version
 */

class LightboxGalleryPlugin extends Omeka_Plugin_AbstractPlugin
{
	protected $_filters = array('exhibit_layouts');

	public function filterExhibitLayouts($layouts) {
    	$layouts['lightbox-gallery'] = array(
        	'name' => 'Lightbox Gallery',
        	'description' => 'A gallery layout using Lightbox to display all files associated with an item.'
    	);
    return $layouts;
	}
}
?>
