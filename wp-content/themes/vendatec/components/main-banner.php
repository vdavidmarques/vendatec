<?php 
    function getEnvironmentId()
    {
        // URL do servidor atual
        $serverHost = $_SERVER['HTTP_HOST'];
    
        // URLs para identificar os ambientes
        $productionHost = 'vendatec.com.br';
        $localhostHost = 'localhost:8080';
    
        // IDs associados aos ambientes
        $productionId = '8';
        $localId = '57';
    
        // Comparação para determinar o ambiente
        if (strpos($serverHost, $productionHost) !== false) {
            return $productionId;
        } elseif (strpos($serverHost, $localhostHost) !== false) {
            return $localId;
        } else {
            return 'Ambiente desconhecido';
        }
    }
     $environment = getEnvironmentId();
     $id = $environment;
?>
<section class="main-banner">
    <div class="swiper-container">
        <div class="swiper-wrapper">

            <?php
            $mainBanners = get_field('main-banner', $id);
            if ($mainBanners):
                foreach ($mainBanners as $mainBanner):
            ?>
                    <div class="main-banner--item swiper-slide">
                        <div class="bg-red-dark">&nbsp;</div>
                        <?php if ($mainBanner['image']['url']): ?>
                            <img src="<?php echo $mainBanner['image']['url']; ?>" alt="Soluções personalizadas para Bancos de Sangue, Agências Transfusionais e Laboratórios de Hematologia e Hemoterapia" class="main-banner--item--image main-banner--item--image--desktop scroll-effect">
                            <img src="<?php echo $mainBanner['image']['url']; ?>" alt="Soluções personalizadas para Bancos de Sangue, Agências Transfusionais e Laboratórios de Hematologia e Hemoterapia" class="bg bg--desktop">
                        <?php endif; ?>
                        <?php if ($mainBanner['image-mobile']['url']): ?>
                            <img src="<?php echo $mainBanner['image-mobile']['url']; ?>" alt="Soluções personalizadas para Bancos de Sangue, Agências Transfusionais e Laboratórios de Hematologia e Hemoterapia" class="main-banner--item--image main-banner--item--image--mobile">
                            <img src="<?php echo $mainBanner['image-mobile']['url']; ?>" alt="Soluções personalizadas para Bancos de Sangue, Agências Transfusionais e Laboratórios de Hematologia e Hemoterapia" class="bg bg--mobile">
                        <?php else: ?>
                            <img src="<?php echo $mainBanner['image']['url']; ?>" alt="Soluções personalizadas para Bancos de Sangue, Agências Transfusionais e Laboratórios de Hematologia e Hemoterapia" class="main-banner--item--image main-banner--item--image--mobile scroll-effect">
                            <img src="<?php echo $mainBanner['image']['url']; ?>" alt="Soluções personalizadas para Bancos de Sangue, Agências Transfusionais e Laboratórios de Hematologia e Hemoterapia" class="bg bg--mobile">
                        <?php endif; ?>

                        <div class="main-banner--item--text scroll-effect">
                            <div class="container">
                                <?php echo $mainBanner['main-text']; ?>
                                <?php if ($mainBanner['link-option']): ?>
                                    <a href="<?php echo $mainBanner['link-option']['url']; ?>" class="btn"><?php echo $mainBanner['link-option']['text']; ?></a>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
            <?php endforeach;
            endif; ?>
        </div>
    </div>
</section>