<div class="row">
    <div class="col-4">
        <?php the_post_thumbnail('medium');?>
    </div>
    <div class="col-8">
        <h2><?php the_title();?></h2>
        <small>Posted on: <?php the_time('F j, Y');?> at <?php the_time('g:i a');?>, in <?php the_category();?></small>
        <p><?php the_content();?></p>
        <p>########################</p>
        <br/>
    </div>
</div>