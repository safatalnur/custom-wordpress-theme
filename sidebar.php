<div id="sidebar" class="widgets-area">
    <?php 
        if (is_front_page()) {
            dynamic_sidebar('home-sidebar');
        } else {
            dynamic_sidebar('sidebar-1');
        }
    ?>
</div>