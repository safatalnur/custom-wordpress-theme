<div class="col">
    <?php if (has_post_thumbnail()) :?>
        <div class="thumbnail"><?php the_post_thumbnail('medium');?></div>
    <?php else :?>
        <div style="width: 100%; height: 170px; background-color: #000;"></div>
    <?php endif;?>
    <?php the_title(sprintf('<h2 class="entry-title"><a href="%s">', esc_url(get_permalink())), '</a></h2>');?>
    <!-- wp_kses_post is a security measure, it sanitizes its HTML content -->
    <small><?php wp_kses_post(the_category());?></small>
    <?php the_excerpt();?>
</div>