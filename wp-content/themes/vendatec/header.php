<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;700&display=swap" rel="stylesheet">
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