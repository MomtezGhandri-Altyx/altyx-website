<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <title>ALTYX - NEARSHORE SOLUTIONS TUNISIE</title>
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/foundation.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/slick.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/slick-theme.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/swiper.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/app.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/responsive.css">
    <link href="<?php echo get_template_directory_uri(); ?>/static/css/fontello.css" media="screen" rel="stylesheet" type="text/css" />
    <link href="<?php echo get_template_directory_uri(); ?>/static/css/font-awesome.css" media="screen" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/linea-styles.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/linea-arrows-styles.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/static/css/gilroy.css" media="screen" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,400i,600,600i,700,700i" rel="stylesheet">
</head>

<body id="home-page">
<div id="logo"><a href="/">

        <?php
        if (!has_custom_logo()) {
            echo '<a href="'.get_home_url().'"><img src="'.get_template_directory_uri().'/images/logo.png" alt="logo en-tête Palm" width="auto" height="auto"  class="logo-home" ></a>';
        }else{
            $custom_logo_id = get_theme_mod( 'custom_logo' );
            $custom_logo_url = wp_get_attachment_image_url( $custom_logo_id , 'full' );
            echo '<a href="'.get_home_url().'"><img src="' . esc_url( $custom_logo_url ) . '" alt="logo en-tête Palm"></a>';
        }
        ?>
    </a></div>
<div id="menu-wrapper">
    <div id="menu-controller">
        <div id="menu-icon">
            <div id="menu-icon-stack">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <div id="menu-icon-close">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <div id="menu-content">
        <nav id="main-menu">
            <?php
            $defaults = array(
                'name' => 'main-menu',
                'container' => 'div',
                'container_class' => 'menu-content',
                'container_id' => '',
                'menu_class' => '',
                'add_li_class' => '',
            );
            wp_nav_menu($defaults);
            ?>
        </nav>

        <div id="socials">
            <ul>
                <li><a href="#"><i class='fa fa-facebook'></i></a></li>
                <li><a href="#"><i class='fa fa-linkedin'></i></a></li>
            </ul>
        </div>
    </div>
    <div id="bg-primary" class=""></div>
</div>
<div id="white-bar">
</div>
