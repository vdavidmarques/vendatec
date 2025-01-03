<section class="content-about" itemscope itemtype="http://schema.org/AboutPage">
    <div class="content-about--header">
        <div class="container">
            <article class="content-about--header--texts">
                <div class="title-wwa scroll-effect">
                    <h2 itemprop="headline"><?php echo get_field('title-wwa'); ?></h2>
                    <?php echo get_field('desc-wwa'); ?>
                </div>
                <?php  
                    $timeline = get_field('timeline'); 
                    if($timeline):
                ?>
                    <div class="desc-wwa scroll-effect">
                        <?php 
                        
                            foreach ($timeline as $item):
                            ?>
                            <div class="timeline-item scroll-effect" itemscope itemtype="http://schema.org/Event">
                                <div class="timeline-item--year">
                                    <h3 itemprop="startDate"><?php echo $item['year']; ?></span>
                                </div>
                                <div class="timeline-item--content">
                                    <?php echo $item['desc']; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>                        
                    </div>
                <?php endif; ?>
            </article>
        </div>
    </div>
    <article class="content-about--values" itemscope itemtype="http://schema.org/CreativeWork">
        <div class="content-about--header">
            <div class="container">
                <div class="content-about--header--texts">
                    <div class="title-wwa-values-container">
                        <div class="tag scroll-effect">
                            <h3 itemprop="keywords"><?php echo get_field('tag-wwa-values'); ?></h3>
                        </div>
                        <div class="title-wwa scroll-effect">
                            <h2 itemprop="name"><?php echo get_field('title-wwa-values'); ?></h2>
                        </div>
                    </div>
                    <div class="desc-wwa scroll-effect" itemprop="description">
                        <?php echo get_field('desc-wwa-values'); ?>
                    </div>
                </div>
            </div>
        </div>
    </article>
    <div class="content-about--list">
        <div class="container content-about--list--container">
            <?php
            $listWWAValues = get_field('list-wwa-values');
            $counter = 1;
            if ($listWWAValues):
                foreach ($listWWAValues as $listWWAValue):
                    ?>
                <article class="content-about--list--container--items item-<?php echo $counter ?> scroll-effect" itemscope itemtype="http://schema.org/ListItem">
                    <div class="content-about--list--container--items--texts" itemprop="text">
                        <?php echo $listWWAValue['content-wwa-values']; ?>
                    </div>
                </article>
            <?php
                $counter++;
                endforeach;
            endif;
            ?>
        </div>
    </div>
</section>