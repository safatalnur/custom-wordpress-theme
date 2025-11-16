<?php
/**
 * Template Name: No Title Layout
 */
?>
<?php get_header(); ?>
    <?php if(have_posts()) : 
        while(have_posts()) : the_post(); ?>
            <h2>This is using No Title Layout template</h2>
            <p><?php the_content();?></p>
        <?php endwhile; ?>
    <?php else : ?>
        <h2>No Content found</h2>
    <?php endif; ?>
<?php get_footer(); ?>
