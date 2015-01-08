<?php

/**
 * Exhibit attachment view helper.
 * 
 * @package LightboxGallery\View\Helper
 */
class LightboxGallery_View_Helper_ExhibitAttachmentLightboxBook extends Zend_View_Helper_Abstract
{
    /**
     * Return the markup for displaying an exhibit attachment.
     *
     * @param ExhibitBlockAttachment $attachment
     * @param array $fileOptions Array of options for file_markup
     * @param array $linkProps Array of options for exhibit_builder_link_to_exhibit_item
     * @param boolean $forceImage Whether to display the attachment as an image
     *  always Defaults to false.
     * @return string
     */
    public function exhibitAttachmentLightboxBook($attachment, $fileOptions = array(), $linkProps = array(), $forceImage = false, $pageCount = 0)
    {
        $item = $attachment->getItem();
        $file = $attachment->getFile();
        $caption = $attachment['caption'];
        
        if ($file) {
            if (!isset($fileOptions['imgAttributes']['alt'])) {
                $fileOptions['imgAttributes']['alt'] = metadata($item, array('Dublin Core', 'Title'));
            }
            if(!isset($fileOptions['linkAttributes']['data-lightbox'])) {
                $fileOptions['linkAttributes']['data-lightbox'] = 'lightbox-gallery';
            }
            if($caption) {
                $fileOptions['linkAttributes']['data-title'] = $caption;
            }
            if ($pageCount > 0) {
                $fileOptions['linkAttributes']['class'] = "download-file later-pages";
            }
            
            if ($forceImage) {
                $imageSize = isset($fileOptions['imageSize'])
                    ? $fileOptions['imageSize']
                    : 'square_thumbnail';
                $image = file_image($imageSize, $fileOptions['imgAttributes'], $file);
                $html = exhibit_builder_link_to_exhibit_item($image, $linkProps, $item);
            } else {
                $html = file_markup($file, $fileOptions, null);
            }
        } else if($item) {
            $html = exhibit_builder_link_to_exhibit_item(null, $linkProps, $item);
        }

        return apply_filters('exhibit_attachment_markup', $html,
            compact('attachment', 'fileOptions', 'linkProps', 'forceImage')
        );
    }
}
