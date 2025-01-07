<section class="secundary-banner" itemscope itemtype="http://schema.org/ImageGallery">
    <?php
    $mainBanner = get_field('sec-banner');
    if($mainBanner):
    ?>
        <div class="main-banner-item" itemscope itemtype="http://schema.org/ImageObject">
            <div class="main-banner-item--bg">
                <div class="bg-linear">&nbsp;</div>
                <img src="<?php echo $mainBanner['image']['url']; ?>" alt="<?php echo $mainBanner['image']['alt']; ?>" class="image" itemprop="contentUrl">
            </div>
            <div class="container">
                <div class="main-banner-item--text">
                    <div class="main-banner-item--title scroll-effect" itemprop="caption"><?php echo wp_kses_post($mainBanner['main-text']); ?></div>
                    <?php if ($mainBanner['link-option']): ?>
                        <a href="<?php echo $mainBanner['button']['url']; ?>" class="main-banner-item--button button button--primary button--arrow button--arrow-down scroll-effect"><?php echo $mainBanner['button']['title']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php endif; ?>
</section>