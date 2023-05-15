<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=0">
    <title>S.R project</title>
    <!-- bootstrap　の読み込み -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.css">
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"> -->
    <!-- リセットCSS CSSno読み込み -->
    <link href="<?php bloginfo('template_url'); ?>/css/reset.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url'); ?>/style.css" rel="stylesheet">
        
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Adamina&family=Cormorant+Garamond:wght@300&family=Zen+Old+Mincho:wght@400;700&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<?php if(is_home()): ?>
<header>
<?php get_template_part('parts/nav'); ?>
</header>
<?php elseif(is_archive('works')): ?>
<header class="works-head">
<?php get_template_part('parts/nav'); ?>
</header>
<?php elseif(is_page('profile')): ?>
<header class="pro-head">
<?php get_template_part('parts/nav'); ?>
</header>
<?php else:?>
<header>
<?php get_template_part('parts/nav'); ?>
</header>
<?php endif;?>
