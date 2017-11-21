<?php
/**
 * Created by PhpStorm.
 * User: pawelstruminski
 * Date: 21.11.2017
 * Time: 09:11
 */
?>
<?php get_header(); ?>
    <div class="container">
<?php

$q = new WP_Query([
    'post_type' => 'post',
    'posts_per_page' => 10,
    'meta_key' => 'ratings_average',
    'orderby' => 'meta_value_num',
    'order' => 'DESC',

]);

if ( $q->have_posts() ) : while ( $q->have_posts() ) : $q->the_post(); ?>
    <!-- post -->
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
    <br>
<?php endwhile; ?>
    <!-- post navigation -->
<?php else: ?>
    <!-- no posts found -->
<?php endif;

?>
<?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
    <!-- post -->
    <div class="row">
        <div class="col-6-6">
            <div class="singleJoke">
                <div><?php the_post_thumbnail('thumbnail') ?></div>
                <div><?php the_content() ?></div>
                <h4>Autor:<?php the_author() ?></h4>
                <div><?php if(function_exists('the_ratings')) { the_ratings(); } ?></div>
            </div>
        </div>
    </div>
<?php endwhile; ?>
    <!-- post navigation -->
<?php else: ?>
    <!-- no posts found -->
<?php endif; ?>
    </div>
<?php get_footer(); ?>