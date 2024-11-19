<section class="secundary-banner">
    <?php
    $mainBanners = get_field('sec-banner');
    if($mainBanners):
    foreach ($mainBanners as $mainBanner):
    ?>
        <div class="main-banner-item">
            <div class="main-banner-item--bg">
                <div class="bg-linear">&nbsp;</div>
                <img src="<?php echo $mainBanner['image']['url']; ?>" alt="Soluções personalizadas para Bancos de Sangue, Agências Transfusionais e Laboratórios de Hematologia e Hemoterapia" class="image">
            </div>
            <div class="container">
                <div class="main-banner-item--text">
                    <div class="main-banner-item--title scroll-effect"><?php echo $mainBanner['main-text']; ?></div>
                    <?php if ($mainBanner['link-option']): ?>
                        <a href="<?php echo $mainBanner['button']['url']; ?>" class="main-banner-item--button button button--primary button--arrow button--arrow-down scroll-effect"><?php echo $mainBanner['button']['title']; ?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    <?php 
        endforeach; 
     endif; 
    ?>
</section>