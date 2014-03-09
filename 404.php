<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package Visual.allenc
 * @since Visual 0.1
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
      <article class="fourofour">
        <div class="fourofour-bg"></div>
        <div class="fourofour-content clearfix">
          <h2>Whoops.</h2>
          <h3>Something doesn't seem quite right here.</h3>

          <p class="left">We can sit here and look at each other suspiciously for a while.</p>
          <p class="right">
            Or instead, how about you <a href="<?php home_url(); ?>">return home</a> and
            we call it even?
          </p>
        </div>
      </article>

    </div><!-- #content .site-content -->
  </div><!-- #primary .content-area -->

<?php get_footer(); ?>
