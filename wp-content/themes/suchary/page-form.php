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
          <div class="form">
              <?php if (function_exists('user_submitted_posts')) user_submitted_posts(); ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>