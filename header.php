<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
  <header class="site-header">
    <div class="site-branding">
    
      <?php the_custom_logo(); ?>

      <h1 class="site-title">
        <a href="<?php home_url( '/' ); ?>">
          <?php bloginfo('name'); ?>
        </a>
      </h1>  
      
    </div> <!-- .site-branding -->

    <div class="site-navigation">
      <?php 
        wp_nav_menu( array(
            'theme_location' => 'menu-main',
            'container' => 'nav',
            'container_class' => 'menu-main',
            'container_id' => 'menu-main',
        ) );
      ?>
  </div> <!-- .site-navigation -->
  </header>
<div id="primary" class="content-area">
  <main id="main" class="site-main">