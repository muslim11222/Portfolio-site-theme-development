<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php bloginfo('name'); ?></title>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<!-- nav section start  -->
<nav>
  <div class="container nav_container">

      <a href="<?php echo home_url(); ?>">
      <h4><?php bloginfo('name') ?></h4>
    </a>

    <?php
      wp_nav_menu(array(
        'theme_location' => 'primary_menu',
        'menu_class'     => 'nav_menu',
        'container'      => false,
      ));
    ?>

    <button id="open-menu-btn"><i class="fa-solid fa-bars"></i></button>
    <button id="close-menu-btn"><i class="fa-solid fa-xmark"></i></button>

  </div>
</nav>
<!-- nav section End  -->