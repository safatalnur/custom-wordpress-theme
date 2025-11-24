<?php get_header(); ?>
<div class="row px-4">
    <div class="col-8">
        <?php if(have_posts()) : 
            while(have_posts()) : the_post(); 
            // echo 'Post Format: '. get_post_format();
            ?>
                <?php the_content();?>
            <?php endwhile; ?>
        <?php else : ?>
            <h2>No Content found</h2>
        <?php endif;
        /**
         * Display the latest post pulled from 3 specific categories below
         */
        ?>
        <section id="most-recent-3-posts" class="">
            <h2>Most Three Recent Posts</h2>
            <div class="recent-posts-container container row">
                <?php 
                    // Fetch categories ids 8,9,10 to display their latest posts
                    $cat_args = array(
                        'include'   => '8,9,10',
                    );
                    $categories = get_categories($cat_args);
                    // var_dump($categories);
                    // Loop through each category, query most recent post per category, and load block-featured block
                    foreach ($categories as $category) :
                        $args = array(
                                'type'          => 'post',
                                'posts_per_page' => 1,
                                'category__in' => $category->cat_ID, // or use term_id
                            );
                            $recentBlogs = new WP_Query ($args); 
                        ?>
                            <?php if ($recentBlogs->have_posts()) :
                                while ($recentBlogs->have_posts()) : $recentBlogs->the_post();?>
                                    <?php get_template_part('blocks/block', 'featured');?>
                                <?php endwhile;?>
                            <?php else : ?>
                                <h2>No posts available</h2>
                            <?php endif; ?>
                            <?php wp_reset_postdata();?>
                    <?php endforeach;?>
            </div>
        </section>
        
    <!-- ####### -->
    </div>
    <div class="col-4">
        <div class="sticky-top" style="top: 70px !important">
            <?php get_sidebar('home-sidebar');?>
        </div>
    </div>
</div>
<section id="most-recent-post" class="px-4 col-12 text-center" style="max-width: 700px; margin: auto;">
    <h2>Most Recent Post</h2>

    <div class="border border-danger">
        <?php 
            $lastBlog = new WP_Query(array(
                'type'  => 'posts',
                'posts_per_page' => 1,
            ));
            // var_dump($lastBlog);
            if ($lastBlog->have_posts()) :
                while ($lastBlog->have_posts()) : $lastBlog->the_post();?>
                    <?php the_post_thumbnail('medium');?>
                    <a href="<?php the_permalink();?>">
                        <h3><?php the_title();?></h3>
                    </a>
                    <p><?php the_excerpt();?></p>
                <?php endwhile;
            else : ?>
                <h2>No posts found</h2>
            <?php endif;
            wp_reset_postdata();
        ?>
    </div>
</section>
<section id="next-2-recent-posts" class="px-4 col-12 text-center" style="max-width: 700px; margin: auto;">
    <h2>Next Two (2) Recent Posts</h2>

    <div class="border border-primary">
        <?php 
            $args = array(
                'type'  => 'posts',
                'posts_per_page' => 2,
                'offset'        => 1,
            );
            $lastBlog = new WP_Query($args);
            // var_dump($lastBlog);
            if ($lastBlog->have_posts()) :
                while ($lastBlog->have_posts()) : $lastBlog->the_post();?>
                    <?php the_post_thumbnail('medium');?>
                    <a href="<?php the_permalink();?>">
                        <h3><?php the_title();?></h3>
                    </a>
                    <p><?php the_excerpt();?></p>
                <?php endwhile;
            else : ?>
                <h2>No posts found</h2>
            <?php endif;
            wp_reset_postdata();
        ?>
    </div>
</section>
<section id="review-posts" class="px-4 col-12 text-center" style="max-width: 700px; margin: auto;">
    <h2>Recent Review Posts</h2>

    <div class="border border-warning">
        <?php
            $args = array(
                'type'  => 'posts',
                'category_name'      => 'reviews',
            );
            $lastBlog = new WP_Query($args);
            // var_dump($lastBlog);
            if ($lastBlog->have_posts()) :
                while ($lastBlog->have_posts()) : $lastBlog->the_post();?>
                    <?php the_post_thumbnail('medium');?>
                    <a href="<?php the_permalink();?>">
                        <h3><?php the_title();?></h3>
                    </a>
                    <p><?php the_excerpt();?></p>
                <?php endwhile;
            else : ?>
                <h2>No posts found</h2>
            <?php endif;
            wp_reset_postdata();
        ?>
    </div>
</section>
<?php get_footer(); ?>