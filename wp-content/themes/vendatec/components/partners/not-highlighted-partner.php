<section class="content-about highlighted-partners not-highlighted-partners">
    <div class="container">
    <?php
function exibir_produtos()
{
    $partners_not_highlighted = new WP_Query(array(
        'post_type' => 'parceiros',
        'posts_per_page' => -1,
        'orderby' => 'meta_value_num',
        'type' => 'NUMERIC',
        'meta_key' => 'partner-not-highlighted-order',
        'order' => 'ASC'
    ));

    if ($partners_not_highlighted->have_posts()) :
        while ($partners_not_highlighted->have_posts()) :
            $partners_not_highlighted->the_post();
            $partner_id = get_the_ID();
            $main_title = get_the_title();
            $slug = get_post_field('post_name', get_the_ID());            
            $s_desc = get_field('partner-short-descrip');
            $highlight = get_field('partner-highlight');
            $not_highlighted_order = get_field('partner-not-highlighted-order');

            if (!$highlight): ?>
                <div class="highlighted-partners--item" data-partner-id="<?php echo esc_attr($partner_id); ?>">
                    <div class="content-about--header">
                        <div id="<?php echo esc_attr($slug) ?>" class="content-about--header--anchor">&nbsp;</div>
                        <article class="content-about--header--texts order-position-<?php echo esc_attr($not_highlighted_order); ?>">
                            <div class="title-wwa scroll-effect">
                                <h2><?php echo esc_html($main_title); ?></h2>
                            </div>
                            <div class="desc-wwa scroll-effect">
                                <?php echo esc_html($s_desc); ?>
                            </div>
                        </article>
                    </div>

                    <?php
                    $produtos = new WP_Query(array(
                        'post_type' => 'produtos',
                        'posts_per_page' => -1,
                        'tax_query' => array(
                            array(
                                'taxonomy' => 'parceiros',
                                'field'    => 'name',
                                'terms'    => $main_title,
                            ),
                        ),
                    ));
                    $product_count = 0;
                    if ($produtos->have_posts()) : ?>
                        <div class="products-for-partner-items">
                            <?php
                            while ($produtos->have_posts()) : $produtos->the_post();
                                $product_count++;
                                $is_hidden = $product_count > 3 ? 'style="display:none;"' : '';
                                $titulo = get_the_title();
                                $description = get_field('products-desc');
                                $thumb = get_the_post_thumbnail_url();
                                $files = get_field('product-file', get_the_ID());
                            ?>
                            <div class="products-for-partner-items--item scroll-effect" <?php echo $is_hidden; ?>>
                            <?php
                                            if ($files) :
                                                foreach ($files as $post) :
                                                    setup_postdata($post);
                                                    $file_url = get_field('file-docs', $post->ID);
                                                    if ($file_url) :
                                            ?>
                                                        <a href="<?php echo $file_url ?>" target="_blank" class="products-for-partner-items--item--link">
                                                            <?php if ($thumb): ?>
                                                                <div class="products-for-partner-items--item--thumb">
                                                                    <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($titulo); ?>" class="image">
                                                                </div>
                                                            <?php else: ?>
                                                                <div class="products-for-partner-items--item--thumb">
                                                                    <img src="<?php echo get_template_directory_uri() . '/dist/images/produto-vendatec.jpg' ?>" alt="<?php echo esc_attr($titulo); ?>" class="image">
                                                                </div>
                                                            <?php endif; ?>
                                                            <div class="products-for-partner-items--item--content">
                                                                <div class="title">
                                                                    <h3><?php echo esc_html($titulo); ?></h3>
                                                                </div>
                                                                <p class="desc"><?php echo esc_html($description); ?></p>
                                                                <button class="button button-secundary button--arrow button--arrow-up button--arrow-up--white">Saiba mais</button>
                                                            </div>
                                                        </a>
                                                <?php
                                                    endif;
                                                endforeach;
                                                wp_reset_postdata();
                                            else:
                                                ?>
                                                <div class="products-for-partner-items--item--link">
                                                    <?php if ($thumb): ?>
                                                        <div class="products-for-partner-items--item--thumb">
                                                            <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($titulo); ?>" class="image">
                                                        </div>
                                                    <?php else: ?>
                                                        <div class="products-for-partner-items--item--thumb">
                                                            <img src="<?php echo get_template_directory_uri() . '/dist/images/produto-vendatec.jpg' ?>" alt="<?php echo esc_attr($titulo); ?>" class="image">
                                                        </div>
                                                    <?php endif; ?>
                                                    <div class="products-for-partner-items--item--content">
                                                        <div class="title">
                                                            <h3><?php echo esc_html($titulo); ?></h3>
                                                        </div>
                                                        <p class="desc"><?php echo esc_html($description); ?></p>
                                                        <button class="button button-secundary button--empty">&nbsp;</button>
                                                    </div>
                                                </div>
                                            <?php endif; ?>
                            </div>
                            <?php endwhile; ?>
                        </div>
                    <?php endif;
                    wp_reset_postdata();
                    if ($product_count > 3) :
                    ?>
                    <button id="load-more-not-highlighted" class="load-more button button--quaternary button--arrow button--arrow-down scroll-effect" data-partner-id="<?php echo esc_attr($partner_id); ?>">Carregar mais</button>
                    <?php endif; ?>
                </div>
    <?php
            endif;
        endwhile;
        wp_reset_postdata();
    endif;
}
exibir_produtos();
?>

    </div>
</section>