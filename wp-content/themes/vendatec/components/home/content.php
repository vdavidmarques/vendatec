<?php 
    if(get_field('home-texts-who-we-are', $id)): 
?>
    <section class="content-home">
        <div class="container content-home--container">
            <div class="content-home--texts scroll-effect">
                <?php 
                    echo get_field('home-texts-who-we-are', $id);
                    $button = get_field('button-who-we-are', $id);
                ?>
                <a href="<?php echo $button['url'];?>" target="" class="button button--secundary button--arrow button--arrow-up">
                    <?php echo $button['title']; ?>
                </a>
            </div>
            
        </div>
    </section>
<?php endif; ?>