<?php
$formStem = $block->getFormStem();
$options = $block->getOptions();
?>
<div class="selected-items">
    <h4><?php echo __('Items'); ?></h4>
    <?php echo $this->exhibitFormAttachments($block); ?>
</div>

<div class="block-text">
    <h4><?php echo __('Text'); ?></h4>
    <?php echo $this->exhibitFormText($block); ?>
</div>

<div class="layout-options">
    <div class="block-header">
        <h4><?php echo __('Layout Options'); ?></h4>
        <div class="drawer"></div>
    </div>
    
    <div class="file-position">
        <?php echo $this->formLabel($formStem . '[options][file-position]', __('File position')); ?>
        <?php
        echo $this->formSelect($formStem . '[options][file-position]',
            @$options['file-position'], array(),
            array('left' => __('Left'), 'right' => __('Right')));
        ?>
    </div>
    
    <div class="file-size">
        <?php echo $this->formLabel($formStem . '[options][file-size]', __('File size')); ?>
        <?php
        echo $this->formSelect($formStem . '[options][file-size]',
            @$options['file-size'], array(),
            array(
                'fullsize' => __('Fullsize'),
                'thumbnail' => __('Thumbnail'),
                'square_thumbnail' => __('Square Thumbnail')
            ));
        ?>
    </div>

    <div class="book-grouping">
        <?php echo $this->formLabel($formStem . '[options][book-grouping]', __('Book grouping')); ?>
        <p class="instructions">If you don't want your book to be grouped with other items you added using Lightbox layouts, give it a unique name here (recommended)</p>
        <?php if (!isset($options['book-grouping']) || $options['book-grouping'] === ''): ?>
            <?php $options['book-grouping'] = 'lightbox-gallery'; ?>
        <?php endif; ?>
        <?php
        echo $this->formText($formStem . '[options][book-grouping]',
            @$options['book-grouping'], array());
        ?>
    </div>
</div>
