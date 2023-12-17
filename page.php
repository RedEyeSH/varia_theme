<?php get_header(); ?> 

<?php 
    if (have_posts()):
        while(have_posts()): the_post();
?>

<div class="default-page">
    <h4><?php the_title(); ?></h4>
    <p><?php the_content(); ?></p>
</div>

<hr>

<?php 
    endwhile;
    endif;
?>

<?php get_footer(); ?>

<div class="page-message">
    <p>This page is controlled by page.php</p>
</div>