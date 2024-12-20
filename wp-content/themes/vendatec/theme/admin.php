<?php

/*******************************
    Creating Informações Page
 ********************************/

/*******************************
    Disabling Guttenber Editor
********************************/

add_filter('use_block_editor_for_post_type', 'disable_guttemberg_editor');
function disable_guttemberg_editor()
{
    return false;
}

/*******************************
Defining meta description
********************************/
function metadescription_head_meta()
{
?>
    <meta itemprop="description" content="<?php echo get_the_excerpt(); ?>">
<?php
}
add_action('wpseo_head', 'metadescription_head_meta', 999);