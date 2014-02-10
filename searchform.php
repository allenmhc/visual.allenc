<?php
/**
 * The template for displaying search forms in Visual
 *
 * @package Visual
 * @since Visual 0.1
 */
?>
  <form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
    <fieldset>
      <label for="search" class="assistive-text" id="search-label"><?php _e( 'Search', 'visual' ); ?></label>
      <input type="text" class="field" name="s" value="<?php echo esc_attr( get_search_query() ); ?>" id="search" />
    </fieldset>
  </form>
