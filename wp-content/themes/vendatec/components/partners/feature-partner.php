<section class="feature-partner">
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
                $descricao_curta = get_field('partner-short-descrip');
                $destaque = get_field('partner-highlight');

                echo $titulo;
                echo '<p>' . $descricao_curta . '</p>';
                echo '<p> Destaque:' . $destaque . '</p>';
            }
            wp_reset_postdata();
        }
    }
    exibir_parceiros();
    ?>
    <br /><br /><br /><br />
    <?php
    function exibir_produtos()
    {
        $produtos = new WP_Query(array(
            'post_type' => 'produtos',
            'posts_per_page' => -1
        ));

        if ($produtos->have_posts()) {
            echo "<h2>Produtos</h2>";
            echo "<ul>";
            while ($produtos->have_posts()) {
                $produtos->the_post();
                $titulo = get_the_title();
                $descricao = get_the_content();
                $thumb = get_the_post_thumbnail_url();

                echo '<br/><br/><br/>' . $titulo;
                echo "<br>Descrição: {$descricao}<br>";
                echo $thumb . '<br>';

                // Exibe a taxonomia associada (substitua 'nome_taxonomia' pelo slug da taxonomia)
                $tax_terms = get_the_terms(get_the_ID(), 'parceiros'); // Insira o slug da taxonomia aqui

                if ($tax_terms && !is_wp_error($tax_terms)) {
                    echo "Taxonomias: ";
                    foreach ($tax_terms as $term) {
                        echo $term->name . " "; // Exibe o nome do termo
                    }
                } else {
                    echo "Nenhuma taxonomia associada.";
                }
            }
            wp_reset_postdata();
        }
    }
    exibir_produtos();
    ?>
</section>