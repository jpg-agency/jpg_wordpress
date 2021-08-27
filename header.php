<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content=<?php bloginfo('description'); ?>>
    <title><?php bloginfo('name'); ?></title>

    <?php wp_head(); ?>

</div>
    <?php wp_body_open(); ?>
    <?php get_template_part ('/parts/custom_navbar' )?>

    <div class="text">
        <?php get_template_part ('parts/title' )?>
    </div>
    