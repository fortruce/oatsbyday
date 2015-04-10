<?php
/**
 * The index for our theme.
 *
 * @package oats
 */
?>
<?php get_header(); ?>

<?php
$col_classes = array('3-of-5', '2-of-5 col--uneven-small',
                     '3', '3', '3',
                     '2', '2',
                     '4', '4', '4', '4');
$col_length = count($col_classes);
?>

<div id="layout" class="layout layout--collage">
    
    <?php
    $i = 0;
    if(have_posts()):
    while(have_posts() and $i < $col_length):
         the_post();
    ?>

        <?php set_query_var('col', 'col--' . $col_classes[$i]); ?>
        <?php get_template_part('tmpl_post_preview'); ?>
        
    <?php
        $i++;
    endwhile;
    else: ?>
    
    <p>Sorry, no posts were found.</p>
    
    <?php endif; ?>
    
</div>

<?php get_footer(); ?>
