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

<script>
// Select the first year as the default.
// This is ghetto, but in line with how the plugin script is written.
jQuery( document ).ready( function( $ ) {
  $( '.tabs' ).tabs( '> .pane' );
  $( '#smart-archives-fancy .year-list' )
    .find( 'a' ).click( function( ev ) {
      $( '.pane .tabs:visible a:first' ).click();
    } ).end()
    .find( 'a:first' ).click();
} );
</script>
