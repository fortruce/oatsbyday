<?php
/**
 * The single index page for the oats theme.
 *
 * @package oats
 *
*/
?>

<?php get_header(); ?>

<?php if (have_posts()): while(have_posts()): the_post(); ?>

    <article class="post">
        <?php get_template_part('tmpl_post_header'); ?>
        <p class="post__content"><?php the_content(); ?></p>
    </article>

<?php endwhile; endif; ?>

<?php get_footer(); ?>
