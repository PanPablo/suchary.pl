<?php
/**
 * Created by PhpStorm.
 * User: pawelstruminski
 * Date: 21.11.2017
 * Time: 09:11
 */
?>
<?php get_header(); ?>
<?php if ( have_posts() ) : while ( have_posts() ) :    the_post(); ?>
  <!-- post -->
    <div>
        <h2><?php the_title()?></h2>
        <div><?php the_post_thumbnail('thumbnail') ?></div>
        <div><?php the_excerpt() ?></div>
        <div><a href="<?php the_permalink(); ?>">Czytaj więcej...</a></div>
    </div>
<?php endwhile; ?>
  <!-- post navigation -->
<?php else: ?>
  <!-- no posts found -->
<?php endif; ?>

<?php get_footer(); ?>
