<section class="main-banner" itemscope itemtype="http://schema.org/ImageGallery">
    <div class="swipe-container">
        <div class="swipe-wrapper">
            <?php
            $mainBanner = get_field('main-banner', $id);
            if ($mainBanner):
            ?>
                <div class="main-banner--item swipe-slide" itemscope itemtype="http://schema.org/ImageObject">
                    <div class="bg-red-dark">&nbsp;</div>
                    <?php if ($mainBanner['image']['url']): ?>
                        <img src="<?php echo $mainBanner['image']['url']; ?>" alt="<?php echo $mainBanner['image']['alt'] ?>" class="main-banner--item--image main-banner--item--image--desktop scroll-effect" itemprop="contentUrl">
                        <img src="<?php echo $mainBanner['image']['url']; ?>" alt="<?php echo $mainBanner['image']['alt'] ?>" class="bg bg--desktop">
                    <?php endif; ?>
                    <?php if ($mainBanner['image-mobile']): ?>
                        <img src="<?php echo $mainBanner['image-mobile']['url']; ?>" alt="<?php echo $mainBanner['image-mobile']['url'] ?>" class="main-banner--item--image main-banner--item--image--mobile" itemprop="contentUrl" loading="eager">
                        <img src="<?php echo $mainBanner['image-mobile']['url']; ?>" alt="<?php echo $mainBanner['image-mobile']['url'] ?>" class="bg bg--mobile" fetchpriority="high">
                    <?php else: ?>
                        <img src="<?php echo $mainBanner['image']['url']; ?>" alt="<?php echo $mainBanner['image-mobile']['url'] ?>" class="main-banner--item--image main-banner--item--image--mobile scroll-effect">
                        <img src="<?php echo $mainBanner['image']['url']; ?>" alt="<?php echo $mainBanner['image-mobile']['url'] ?>" class="bg bg--mobile">
                    <?php endif; ?>

                    <div class="main-banner--item--text scroll-effect">
                        <div class="container" itemprop="caption">
                            <?php echo wp_kses_post($mainBanner['main-text']); ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>