<?php
/**
 * Template Name: Articles
 * Custom articles template file.
 *
 * @package Visual.allenc
 * @since Visual 0.1
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">

      <?php
      $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
      ?>
      <?php
      rewind_posts();
      $query_args = array(
        "meta_key" => "article",
        "meta_value" => 1,
        "posts_per_page" => 12,
        "paged" => $paged
      );
      query_posts($query_args);
      while (have_posts()): the_post();
      ?>
        <?php get_template_part( 'content-featured', get_post_format() ); ?>
      <?php endwhile; // end of the loop. ?>

    </div><!-- #content .site-content -->

  <?php visual_content_nav( 'nav-below' ); ?>

  </div><!-- #primary .content-area -->

<?php get_footer(); ?>
