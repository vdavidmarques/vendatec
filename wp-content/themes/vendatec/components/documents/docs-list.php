<section class="docs-list">
    <?php 
        function exibir_documentos() {
            $documentos = new WP_Query(array(
                'post_type' => 'documentos', // Nome do custom post 'Documentos'
                'posts_per_page' => -1
            ));
        
            if ($documentos->have_posts()) {
                echo "<h2>Documentos</h2>";
                echo "<ul>";
                while ($documentos->have_posts()) {
                    $documentos->the_post();
                    $titulo = get_the_title();
                    $arquivo = get_field('file-docs');
                    $thumb = get_the_post_thumbnail();
                    
                    echo $thumb;
                    echo "<strong>{$titulo}</strong><br>";
                    if ($arquivo) {
                        echo "Arquivo para download: <a href='{$arquivo['url']}' target='_blank'>{$arquivo['filename']}</a>";
                    }
                }
                wp_reset_postdata();
            }
        }
        exibir_documentos();
    ?>
</section>