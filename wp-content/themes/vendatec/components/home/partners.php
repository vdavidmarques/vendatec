<section class="partners-home">
    <div class="container partners-home--container">
        <?php if(get_field('home-texts-partners', $id)): ?>
            <div class="partners-home--header">
                <div class="partners-home--header--texts">
                    <?php echo get_field('home-texts-partners', $id); ?>
                </div>
            </div>
        <?php endif; ?>
        <div class="partners-home--list">
            <?php include 'partners-home.php'; ?>
        </div>
    </div>
</section>