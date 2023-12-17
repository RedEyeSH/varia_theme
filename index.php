<?php get_header(); ?> 

<?php 
    if (have_posts()):
        while(have_posts()): the_post();
?>

<!-- Main accessing all pages -->

<div class="index-link">
    <h4><a style="color: black;" href="<?php the_permalink()?>"><?php the_title(); ?></a></h4>
</div>

<hr>

<?php 
    endwhile;
    endif;
?>

<?php get_footer(); ?>