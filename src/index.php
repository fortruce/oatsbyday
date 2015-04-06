<?php
/**
 * The index for our theme.
 *
 * @package oats
 */
?>
<?php get_header(); ?>

<?php $collage_classes = array('3-of-5', '2-of-5',
                               '3', '3', '3',
                               '2', '2',
                               '4', '4', '4', '4');?>

<section class="collage">
    
    <?php

    $query = new WP_Query(array('post_type' => 'post',
                                'posts_per_page' => 11));

    if ($query->have_posts()):
              $i = -1;
              while($query->have_posts()):
                   $query->the_post();
                   $i++; ?>
        
        <article class="<?php echo 'collage__post collage__post--'. $collage_classes[$i]; ?>">
            <h1 class="collage__post__title"><?php the_title(); ?></h1>
            <a class="collage__post__link" href="<?php the_permalink(); ?>">
                <?php
                echo the_post_thumbnail('post-thumbnail',
                             array('class' => 'collage__post__image')); ?>
            </a>
        </article>
        
    <?php endwhile; else: ?>
    
        <p>Sorry, no posts were found.</p>
    
    <?php endif; ?>
    
</section>

<?php get_footer(); ?>
