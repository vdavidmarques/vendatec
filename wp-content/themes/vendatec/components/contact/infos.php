<section class="content-contact">
    <div class="container">
        <?php
        $args = array(
            'name' => 'informacoes-gerais',
            'post_type' => 'page',
        );

        $query = new WP_Query($args);
        while ($query->have_posts()) :
            $query->the_post();
            $whatsapp = get_field('whatsapp');
            $whatsappNumber = get_field('whatsappNumber');
            $whatsappMessage = get_field('whatsappMessage');
            $email = get_field('e-mail');
            $phone = get_field('phone');
            $instagram = get_field('instagram');
            $facebook = get_field('facebook');
        ?>
            <?php echo $email ?>
            <?php echo $whatsapp ?>
            <?php echo $whatsappNumber ?>
            <?php echo $whatsappMessage ?>
            <?php echo $phone ?>
            <?php echo $instagram ?>
            <?php echo $facebook ?>
        <?php endwhile; ?>
    </div>
</section>