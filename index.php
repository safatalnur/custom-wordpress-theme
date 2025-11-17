<?php get_header(); ?>
    <?php if(have_posts()) : 
        while(have_posts()) : the_post(); echo 'Post Format: '. get_post_format();?>
            <?php get_template_part('contents/content', get_post_format());?>
        <?php endwhile; ?>
    <?php else : ?>
        <h2>No Content found</h2>
    <?php endif; ?>
<?php get_sidebar();?>
<?php get_footer(); ?>