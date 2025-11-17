    <h1><?php the_title();?></h1>
    
    <small>Posted on: <?php the_time('F j, Y');?> at <?php the_time('g:i a');?>, in <?php the_category();?></small>
    <?php the_post_thumbnail('medium');?>
    <p><?php the_content();?></p>
    <p>########################</p>
    <br/>