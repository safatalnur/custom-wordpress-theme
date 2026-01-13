<?php get_header(); ?>
<div class="row px-4">
    <div class="col-8">
        <?php if(have_posts()) : 
            while(have_posts()) : the_post(); 
            // echo 'Post Format: '. get_post_format();
            ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        <?php else : ?>
            <h2>No Content found</h2>
        <?php endif; ?>
    </div>
    <div class="col-4">
        <div class="sticky-top" style="top: 70px !important">
            <?php get_sidebar();?>
        </div>
    </div>
</div>
<?php get_footer(); ?>