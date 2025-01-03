<section class="docs-list" itemscope itemtype="http://schema.org/CreativeWork">  
    <div class="container">
        <?php
        function exibir_documentos()
        {
            $docs = new WP_Query(array(
                'post_type' => 'documentos',
                'posts_per_page' => -1
            ));

            if ($docs->have_posts()) :
        ?>
                <div class="docs-list--items scroll-effect">
                    <?php
                    while ($docs->have_posts()) :
                        $docs->the_post();
                        $title = get_the_title();
                        $file = get_field('file-docs');
                        $thumb = get_the_post_thumbnail_url();
                        if ($file) :
                    ?>
                        <a href="<?php echo $file ?>" target="_blank" class="docs-list--items--item" itemscope itemtype="http://schema.org/MediaObject">
                            <div class="docs-list--items--item--thumb">
                                <?php if ($thumb): ?>
                                    <img src="<?php echo esc_url($thumb); ?>" alt="<?php echo esc_attr($title); ?>" class="image" itemprop="thumbnailUrl">
                                <?php else: ?>
                                    <img src="<?php echo get_template_directory_uri() . '/dist/images/produto-vendatec.jpg' ?>" alt="<?php echo esc_attr($title); ?>" class="image" itemprop="thumbnailUrl">
                                <?php endif; ?>
                            </div>
                            <div class="docs-list--items--item--content">
                                <h3 class="title" itemprop="name"><?php echo $title; ?></h3>
                                <meta itemprop="contentUrl" content="<?php echo $file ?>">
                                <button class="button button--quaternary button--download">
                                    download
                                </button>
                            </div>
                        </a>
                    <?php endif;
                    endwhile; ?>
                </div>
        <?php
                wp_reset_postdata();
            endif;
        }
        exibir_documentos();
        ?>
    </div>
</section>