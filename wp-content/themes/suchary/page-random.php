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
        <h2 class="searchStyle">Wylosowano suchara:</h2>
        <?php

        $q = new WP_Query([
            'post_type' => 'post',
            'orderby'   => 'rand',
            'posts_per_page' => 1,

        ]);

        if ( $q->have_posts() ) : while ( $q->have_posts() ) : $q->the_post(); ?>
            <!-- post -->
            <div class="row">
                <div class="col-6-6">
                    <div class="singleJoke">
                        <h4>Autor:<?php the_author() ?></h4>
                        <p class="tag"><?php the_tags()?></p>
                        <div><?php the_post_thumbnail('thumbnail') ?></div>
                        <span><?php the_content() ?></span>
                        <div><?php if(function_exists('the_ratings')) { the_ratings(); } ?></div>
                        <div class="fb-like" data-href="<?php the_permalink() ?>" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true"></div>
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

    </div>
<?php get_footer(); ?>