<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=<?php bloginfo('description'); ?>>
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>

</head>

<body>
<body <?php body_class( 'site' ); ?>>
<div class="test">
<header class="menu_pc">
  <a href="<?php echo home_url( '/' ); ?>">
    <?= get_custom_logo($blog_id)?>
  </a>

  <?php 
	wp_nav_menu( 
        array( 
            'theme_location' => 'main', 
            'container' => 'ul', // afin d'éviter d'avoir une div autour 
            'menu_class' => 'menu_pc', // ma classe personnalisée 
        ) 
    ); 
?>
</header>
</div>
    <?php wp_body_open(); ?>

 