<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alnur Theme</title>
    <?php wp_head(); ?>
</head>
<?php
    $postname = $post->post_name . '-page';
    if (is_home() || is_front_page()) :
        $body_classes = array($postname, 'home-special-class');
    else :
        $body_classes = array($postname, 'non-home-class');
    endif;
?>
<body id="<?php echo $postname;?>" <?php body_class($body_classes);?>>

<?php
    wp_nav_menu(array(
        'theme_location'    => 'primary',
        'container'         => 'nav',
        'container_id'      => 'custom-theme-nav',
        'container_class'   => 'custom-theme-nav-container',
        'menu_class'        => 'custom-theme-nav-lists',
        'before'            => '<span class="menu-icon"></span>',
        // 'link_after'       => 'Test',
        // 'after'             => '<span class="menu-icon-after"></span>', 
        'items_wrap'        => '<ul class="%2$s">%3$s</ul>',
    ));
?>

<img src="<?php header_image()?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="header-image">
