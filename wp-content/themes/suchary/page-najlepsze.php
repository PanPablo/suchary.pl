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
                <div class="image"><?php the_post_thumbnail('thumbnail') ?></div>
                <span><?php the_content() ?></span>
                <div><?php if(function_exists('the_ratings')) { the_ratings(); } ?></div>
                <div
                        class="fb-like"
                        data-share="true"
                        data-width="450"
                        data-show-faces="true"
                        data-layout="button"
                        data-action="like"
                        data-size="large">
                </div>
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


    <div class="row">
        <div class="col-6-6 pag">
            <div class="pagination"><?php post_pagination(); ?></div>
        </div>
    </div>
<?php get_footer(); ?>