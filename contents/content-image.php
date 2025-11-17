    <h1><?php echo 'Post format for this post is IMAGE ==>', the_title();?></h1>
    
    <?php the_post_thumbnail('medium');?>
    <p><?php the_content();?></p>
    <p>########################</p>
    <br/>