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
      <h4>Muslim</h4>
    </a>

    <ul class="nav_menu">
      <li><a href="#home">Home</a></li>
      <li><a href="#about">About</a></li>
      <li><a href="#service">Service</a></li>
      <li><a href="#skills">Skills</a></li>
      <li><a href="#portfolio">Portfolio</a></li>
      <li><a href="#contact">Contact</a></li>
    </ul>

    <button id="open-menu-btn"><i class="fa-solid fa-bars"></i></button>
    <button id="close-menu-btn"><i class="fa-solid fa-xmark"></i></button>

  </div>
</nav>
<!-- nav section End  -->