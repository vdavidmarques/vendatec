<section class="content-about">
    <div class="content-about--header">
        <div class="container">
            <article class="content-about--header--texts">
                <div class="title-wwa scroll-effect">
                    <h2><?php echo get_field('title-wwa'); ?></h2>
                </div>
                <div class="desc-wwa scroll-effect">
                    <?php echo get_field('desc-wwa'); ?>
                </div>
            </article>
        </div>
    </div>
    <article class="content-about--values">
        <div class="content-about--header">
            <div class="container">
                <div class="content-about--header--texts">
                    <div class="title-wwa-values-container">
                        <div class="tag scroll-effect">
                            <h3><?php echo get_field('tag-wwa-values'); ?></h3>
                        </div>
                        <div class="title-wwa scroll-effect">
                            <h2><?php echo get_field('title-wwa-values'); ?></h2>
                        </div>
                    </div>
                    <div class="desc-wwa scroll-effect">
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
                <article class="content-about--list--container--items item-<?php echo $counter ?> scroll-effect">
                    <div class="content-about--list--container--items--texts">
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