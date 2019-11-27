<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
    <title>Station 6</title>
</head>
<body <?php body_class(); ?>>

<div class="pgae">
<a class="skip-link screen-reader-text" href="#content"><?php esc_html__('Skip to content', 'station6'); ?></a>


<header role='banner' class='site-header' id='masthead'>

    <div class="site-branding">
    <p class="site-title"><a href="<?php echo esc_url(home_url('/') )?>"><?php bloginfo('name'); ?></a></p>

    <p class="site-description"><?php bloginfo('description'); ?></p>
    </div>

    <nav id="site-navigation" class="main-navigation" role="navigation">
        <?php 
        $args = [
            'theme_location' => 'main-menu'
        ];

    wp_nav_menu($args) 
        ?>
    </div>

</header>

<div id="content" class="site-content">




</nav>