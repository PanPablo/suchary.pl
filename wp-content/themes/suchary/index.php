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
    <div class="row">
        <div class="col-6-6">
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
</div>

<?php get_footer(); ?>
