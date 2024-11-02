<section class="content-home">
    <div class="container">
        <?php
        echo get_field('home-texts-who-we-are', $id);
        $button = get_field('button-who-we-are', $id);
        echo $button['url'];
        echo $button['title'];
        ?>
    </div>
</section>