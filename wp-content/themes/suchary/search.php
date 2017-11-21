<?php
/**
 * Search results page
 */
?>
<?php get_header() ?>
<?php if ( have_posts() ): ?>
    <h2 class='searchStyle'>Wyniki wyszukiwania: '<?php echo get_search_query(); ?>'</h2>
    <ol>
        <?php while ( have_posts() ) : the_post(); ?>
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
        <?php endwhile; ?>
    </ol>
<?php else: ?>
    <span class="searchStyle">Nie znaleziono takiego sucharka! :('<?php echo get_search_query(); ?>'</span>
<?php endif; ?>


<?php get_footer(); ?>