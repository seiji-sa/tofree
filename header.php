<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TOFREE</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif:ital,wght@0,100..900;1,100..900&family=Raleway:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet" />

    <link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/reset.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css">
    <link rel="stylesheet" type="text/css" href="https://coco-factory.jp/ugokuweb/wp-content/themes/ugokuweb/data/6-1-7/css/6-1-7.css">

    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="header">
            <h1 class="header__logo">
                <a href="<?php echo home_url('/'); ?>">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/Logo.png" alt="">
                    <p>TOFREE<br>consulting</p>
                </a>
            </h1>
            <ul class="h-list">
                <li class="h-list__item"><a href="<?php echo 'home_url'('/'); ?>about">about</a></li>
                <li class="h-list__item"><a href="<?php echo 'home_url'('/'); ?>service">service</a></li>
                <li class="h-list__item"><a href="<?php echo 'home_url'('/'); ?>news">news</a></li>
                <li class="h-list__item"><a href="<?php echo 'home_url'('/'); ?>contact">contact</a></li>
            </ul>
            <div class="menu">
                <div class="openbtn1"><span></span><span></span><span></span></div>
            </div>
        </div>
    </header>
