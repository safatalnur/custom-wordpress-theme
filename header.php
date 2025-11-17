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

<!-- Bootstrap menu is used instead of WP Menu -->
<nav class="navbar navbar-expand-lg sticky-top" style="background-color: #e3f2fd;" data-bs-theme="light">
  <div class="container-fluid">
    <a class="navbar-brand" href="/">Custom WordPress Theme</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="/">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/about-me">About Me</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/contact">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="/blog">Blog</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<!-- WP Nav menu currently disabled until walker menu is installed -->
<?php
    // wp_nav_menu(array(
    //     'theme_location'    => 'primary',
    //     'container'         => 'nav',
    //     'container_id'      => 'custom-theme-nav',
    //     'container_class'   => 'custom-theme-nav-container',
    //     'menu_class'        => 'custom-theme-nav-lists',
    //     'before'            => '<span class="menu-icon"></span>',
    //     // 'link_after'       => 'Test',
    //     // 'after'             => '<span class="menu-icon-after"></span>', 
    //     'items_wrap'        => '<ul class="%2$s">%3$s</ul>',
    // ));
?>

<!-- Removed custom header image -->
<!-- <img src="<?php header_image()?>" height="<?php echo get_custom_header()->height; ?>" width="<?php echo get_custom_header()->width; ?>" alt="header-image"> -->
