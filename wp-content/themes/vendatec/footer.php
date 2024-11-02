</main>
<footer id="footer" role="contentinfo">
    <nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'custom_header_menu',
            'menu'           => 'Menu do Header',
            'menu_id'        => 'custom-header-menu',
            'menu_class'     => 'main-menu',
            'fallback_cb'    => '__return_false',
        ));
        ?>
    </nav>
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
        $address = get_field('address');
    ?>
        <?php echo $address ?>
        <?php echo $email ?>
        <?php echo $whatsapp ?>
        <?php echo $whatsappNumber ?>
    <?php endwhile; ?>
    <a href="https://vdavidmarques.github.io/" target="_blank" class="designer">
        By Vinícius Marques
    </a>
    <div id="copyright">
        &copy; <?php echo esc_html(date_i18n(__('Y', 'vendatec'))); ?> <?php echo esc_html(get_bloginfo('name')); ?>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>