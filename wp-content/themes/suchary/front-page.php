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

<?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
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
<?php endwhile; ?>
  <!-- post navigation -->
<?php else: ?>
  <!-- no posts found -->
<?php endif; ?>

<div class="row">
    <div class="col-6-6 pag">
        <div class="pagination"><?php post_pagination(); ?></div>
    </div>
</div>
</div>

<?php get_footer(); ?>
