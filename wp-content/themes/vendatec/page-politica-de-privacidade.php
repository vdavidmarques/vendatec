<?php get_header(); ?>
<section class="privacy-policy-page scroll-effect">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1>
                <div class="entry-content" itemprop="mainContentOfPage">
                    <?php the_content(); ?>
                    <div class="entry-links"><?php wp_link_pages(); ?></div>
                </div>
            </article>
        <?php endwhile;
        endif; ?>
    </div>
</section>
<?php get_footer(); ?>