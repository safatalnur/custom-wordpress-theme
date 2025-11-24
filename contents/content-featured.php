<div class="col">
    <?php if (has_post_thumbnail()) :?>
        <div class="thumbnail w-100"><?php the_post_thumbnail('medium');?></div>
    <?php else :?>
        <div style="width: 100%; height: 170px; background-color: #000;"></div>
    <?php endif;?>
    <small><?php the_category();?></small>
    <?php the_title(sprintf('<h2 class="entry-title"><a href="%s">', esc_url(get_permalink())), '</a></h2>');?>
    <?php the_excerpt();?>
</div>