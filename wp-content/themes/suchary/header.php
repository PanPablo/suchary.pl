<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <?php wp_head(); ?>
    <title>alesuchary.pl</title>
</head>

<body>
<div id="fb-root"></div>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId      : '560957450906878',
            xfbml      : true,
            version    : 'v2.11'
        });
        FB.AppEvents.logPageView();
    };

    (function(d, s, id){
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {return;}
        js = d.createElement(s); js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<div class="cont">
<div class="button_container" id="toggle">
    <span class="top"></span>
    <span class="middle"></span>
    <span class="bottom"></span>
</div>
</div>
<div class="overlay" id="overlay">
    <nav class="overlay-menu">
     <? wp_nav_menu(); ?>
    </nav>
</div>

<div class="row">

    <div class="col-6-6">
        <div class="logo"><a href="http://alesuchary.pl">ALESUCHARY.PL</a></div>
    </div>

</div>
<div class="row">
    <div class="col-6-6 tags">
        <p class="tagMenu"><a href="http://alesuchary.pl/?tag=informatycy">#Informatycy</a></p>
        <p class="tagMenu"><a href="http://alesuchary.pl/?tag=Blondynki">#Blondynki</a></p>
        <p class="tagMenu"><a href="http://alesuchary.pl/?tag=mem">#Memy</a></p>
        <p class="tagMenu"><a href="http://alesuchary.pl/?tag=polacy">#Polacy</a></p>
        <p class="tagMenu"><a href="http://alesuchary.pl/?tag=suchar">#Suchar</a></p>
    </div>
</div>

