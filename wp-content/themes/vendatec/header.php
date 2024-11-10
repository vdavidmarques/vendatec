<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>

    <title itemprop="name">
        <?php
            if(is_home()){
                echo "";
            }elseif(is_tax()){
                echo single_cat_title() . ' |';
            }elseif(is_archive()){
                echo get_the_archive_title() . ' |';
            }elseif(is_singular()){
                echo single_post_title() . ' |';
            }else{
                echo get_the_title() . ' |';
            }
        ?>
       Vendatec
    </title>

    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri() . '/dist/images/apple-icon-57x57.png' ?>">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri() . '/dist/images/apple-icon-60x60.png' ?>">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri() . '/dist/images/apple-icon-72x72.png' ?>">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri() . '/dist/images/apple-icon-76x76.png' ?>">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri() . '/dist/images/apple-icon-114x114.png' ?>">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri() . '/dist/images/apple-icon-120x120.png' ?>">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri() . '/dist/images/apple-icon-144x144.png' ?>">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri() . '/dist/images/apple-icon-152x152.png' ?>">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri() . '/dist/images/apple-icon-180x180.png' ?>">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri() . '/dist/images/favicon-32x32.png' ?>">
    <link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri() . '/dist/images/favicon-96x96.png' ?>">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri() . '/dist/images/favicon-16x16.png' ?>">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;900&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header>
        <div class="container content">
            <div class="branding">
                <a href="/">
                    <img src="<?php echo  get_template_directory_uri() . '/dist/images/vendatec.svg' ?>" alt="Vendatec" class="logo" itemprop="image">
                </a>
            </div>
            <div class="icons">
                <div class="open-menu-mobile">
                    <button onclick="openMenu()" class="bg-menu-mobile">Menu</button>
                </div>
                <div class="top">
                    <div class="search-bar">
                        <img src="<?php echo  get_template_directory_uri() . '/dist/icons/search.svg' ?>" class="search" alt="Vendatec">
                    </div>
                    <div class="menu-items">
                        <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
                            <?php
                            wp_nav_menu(array(
                                'theme_location' => 'custom_header_menu',
                                'menu'           => 'Menu do Header',
                                'menu_id'        => 'custom-header-menu',
                                'menu_class'     => 'main-menu',
                                'fallback_cb'    => '__return_false',
                            ));
                            ?>
                        </nav>
                        <button onclick="closeMenu()" class="bg-close-menu-mobile">
                            Fechar menu
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main id="content" role="main">