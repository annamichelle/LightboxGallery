<?php
$position = isset($options['file-position'])
    ? html_escape($options['file-position'])
    : 'left';
$size = isset($options['file-size'])
    ? html_escape($options['file-size'])
    : 'fullsize';
$bookGroup = isset($options['book-grouping'])
	? html_escape($options['book-grouping'])
	: 'lightbox-gallery';
$pageCount = 0;
?>
<div class="exhibit-items <?php echo $position; ?> <?php echo $size; ?>">
    <?php foreach ($attachments as $attachment): ?>
        <?php echo $this->exhibitAttachmentLightboxBook($attachment, array('imageSize' => $size, 'linkAttributes' => array('data-lightbox' => $bookGroup)), array(), false, $pageCount); ?>
    	<?php $pageCount++; ?>
    <?php endforeach; ?>
</div>
<?php echo $text; ?>
