<?php
/**
 * Created by PhpStorm.
 * User: pawelstruminski
 * Date: 02.12.2017
 * Time: 00:18
 */
?>
<?php get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-6-6">
            <h2><a href="http://localhost/suchary_pl.pl/wp-login.php?action=logout&redirect_to=http%3A%2F%2Flocalhost%2Fsuchary_pl.pl%2Findex.php%2Fzaloguj-sie%2F&_wpnonce=08d5e896f7"> wyloguj się</a></h2>
            <br>
            <h2 class="">Edytuj profil:</h2>
            <?php



            if(is_single() || is_page())
            {

                if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>



                    <?php the_content(); ?>


                <?php endwhile; ?>
                    <!-- post navigation -->
                <?php else: ?>
                    <!-- no posts found -->
                <?php endif;

            }


            ?>
        </div>
    </div>
    <div class="row">
        <div class="col-6-6">
            <h2>Twoje najlepsze sucharki:</h2>
            <?php

            if ( is_user_logged_in() ):

                global $current_user;
                wp_get_current_user();
                $author_query = array( 'meta_key' => 'ratings_score',
                    'orderby' => 'meta_value_num',
                    'order' => 'DESC', 'posts_per_page' => '3', 'author' => $current_user->ID);
                $author_posts = new WP_Query($author_query);
                while($author_posts->have_posts()) : $author_posts->the_post();
                    ?>
                    <div class="row">
                        <div class="col-6-6">
                            <div class="singleJoke">
                                <h4>Autor:<?php the_author() ?></h4>
                                <p class="tag"><?php the_tags()?></p>
                                <div class="image"><?php the_post_thumbnail('thumbnail') ?></div>
                                <span><?php the_content() ?></span>
                                <div><?php if(function_exists('the_ratings')) { the_ratings(); } ?></div>
                                <div class="fb-like" data-href="<?php the_permalink() ?>" data-layout="button" data-action="like" data-size="small" data-show-faces="false" data-share="true">
                                </div>
                            </div>
                        </div>
                    </div>                    <?php
                endwhile;

            else :

                echo "not logged in";

            endif;
            ?>

        </div>
    </div>
    <div class="row">
        <div class="col-6-6 pag">
            <div class="pagination"><?php post_pagination(); ?></div>
        </div>
    </div>
</div>

<?php get_footer(); ?>
