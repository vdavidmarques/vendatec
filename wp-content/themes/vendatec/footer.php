</main>
</div>
<footer id="footer" role="contentinfo">
    <?php
    $args = array(
        'name' => 'general-information',
        'post_type' => 'page',
    );

    $query = new WP_Query($args);
    while ($query->have_posts()) :
        $query->the_post();
        $whatsapp = get_field('whatsapp');
        $whatsappNumber = get_field('whatsappNumber');
        $whatsappMessage = get_field('whatsappMessage');
        $email = get_field('e-mail');
        $instagram = get_field('instagram');
        $facebook = get_field('facebook');
        $address = get_field('address');
    ?>
        <a target="_blank" href="<?php echo $instagram ?>">
            <?php echo $instagram ?>
        </a>
        <a target="_blank" href="<?php echo $facebook ?>">
            <?php echo $facebook ?>
        </a>
    <?php endwhile; ?>
    <div id="copyright">
        &copy; <?php echo esc_html(date_i18n(__('Y', 'blankslate'))); ?> <?php echo esc_html(get_bloginfo('name')); ?>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>