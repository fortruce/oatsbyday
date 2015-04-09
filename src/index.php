<?php
/**
 * The index for our theme.
 *
 * @package oats
 */
?>
<?php get_header(); ?>

<?php $col_classes = array('3-of-5', '2-of-5 col--uneven-small',
                           '3', '3', '3',
                           '2', '2',
                           '4', '4', '4', '4');?>

<div id="layout" class="layout layout--collage">
    
    <?php
    $query = new WP_Query(array('post_type' => 'post',
                                'posts_per_page' => 11));

    if ($query->have_posts()):
             $i = -1;
    while($query->have_posts()):
                  $query->the_post();
    $i++; ?>
        
        <div class="<?php echo 'post col col--'. $col_classes[$i]; ?>">
            <h1 class="post__title"><?php the_title(); ?></h1>
            <a href="<?php the_permalink(); ?>">
                <?php echo the_post_thumbnail('post-thumbnail',
                                        array('class' => 'post__image')); ?>
            </a>
        </div>
        
    <?php endwhile; else: ?>
    
    <p>Sorry, no posts were found.</p>
    
    <?php endif; ?>
    
</div>

<?php get_footer(); ?>
