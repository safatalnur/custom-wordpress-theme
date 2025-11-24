<div class="container-fluid gx-0">
        <div class="col">
            <?php the_post_thumbnail('medium', array( 'style' => 'width:100%; height: auto;' ));?>
        </div>
        <div class="col">
            <div class="container-fluid bg-dark">
                <h2 class="container-xl text-white py-5"><?php the_title();?></h2>
            </div>
            <div class="container-xl py-3">
                <div class="row">
                    <div class="col-8">
                        <p><?php the_content();?></p>
                    </div>
                    <div class="col-4">
                        <?php get_sidebar();?>
                    </div>
                </div>
            </div>
            <br/>
        </div>
</div>