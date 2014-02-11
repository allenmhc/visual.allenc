<?php
/**
 * The home template file.
 *
 * @package Visual.allenc
 * @since Visual 0.1
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
        <!-- featured post -->
        <?php
        rewind_posts();
        $query_args = array(
          "meta_key" => "article",
          "meta_value" => 1,
          "posts_per_page" => 1
        );
        query_posts($query_args);
        the_post();
        $featured_post_id = get_the_ID();
        ?>
        <?php get_template_part( 'content-featured', get_post_format() ); ?>

        <!-- other posts -->
        <?php
        rewind_posts();
        $query_args = array(
          "posts_per_page" => 12
        );
        query_posts($query_args);
        $post_count = 1;
        while (have_posts()): the_post();
        ?>
          <?php if ($post_count < 12 && get_the_ID() != $featured_post_id): ?>
            <?php get_template_part( 'content', get_post_format() ); ?>
            <?php $post_count++; ?>
          <?php endif; ?>
        <?php endwhile; // end of the loop. ?>

      </div><!-- #content .site-content -->

    <?php visual_content_nav( 'nav-below' ); ?>

    </div><!-- #primary .content-area -->

<?php get_footer(); ?>
