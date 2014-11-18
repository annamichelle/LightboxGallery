<?php

/**
* Exhibit lightbox gallery view helper.
*
* @package LightboxGallery\View\Helper
*/
class LightboxGallery_View_Helper_ExhibitAttachmentLightboxGallery extends Zend_View_Helper_Abstract
{

	/**
	 * Return the markup for a gallery of exhibit attachments.
	 *
	 * @uses ExhibitBuilder_View_Helper_ExhibitAttachment
	 * @param ExhibitBlockAttachment[] $attachments
	 * @param array $fileOptions
	 * @param array $linkProps
	 * @return string
	 */
	public function exhibitAttachmentLightboxGallery($attachments, $fileOptions = array(), $linkProps = array())
	{
		if (!isset($fileOptions['imageSize'])) {
			$fileOptions['imageSize'] = 'square_thumbnail';
		}

		$html = '';
		foreach ($attachments as $attachment) {
			$html .= '<div class="exhibit-item exhibit-gallery-item">';
			$html .= $this->view->exhibitAttachmentLightbox($attachment, $fileOptions, $linkProps);
			$html .= '</div>';
		}
		
		return apply_filters('exhibit_attachment_gallery_markup', $html,
			compact('attachments', 'fileOptions', 'linkProps'));
	}
}
