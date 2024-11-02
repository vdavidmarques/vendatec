<section class="main-banner">
<?php 
    $mainBanners = get_field('main-banner', $id); 
    foreach ($mainBanners as $mainBanner):
?>
        <div class="main-banner-item">
            <img src="<?php echo $mainBanner['image']['url']; ?>" alt="Soluções personalizadas para Bancos de Sangue, Agências Transfusionais e Laboratórios de Hematologia e Hemoterapia">
            <div class="main-banner-text">
                <h2><?php echo $mainBanner['main-text']; ?></h2>
                <?php if($mainBanner['link-option']): ?>
                    <a href="<?php echo $mainBanner['link-option']['url']; ?>" class="btn"><?php echo $mainBanner['link-option']['text']; ?></a>
                <?php endif; ?>
            </div>
        </div>
<?php endforeach; ?>
</section>