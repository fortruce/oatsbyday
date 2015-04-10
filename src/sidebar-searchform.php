<?php
/**
 * Custom search form for oats theme.
 *
 * @package oats
 *
 */
?>

<form class="search-form" action="/" method="get">
    <fieldset>
        <label class="hidden" for="search">Search</label>
        <input class="search-form__query" type="text" name="s" 
               required id="search" placeholder="Search for Recipes..."
               value="<?php the_search_query(); ?>" />
        <input class="hidden" id="search-submit" type="submit" value="Search" />
        <input id="post_type" type="hidden" value="post" name="post_type" />
    </fieldset>
</form>

