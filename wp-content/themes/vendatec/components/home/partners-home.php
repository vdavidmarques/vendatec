<div class="feature-partner-home">
        <?php
        function exibir_parceiros()
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
                    $title = get_the_title();
                    $main_image = get_field('partner-main-imagem');
                    $short_desc = get_field('partner-short-descrip');
                    $highlight = get_field('partner-highlight');
                    $highlighted_order = get_field('partner-highlighted-order');
                    $slug = get_post_field('post_name', get_the_ID());
        ?>
                    <?php if ($highlight): ?>
                        <article class="contents order-position-<?php echo esc_attr($highlighted_order); ?>">
                            <a href="parcerias/#<?php echo esc_attr($slug); ?>" class="contents--link">
                                <div class="thumbnail">
                                    <img src="<?php echo esc_url($main_image['url']); ?>" alt="<?php echo esc_attr($title); ?>" class="image ease-in-out">
                                </div>
                                <div class="informations">
                                    <div class="content">
                                        <h3 class="title scroll-effect"><?php echo esc_html($title); ?></h3>
                                        <p class="description scroll-effect"><?php echo esc_html($short_desc); ?></p>
                                        <button class="button-know-more button--arrow button--arrow-up button--arrow-up--white">Saiba Mais</button>
                                    </div>
                                </div>
                            </a>
                        </article>
                    <?php endif;
                endwhile;
                wp_reset_postdata();
            endif;
        ?>
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <?php
                $partners_not_highlighted = new WP_Query(array(
                    'post_type' => 'parceiros',
                    'posts_per_page' => -1,
                    'orderby' => 'meta_value_num',
                    'meta_key' => 'partner-not-highlighted-order',
                    'order' => 'ASC'
                ));

                if ($partners_not_highlighted->have_posts()) :
                    while ($partners_not_highlighted->have_posts()) :
                        $partners_not_highlighted->the_post();
                        $title = get_the_title();
                        $main_image = get_field('partner-main-imagem');
                        $short_desc = get_field('partner-short-descrip');
                        $highlight = get_field('partner-highlight');
                        $not_highlighted_order = get_field('partner-not-highlighted-order');
                        $slug = get_post_field('post_name', get_the_ID());

                        if (!$highlight): ?>
                            <article class="scroll-effect contents swiper-slide not-highlighted order-position-<?php echo esc_attr($not_highlighted_order); ?>">
                                <a href="parcerias/#<?php echo esc_attr($slug); ?>" class="contents--link">
                                    <div class="thumbnail">
                                        <img src="<?php echo esc_url($main_image['url']); ?>" alt="<?php echo esc_attr($title); ?>" class="image">
                                    </div>
                                    <div class="informations">
                                        <div class="content">
                                            <h3 class="title"><?php echo esc_html($title); ?></h3>
                                            <p class="description"><?php echo esc_html($short_desc); ?></p>
                                            <button class="button-know-more button--arrow button--arrow-up button--arrow-up--white">Saiba Mais</button>
                                        </div>
                                    </div>
                                </a>
                            </article>
                            <?php endif;
                    endwhile;
                    wp_reset_postdata();
                endif;
            }
            exibir_parceiros();
            ?>
        </div>
        <div class="swiper-button-prev arrow-swiper arrow-swiper-prev"></div>
        <div class="swiper-button-next arrow-swiper arrow-swiper-next"></div>
    </div>
</div>