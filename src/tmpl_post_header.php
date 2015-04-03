<?php
/**
 * This is a template for the header of a post.
 *
 * @package oats
 *
 */
?>

<header>
    <h1 class="post__title">
        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </h1>
    <time datetime="<?php the_time('Y-m-d');  ?>"><?php the_time('F j, Y'); ?></time>
</header>
