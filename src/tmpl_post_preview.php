<?php
/**
 * This is a post-preview template for our theme.
 *
 * @package oats
 *
 */
?>
<div class="preview col <?php if($col) { echo $col; } ?>">
    <a href="<?php the_permalink(); ?>">
        <?php echo the_post_thumbnail('post-thumbnail',
                                      array('class' => 'preview__image')); ?>
    </a>
    <h1 class="preview__title"><?php the_title(); ?></h1>
</div>
