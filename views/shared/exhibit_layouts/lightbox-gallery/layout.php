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
<div class="lightbox-gallery-showcase <?php echo $showcasePosition; ?> with-<?php echo $galleryPosition; ?>">
    <?php
        $attachment = array_shift($attachments);
        echo $this->exhibitAttachmentLightbox($attachment, array('imageSize' => 'fullsize'));
    ?>
</div>
<?php endif; ?>
<div class="lightbox-gallery <?php if ($showcaseFile || !empty($text)) echo "with-showcase $galleryPosition"; ?>">
    <?php 
    	echo $this->exhibitAttachmentLightboxGallery($attachments); 
    ?>
</div>
<?php echo $text; ?>
