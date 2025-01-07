<section class="content-about" itemscope itemtype="http://schema.org/AboutPage">
    <div class="content-about--header">
        <div class="container">
            <article class="content-about--header--texts">
                <div class="title-wwa scroll-effect">
                    <h2 itemprop="headline"><?php echo get_field('title-wwa'); ?></h2>
                    <?php echo  wp_kses_post(get_field('desc-wwa')); ?>
                </div>
                <?php
                $timeline_count = get_field('timeline_count');
                if ($timeline_count):
                ?>
                    <div class="desc-wwa scroll-effect">
                        <?php

                        for ($i = 1; $i <= $timeline_count; $i++):
                            $year = get_field("timeline_year_$i");
                            $desc = get_field("timeline_desc_$i");
                            if ($year && $desc):
                        ?>
                                <div class="timeline-item scroll-effect" itemscope itemtype="http://schema.org/Event">
                                    <div class="timeline-item--year">
                                        <h3 itemprop="startDate"><?php echo esc_html($year); ?></span>
                                    </div>
                                    <div class="timeline-item--content">
                                        <?php echo wp_kses_post($desc); ?>
                                    </div>
                                </div>
                        <?php
                            endif;
                        endfor;
                        ?>
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
            $listWWAValuesCount = get_field('content-wwa-values_count');
            if ($listWWAValuesCount):
                for ($i = 1; $i <=  $listWWAValuesCount; $i++):
                    $content = get_field("content-wwa-values_$i");
                    if ($content):
            ?>
                        <article class="content-about--list--container--items scroll-effect" itemscope itemtype="http://schema.org/ListItem">
                            <div class="content-about--list--container--items--texts" itemprop="text">
                                <?php echo wp_kses_post($content); ?>
                            </div>
                        </article>
            <?php
                    endif;
                endfor;
            endif;
            ?>
        </div>
    </div>
</section>