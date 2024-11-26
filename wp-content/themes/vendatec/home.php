<?php
get_header();
$slug = 'pagina-inicial';
$id = get_page_id_by_slug($slug);

include 'components/main-banner.php';
include 'components/home/content.php';
include 'components/home/partners.php';
get_footer();
