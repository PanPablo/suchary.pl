<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <?php wp_head(); ?>
    <title>Suchary.pl</title>
</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/pl_PL/sdk.js#xfbml=1&version=v2.11';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
<div class="row">
<div class="col-2-6">
        <div class="navIcon" onclick="myFunction(this)">
        <div class="hamburger1"></div>
        <div class="hamburger2"></div>
        <div class="hamburger3"></div>
        </div>
    <div class="nav">
    <?php wp_nav_menu(); ?>
    </div>
</div>
    <div class="col-2-6">
        <div class="logo"><a href="/suchary_pl.pl/">SUCHARY.PL</a></div>
    </div>
    <div class="col-2-6"></div>
</div>
