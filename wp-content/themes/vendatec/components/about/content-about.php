<section class="content-about">
    <?php 
        echo get_field('title-wwa');
        echo get_field('desc-wwa');
        echo get_field('tag-wwa-values');
        echo get_field('title-wwa-values');
        echo get_field('desc-wwa-values');
        $listWWAValues = get_field('list-wwa-values');

        foreach($listWWAValues as $listWWAValue):
            echo $listWWAValue['content-wwa-values'];
        endforeach;
    ?>
</section>