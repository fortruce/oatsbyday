<?php
/**
 * The index for our theme.
 *
 * @package oats
 */
?>
<?php get_header(); ?>

<section class="posts">
    
    <?php if (have_posts()): while(have_posts()): the_post(); ?>
        
        <article class="post">
            <?php get_template_part('tmpl_post_header'); ?>
            <p class="post__content"><?php the_excerpt(); ?></p>
        </article>
        
    <?php endwhile; else: ?>
    
        <p>Sorry, no posts were found.</p>
    
    <?php endif; ?>
    
</section>

<?php get_footer(); ?>
