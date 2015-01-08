<?php
$position = isset($options['file-position'])
    ? html_escape($options['file-position'])
    : 'left';
$size = isset($options['file-size'])
    ? html_escape($options['file-size'])
    : 'fullsize';
$pageCount = 0;
?>
<div class="exhibit-items <?php echo $position; ?> <?php echo $size; ?>">
    <?php foreach ($attachments as $attachment): ?>
        <?php echo $this->exhibitAttachmentLightboxBook($attachment, array('imageSize' => $size), array(), false, $pageCount); ?>
    	<?php $pageCount++; ?>
    <?php endforeach; ?>
</div>
<?php echo $text; ?>
