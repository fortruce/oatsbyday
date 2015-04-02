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
            <header>
                <h1 class="post__title"><?php the_title(); ?></h1>
                <time datetime="<?php the_time('Y-m-d');  ?>"><?php the_time('F j, Y'); ?></time>
            </header>
            <p class="post__content"><?php the_content(); ?></p>
        </article>
        
    <?php endwhile; else: ?>
    
        <p>Sorry, no posts were found.</p>
    
    <?php endif; ?>
    
</section>

<?php get_footer(); ?>
