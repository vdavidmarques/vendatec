<section class="partners">
    <div class="container">
        <?php
        echo get_field('home-texts-partners', $id);
        ?>
        <div class="partners-list">
            <?php
            function exibir_parceiros()
            {
                $parceiros = new WP_Query(array(
                    'post_type' => 'parceiros', 
                    'posts_per_page' => -1,
                    'order' => 'ASC'
                ));

                if ($parceiros->have_posts()) {
                    while ($parceiros->have_posts()) {
                        $parceiros->the_post();
                        $titulo = get_the_title();
                        $imagem_principal = get_field('partner-main-imagem');
                        $descricao_curta = get_field('partner-short-descrip');
                        $destaque = get_field('partner-highlight');
                        $ordem_destacada = get_field('partner-highlighted-order');
                        $ordem_nao_destacada = get_field('partner-not-highlighted-order');
                        echo $titulo;
                        echo $descricao_curta;
                        echo $imagem_principal['url'];
                        echo $ordem_destacada;
                        echo $ordem_nao_destacada;
                    }
                    wp_reset_postdata();
                }
            }
            exibir_parceiros();

            ?>
        </div>
    </div>
</section>