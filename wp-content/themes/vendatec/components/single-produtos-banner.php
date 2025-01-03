<?php
if (have_posts()) :
    while (have_posts()) : the_post();
        $file = get_field('product-file');
?>
        <section class="single-produtos-banner container scroll-effect" itemscope itemtype="http://schema.org/ImageGallery">
            <div class="single-produtos-banner--bg">
                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php echo esc_url(get_the_post_thumbnail_url()); ?>" alt="<?php the_title(); ?>" class="image" itemprop="contentUrl">
                <?php else: ?>
                    <img src="<?php echo get_template_directory_uri() . '/dist/images/produto-vendatec.jpg' ?>" class="image" itemprop="contentUrl">
                <?php endif; ?>
            </div>
            <div class="single-produtos-banner--text">
                <div class="title">
                    <h1 itemprop="caption"><?php the_title(); ?></h1>
                </div>
                <p class="desc" itemprop="description"><?php echo esc_html(get_field('products-desc')); ?></p>
                <?php
                $files = get_field('product-file');
                if ($files):
                    if (is_array($files)):
                        foreach ($files as $file_post_object):
                            $document_id = $file_post_object->ID;
                            $file_url = get_field('file-docs', $document_id);
                ?>
                            <a href="<?php echo esc_url($file_url); ?>" target="_blank" class="button button--download link" download>Download</a><br>
                    <?php
                        endforeach;
                    endif;
                else :
                    ?>
                    <button class="button button--download disable">sem arquivo</button>
                <?php
                endif;
                ?>
            </div>
        </section>
<?php
    endwhile;
endif;
?>