<?php
function register_custom_menus()
{
    register_nav_menus(
        array(
            'custom_header_menu' => __('Menu do Header', 'vendatec'),
        )
    );
}
add_action('after_setup_theme', 'register_custom_menus');