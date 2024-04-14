<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TOFREE</title>

    <?php wp_head(); ?>
</head>

<body>
    <header>
        <div class="header">
            <div class="l-header">
                <h1 class="header__logo">
                    <a href="<?php echo home_url('/'); ?>">
                        <img class="header__logo--img" src="<?php echo get_template_directory_uri(); ?>/img/Logo.png" alt="">
                        <p class="header__logo--txt">TOFREE<br><span class="header__logo--txt--bottom">consulting</span></p>
                    </a>
                </h1>
                <ul class="header-list">
                    <li class="header-list__item"><a href="<?php echo 'home_url'('/'); ?>about">about</a></li>
                    <li class="header-list__item"><a href="<?php echo 'home_url'('/'); ?>service">service</a></li>
                    <li class="header-list__item"><a href="<?php echo 'home_url'('/'); ?>news">news</a></li>
                    <li class="header-list__item"><a href="<?php echo 'home_url'('/'); ?>contact">contact</a></li>
                </ul>
                <div class="menu">
                    <div class="openbtn1"><span></span><span></span><span></span></div>
                </div>
            </div>
        </div>
    </header>
