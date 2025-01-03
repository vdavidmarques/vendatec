<section class="content-about highlighted-partners" itemscope itemtype="http://schema.org/CreativeWork">
    <div class="container">
        <?php
        function exibir_parceiros_e_produtos()
        {
            $partners_highlighted = new WP_Query(array(
                'post_type' => 'parceiros',
                'posts_per_page' => -1,
                'orderby' => 'meta_value_num',
                'type' => 'NUMERIC',
                'meta_key' => 'partner-highlighted-order',
                'order' => 'ASC'
            ));

            if ($partners_highlighted->have_posts()) :
                while ($partners_highlighted->have_posts()) :
                    $partners_highlighted->the_post();
                    $partner_id = get_the_ID();
                    $slug = get_post_field('post_name', get_the_ID());
                    $title = get_the_title();
                    $short_desc = get_field('partner-short-descrip');
                    $highlight = get_field('partner-highlight');
                    $highlighted_order = get_field('partner-highlighted-order');

                    if ($highlight):
        ?>
                        <div class="highlighted-partners--item" data-partner-id="<?php echo esc_attr($partner_id); ?>" itemscope itemtype="http://schema.org/Organization">
                            <div class="content-about--header">
                                <div id="<?php echo esc_attr($slug) ?>" class="content-about--header--anchor">&nbsp;</div>
                                <article class="content-about--header--texts order-position-<?php echo esc_attr($highlighted_order); ?>">
                                    <div class="title-wwa scroll-effect">
                                        <h2 itemprop="name"><?php echo esc_html($title); ?></h2>
                                    </div>
                                    <div class="desc-wwa scroll-effect" itemprop="description">
                                        <?php echo esc_html($short_desc); ?>
                                    </div>
                                </article>
                            </div>
                            <?php
                            $produtos = new WP_Query(array(
                                'post_type' => 'produtos',
                                'posts_per_page' => -1,
                                'orderby' => 'meta_value_num',
                                'type' => 'NUMERIC',
                                'meta_key' => 'product-order',
                                'order' => 'ASC',
                                'tax_query' => array(
                                    array(
                                        'taxonomy' => 'parceiros',
                                        'field'    => 'name',
                                        'terms'    => $title,
                                    ),
                                ),
                            ));
                            $product_count = 0;
                            if ($produtos->have_posts()) : ?>
                                <div class="products-for-partner-items" itemscope itemtype="http://schema.org/ItemList">
                                    <?php
                                    while ($produtos->have_posts()) : $produtos->the_post();
                                        $product_count++;
                                        $is_hidden = $product_count > 4 ? 'style="display:none;"' : '';
                                        $url = get_permalink();
                                        $titulo = get_the_title();
                                        $description = get_field('products-desc');
                                        $thumb = get_the_post_thumbnail_url();
                                    ?>
                                        <div class="products-for-partner-items--item scroll-effect" <?php echo $is_hidden; ?> itemscope itemtype="http://schema.org/ListItem">
                                            <a href="<?php echo $url; ?>" class="products-for-partner-items--item--link">
                                                <?php if ($thumb): ?>
                                                    <div class="products-for-partner-items--item--thumb">
                                                        <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($titulo); ?>" class="image" itemprop="image">
                                                    </div>
                                                <?php else: ?>
                                                    <div class="products-for-partner-items--item--thumb">
                                                        <img src="<?php echo get_template_directory_uri() . '/dist/images/produto-vendatec.jpg' ?>" alt="<?php echo esc_attr($titulo); ?>" class="image" itemprop="image">
                                                    </div>
                                                <?php endif; ?>
                                                <div class="products-for-partner-items--item--content">
                                                    <div class="title">
                                                        <h3 itemprop="name"><?php echo esc_html($titulo); ?></h3>
                                                    </div>
                                                    <meta itemprop="position" content="<?php echo $product_count; ?>">
                                                    <p class="desc" style="display:none;" itemprop="description"><?php echo esc_html($description); ?></p>
                                                    <button class="button button-secundary button--arrow button--arrow-up button--arrow-up--white">Saiba mais</button>
                                                </div>
                                            </a>
                                        </div>
                                        <?php wp_reset_postdata(); ?>
                                    <?php endwhile; ?>
                                </div>
                            <?php
                            endif;
                            wp_reset_postdata();
                            if ($product_count > 3) :
                            ?>
                                <button id="load-more-highlighted" class="load-more button button--terciary button--arrow button--arrow-down--red-dark scroll-effect" data-partner-id="<?php echo esc_attr($partner_id); ?>">Carregar mais</button>
                            <?php endif; ?>
                        </div>
        <?php
                    endif;
                endwhile;
                wp_reset_postdata();
            endif;
        }
        exibir_parceiros_e_produtos();
        ?>
    </div>
</section>