<?php get_header(); ?>
    <?php if(have_posts()) : 
        while(have_posts()) : the_post(); ?>
            <?php get_template_part('singles/single', get_post_format());?>
        <?php endwhile; ?>
    <?php else : ?>
        <h2>No Content found</h2>
    <?php endif; ?>
<?php get_footer(); ?>