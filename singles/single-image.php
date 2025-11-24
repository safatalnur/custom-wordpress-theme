<div class="container-fluid gx-0">
        <div class="col">
            <?php the_post_thumbnail('medium', array( 'style' => 'width:100%; height: auto;' ));?>
        </div>
        <div class="col">
            <div class="container-fluid bg-dark">
                <h2 class="container-xl text-white py-5"><?php the_title();?></h2>
            </div>
            <div class="container-xl py-3">
                <small><?php the_time('F j, Y');?> at <?php the_time('g:i a');?>, in <?php the_category(' ');?> - <?php the_tags(); ?></small>
                <p><?php the_content();?></p>
            </div>
            <hr>
            <div class="text-center">
                <?php 
                    if(comments_open()) :
                        comments_template();
                    elseif( !comments_open()) :
                        echo ('No Comments are allowed');
                    endif;
                ?>
            </div>
            <br/>
        </div>
</div>