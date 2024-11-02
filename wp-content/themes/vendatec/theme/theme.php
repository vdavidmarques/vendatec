<?php

/*******************************
    Adding scripts and Css
 ********************************/
add_action('wp_enqueue_scripts', function () {
    if (!is_admin()) {
        wp_enqueue_style('styles', get_template_directory_uri() . '/dist/css/styles.css', array(), '1.0.0');

        // wp_enqueue_script('scripts', get_template_directory_uri() . "/dist/js/scripts.js", array('jquery'), null, true);
    }
});

/*******************************
        Adding logo
 ********************************/

// function theme_custom_logo_setup() {
//     add_theme_support('custom-logo', array(
//         'height'      => 100, 
//         'width'       => 300, 
//         'flex-height' => true,
//         'flex-width'  => true,
//     ));
// }
// add_action('after_setup_theme', 'theme_custom_logo_setup');

// Função para validar posição de parceiro no ACF com grupos
function validar_posicao_parceiro_grupo($valid, $value, $field, $input) {
    if (!$valid) {
        return $valid; // Retorna caso a validação já tenha falhado em outra etapa
    }

    $post_id = get_the_ID(); // ID do post atual
    $grupo = get_field('grupo', $post_id); // Obtém o valor do grupo (Destacado ou Sem destaque)

    if (!$grupo) {
        return $valid; // Se o grupo não está definido, não valida
    }

    // WP_Query para verificar se já existe algum parceiro com a mesma posição no mesmo grupo
    $parceiros = new WP_Query(array(
        'post_type' => 'parceiros', // Altere para o slug do seu Custom Post Type
        'post__not_in' => array($post_id), // Exclui o post atual da busca
        'meta_query' => array(
            'relation' => 'AND',
            array(
                'key' => 'partner-not-highlighted-order', // Campo de posição
                'value' => $value,
                'compare' => '='
            ),
            array(
                'key' => 'partner-highlight', // Campo de grupo (Destacado ou Sem destaque)
                'value' => $grupo,
                'compare' => '='
            )
        )
    ));

    // Verifica se já existe algum parceiro com a mesma posição no mesmo grupo
    if ($parceiros->have_posts()) {
        $valid = 'Esta posição já foi escolhida para outro parceiro neste grupo. Por favor, escolha uma posição única.';
    }

    // Limpa a query
    wp_reset_postdata();

    return $valid;
}

// Aplica a função de validação ao campo 'posicao' do ACF
add_filter('acf/validate_value/name=posicao', 'validar_posicao_parceiro_grupo', 10, 4);

// Post Thumbnail
function my_theme_setup(){
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'my_theme_setup');
