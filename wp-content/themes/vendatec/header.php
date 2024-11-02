<?php include_once 'utils/check-enviroment.php'; ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <header id="header" role="banner">
        <div id="branding">
            <a href="/">
                <img src="<?php echo  get_template_directory_uri() . '/dist/images/vendatec.svg' ?>" alt="Vendatec" class="logo" itemprop="image">
            </a>
        </div>
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
    </header>

    <main id="content" role="main">