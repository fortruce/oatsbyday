<?php
/**
 * The index for our theme.
 *
 * @package oats
 */
?>
<?php get_header(); ?>

<section class="collage">
    
    <?php if (have_posts()): while(have_posts()): the_post(); ?>
        
        <article class="collage__post">
            <a class="collage__post__image" href="<?php the_permalink(); ?>">
                <?php echo get_the_post_thumbnail(); ?>
            </a>
        </article>
        
    <?php endwhile; else: ?>
    
        <p>Sorry, no posts were found.</p>
    
    <?php endif; ?>
    
</section>

<?php get_footer(); ?>
