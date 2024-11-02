<?php
//Post types register
function custom_post_parceiros()
{
    $labels = array(
        'name'               => 'Parceiros',
        'singular_name'      => 'Parceiro',
        'add_new'            => 'Adicionar Novo',
        'add_new_item'       => 'Adicionar Novo Parceiro',
        'edit_item'          => 'Editar Parceiro',
        'new_item'           => 'Novo Parceiro',
        'all_items'          => 'Todos os Parceiros',
        'view_item'          => 'Ver Parceiro',
        'search_items'       => 'Buscar Parceiros',
        'not_found'          => 'Nenhum Parceiro encontrado',
        'not_found_in_trash' => 'Nenhum Parceiro na lixeira',
        'menu_name'          => 'Parceiros'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'supports'           => array('title', 'editor', 'thumbnail'),
        'menu_icon'          => 'dashicons-businessman',
    );

    register_post_type('parceiros', $args);
}
add_action('init', 'custom_post_parceiros');

function custom_post_produtos()
{
    $labels = array(
        'name'               => 'Produtos',
        'singular_name'      => 'Produto',
        'add_new'            => 'Adicionar Novo',
        'add_new_item'       => 'Adicionar Novo Produto',
        'edit_item'          => 'Editar Produto',
        'new_item'           => 'Novo Produto',
        'all_items'          => 'Todos os Produtos',
        'view_item'          => 'Ver Produto',
        'search_items'       => 'Buscar Produtos',
        'not_found'          => 'Nenhum Produto encontrado',
        'not_found_in_trash' => 'Nenhum Produto na lixeira',
        'menu_name'          => 'Produtos'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'supports'           => array('title', 'editor', 'thumbnail'),
        'menu_icon'          => 'dashicons-cart',
        'taxonomies'         => array('parceiros'), 
    );

    register_post_type('produtos', $args);
}
add_action('init', 'custom_post_produtos');

function custom_taxonomy_parceiros()
{
    $labels = array(
        'name'              => 'Parceiros',
        'singular_name'     => 'Parceiro',
        'search_items'      => 'Buscar Parceiros',
        'all_items'         => 'Todos os Parceiros',
        'parent_item'       => 'Parceiro Pai',
        'parent_item_colon' => 'Parceiro Pai:',
        'edit_item'         => 'Editar Parceiro',
        'update_item'       => 'Atualizar Parceiro',
        'add_new_item'      => 'Adicionar Novo Parceiro',
        'new_item_name'     => 'Nome do Novo Parceiro',
        'menu_name'         => 'Parceiros',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
    );

    register_taxonomy('parceiros', array('produtos'), $args);
}
add_action('init', 'custom_taxonomy_parceiros');

function custom_post_documentos()
{
    $labels = array(
        'name'               => 'Documentos',
        'singular_name'      => 'Documento',
        'add_new'            => 'Adicionar Novo',
        'add_new_item'       => 'Adicionar Novo Documento',
        'edit_item'          => 'Editar Documento',
        'new_item'           => 'Novo Documento',
        'all_items'          => 'Todos os Documentos',
        'view_item'          => 'Ver Documento',
        'search_items'       => 'Buscar Documentos',
        'not_found'          => 'Nenhum Documento encontrado',
        'not_found_in_trash' => 'Nenhum Documento na lixeira',
        'menu_name'          => 'Documentos'
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'has_archive'        => true,
        'supports'           => array('title', 'thumbnail'),
        'menu_icon'          => 'dashicons-portfolio',
    );

    register_post_type('documentos', $args);
}
add_action('init', 'custom_post_documentos');