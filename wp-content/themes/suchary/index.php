<?php
/**
 * Created by PhpStorm.
 * User: pawelstruminski
 * Date: 21.11.2017
 * Time: 09:11
 */
?>
<?php get_header() ?>
<div class="row">
    <div class="col-6-6">
        <div class="singleJoke">
            <h4>Autor:<?php the_author() ?></h4>
            <div><?php the_post_thumbnail('thumbnail') ?></div>
            <span><?php the_content() ?></span>

            <div><?php if(function_exists('the_ratings')) { the_ratings(); } ?></div>
            <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-layout="button" data-action="like" data-size="large" data-show-faces="false" data-share="true"></div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
