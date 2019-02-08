<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title(''); ?></title>
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/favicon.ico" rel="shortcut icon">
    <link href="<?php echo get_template_directory_uri(); ?>/img/icons/touch.png" rel="apple-touch-icon-precomposed">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<div class="wrapper">

    <header class="header clear" role="banner">

        <a class="header__logo" href="<?php echo home_url(); ?>">
            <img src="<?php the_field('brand_logo', 'option'); ?>" alt="Brand" class="logo">
        </a>

        <div class="nav__hamburger-icon" id="hamburger">
            <div class="hamburger-bar1"></div>
            <div class="hamburger-bar2"></div>
            <div class="hamburger-bar3"></div>
        </div>
        <nav class="nav" role="navigation">
            <?php html5blank_nav(); ?>
            <div class ="social">
                <div class="line"></div>

                <a class="nav__link" href="<?php the_field('facebook_url', 'option'); ?>">
                    <img class="nav__icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/facebook.svg" alt="Facebook" title="Facebook" />
                </a>

                <a class="nav__link" href="<?php the_field('twitter_url', 'option'); ?>">
                    <img class="nav__icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/twitter.svg" alt="Twitter" title="Twitter" />
                </a>

                <a class="nav__link" href="<?php the_field('instagram_url', 'option'); ?>">
                    <img class="nav__icon" src="<?php echo get_template_directory_uri(); ?>/img/icons/instagram.svg" alt="Instagram" title="Instagram" />
                </a>
            </div>
        </nav>
    </header>
