<section class="main-banner" itemscope itemtype="http://schema.org/ImageGallery">
    <div class="swiper-container">
        <div class="swiper-wrapper">

            <?php
            $mainBanners = get_field('main-banner', $id);
            if ($mainBanners):
                foreach ($mainBanners as $mainBanner):
            ?>
                    <div class="main-banner--item swiper-slide" itemscope itemtype="http://schema.org/ImageObject">
                        <div class="bg-red-dark">&nbsp;</div>
                        <?php if ($mainBanner['image']['url']): ?>
                            <img src="<?php echo $mainBanner['image']['url']; ?>" alt="<?php echo $mainBanner['image']['alt'] ?>" class="main-banner--item--image main-banner--item--image--desktop scroll-effect" itemprop="contentUrl">
                            <img src="<?php echo $mainBanner['image']['url']; ?>" alt="<?php echo $mainBanner['image']['alt'] ?>" class="bg bg--desktop" >
                        <?php endif; ?>
                        <?php if ($mainBanner['image-mobile']['url']): ?>
                            <img src="<?php echo $mainBanner['image-mobile']['url']; ?>" alt="<?php echo $mainBanner['image-mobile']['url'] ?>" class="main-banner--item--image main-banner--item--image--mobile" itemprop="contentUrl">
                            <img src="<?php echo $mainBanner['image-mobile']['url']; ?>" alt="<?php echo $mainBanner['image-mobile']['url'] ?>" class="bg bg--mobile">
                        <?php else: ?>
                            <img src="<?php echo $mainBanner['image']['url']; ?>" alt="<?php echo $mainBanner['image-mobile']['url'] ?>" class="main-banner--item--image main-banner--item--image--mobile scroll-effect">
                            <img src="<?php echo $mainBanner['image']['url']; ?>" alt="<?php echo $mainBanner['image-mobile']['url'] ?>" class="bg bg--mobile">
                        <?php endif; ?>

                        <div class="main-banner--item--text scroll-effect">
                            <div class="container" itemprop="caption">
                                <?php echo $mainBanner['main-text']; ?>
                                <?php if ($mainBanner['link-option']): ?>
                                    <a href="<?php echo $mainBanner['link-option']['url']; ?>" class="btn" itemprop="url"><span itemprop="name"><?php echo $mainBanner['link-option']['text']; ?></span></a>
                                <?php endif; ?>
                            </div>
                        </div>
                        <meta itemprop="position" content="<?php echo $mainBanner['order']; ?>">
                    </div>
            <?php endforeach;
            endif; ?>
        </div>
    </div>
</section>