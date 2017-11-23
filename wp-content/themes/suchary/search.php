<?php
/**
 * Search results page
 */
?>
<?php get_header() ?>
<div class="container">
    <h2 class='searchStyle'><?php get_search_form(); ?></h2>
<?php if ( have_posts() ): ?>

    <h2 class='searchStyle'>Wyniki wyszukiwania: '<?php echo get_search_query(); ?>'</h2>
    <ol>
        <?php while ( have_posts() ) : the_post(); ?>
            <div class="row">
                <div class="col-6-6">
                    <div class="singleJoke">
                        <h4>Autor:<?php the_author() ?></h4>
                        <p class="tag"><?php the_tags()?></p>
                        <div><?php the_post_thumbnail('thumbnail') ?></div>
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
        <?php endwhile; ?>
    </ol>
<?php else: ?>

            <span class="searchStyle">Nie znaleziono takiego sucharka! :('<?php echo get_search_query(); ?>'</span>

<?php endif; ?>

    <div class="row">
        <div class="col-6-6 pag">
            <div class="pagination"><?php post_pagination(); ?></div>
        </div>
    </div>

</div>
<?php get_footer(); ?>