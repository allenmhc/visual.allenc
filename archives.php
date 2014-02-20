<?php
/**
 * Template Name: Date Archives
 * The template for displaying the landing page for archives.
 *
 * @package Visual.allenc
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">

      <?php smart_archives('generator=SAR_Custom_Fancy_Generator'); ?>

    </div><!-- #content -->
  </div><!-- #primary -->

<?php get_footer(); ?>

