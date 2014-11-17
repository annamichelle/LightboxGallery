<?php
$showcasePosition = isset($options['showcase-position'])
    ? html_escape($options['showcase-position'])
    : 'none';
$showcaseFile = $showcasePosition !== 'none' && !empty($attachments);
$galleryPosition = isset($options['gallery-position'])
    ? html_escape($options['gallery-position'])
    : 'left';
?>
<?php if ($showcaseFile): ?>
<div class="gallery-showcase <?php echo $showcasePosition; ?> with-<?php echo $galleryPosition; ?>">
    <?php
        $attachment = array_shift($attachments);
        echo $this->exhibitAttachment($attachment, 
        	array('imageSize' => 'fullsize', 
        		'linkToFile' => 'true', 
        		'linkToMetadata' => 'false', 
        		'imgAttributes' => array('data-lightbox' => 'lightbox-gallery')
        	)
        );
    ?>
</div>
<?php endif; ?>
<div class="gallery <?php if ($showcaseFile || !empty($text)) echo "with-showcase $galleryPosition"; ?>">
    <?php 
    	echo $this->exhibitAttachmentGallery($attachments,
    		array('linkToMetadata' => 'false',
    			'linkToFile' => 'fullsize',
        		'imgAttributes' => array('data-lightbox' => 'lightbox-gallery')
        	)
    	); 
    ?>
</div>
<?php echo $text; ?>
