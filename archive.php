<?php get_header(); ?> 

<?php 
    if (have_posts()):
        while(have_posts()): the_post();
?>

<div class="archive">
    <div class="archive-box">
        <h4><a style="color: black;" href="<?php the_permalink()?>"><?php the_title() ?></a></h4>
    </div>
</div>

<hr>

<?php 
    endwhile;
    endif;
?>

<?php get_footer(); ?>
<div class = "archive-message">
    <p>This page is controlled by archive.php</p>
</div>
