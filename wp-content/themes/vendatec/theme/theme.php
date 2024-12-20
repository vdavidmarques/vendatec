<?php

/*******************************
    Adding scripts and Css
 ********************************/
add_action('wp_enqueue_scripts', function () {
    if (!is_admin()) {
        wp_enqueue_style('styles', get_template_directory_uri() . '/dist/css/styles.css', array(), '1.0.0');

        wp_enqueue_script('scripts', get_template_directory_uri() . "/dist/js/scripts.js", array('jquery'), null, true);
    }
});

function validar_posicao_parceiro_grupo($valid, $value, $field, $input)
{
    if (!$valid) {
        return $valid;
    }

    $post_id = get_the_ID();
    $grupo = get_field('grupo', $post_id);

    if (!$grupo) {
        return $valid;
    }


    $parceiros = new WP_Query(array(
        'post_type' => 'parceiros',
        'post__not_in' => array($post_id),
        'meta_query' => array(
            'relation' => 'AND',
            array(
                'key' => 'partner-not-highlighted-order',
                'value' => $value,
                'compare' => '='
            ),
            array(
                'key' => 'partner-highlight',
                'value' => $grupo,
                'compare' => '='
            )
        )
    ));
    if ($parceiros->have_posts()) {
        $valid = 'Esta posição já foi escolhida para outro parceiro neste grupo. Por favor, escolha uma posição única.';
    }


    wp_reset_postdata();

    return $valid;
}
add_filter('acf/validate_value/name=posicao', 'validar_posicao_parceiro_grupo', 10, 4);

/*******************************
    Adding Thumbnail
 ********************************/

function my_theme_setup()
{
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'my_theme_setup');

/*******************************
    Get ID by Slug
 ********************************/

function get_page_id_by_slug($slug)
{
    $page = get_page_by_path($slug, OBJECT, 'page');
    if ($page) {
        return $page->ID;
    }
    return 0;
}

/*******************************
    Adding the Options Page in Admin Menu
 *Create a page called "General Information", then change the ID and at get_page_by_path() of this page at the line below
 ********************************/

 add_action('admin_menu', 'linked_url');
 function linked_url()
 {
     add_menu_page('linked_url', 'Informações Gerais', 'read', 'post.php?post=5&action=edit', '', 'dashicons-admin-generic',  90);
 }
 
 /*******************************
     Hiding the Options Page
  ********************************/
 
 add_filter('parse_query', 'exclude_pages_from_admin');
 function exclude_pages_from_admin($query)
 {
     global $pagenow, $post_type;
     if (is_admin() && $pagenow == 'edit.php' && $post_type == 'page') {
         $settings_page = get_page_by_path('informacoes-gerais', NULL, 'page')->ID;
         $query->query_vars['post__not_in'] = array($settings_page);
     }
 }