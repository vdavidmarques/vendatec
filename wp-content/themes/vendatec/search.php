<?php
get_header();
include 'components/search/tertiary-banner.php';


$search_query = get_search_query();
$args = array(
    'post_type' => array('parceiros', 'produtos'),
    'posts_per_page' => -1,
    's' => $search_query,
);

$query = new WP_Query($args);

?>
<section class="search-results search-page">
    <div class="container">
        <h2 class="search-page--result">Resultados para: <span class="search-page--search-query"> "<?php echo esc_html($search_query); ?>"</span></h2>
        <?php if ($query->have_posts()) : ?>
            <div class="search-page--list">
                <?php
                while ($query->have_posts()) : $query->the_post();
                    $titulo = get_the_title();
                    $description = get_field('products-desc');
                    $files = get_field('product-file', get_the_ID());
                    $short_desc = get_field('partner-short-descrip');
                    $slug = get_post_field('post_name', get_the_ID());
                ?>

                    <div class="search-page--list--item">
                        <div class="title">
                            <h3 class="title--name"><?php echo esc_attr($titulo); ?></h3>
                        </div>
                        <?php if($description): ?>
                            <p class="desc"><?php echo esc_html($description); ?></p>
                        <?php 
                            endif;                              
                            if($short_desc):
                        ?>
                            <p class="desc"><?php echo esc_html($short_desc); ?></p>
                        <?php
                        endif;         
                        if ($files) :
                            foreach ($files as $post) :
                                setup_postdata($post);
                                $file_url = get_field('file-docs', $post->ID);
                                if ($file_url) :
                        ?>
                                    <a href="<?php echo $file_url ?>" class="button button--quaternary button--arrow button--arrow-up button--arrow-up--white"> Saiba mais </a>
                        <?php
                                endif;
                            endforeach;
                        elseif($slug):
                        ?>
                            <a href="parcerias/#<?php echo esc_attr($slug); ?>" class="button button--quaternary button--arrow button--arrow-up button--arrow-up--white">Saiba Mais</a>
                        <?php endif;
                        ?>
                    </div>
                <?php endwhile; ?>
            </div>
        <?php else : ?>
            <p>Nenhum resultado encontrado.</p>
            <p>Tente novamente ou entre em contato com o suporte.</p>

        <?php endif; ?>
    </div>
</section>
<?php
wp_reset_postdata();
get_footer();
