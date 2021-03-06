<?php
/**
 * @package Visual
 * @since Visual 0.1
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php if ( has_post_thumbnail() ) { ?>
  <figure class="visual-thumbnail">
    <a href="<?php the_permalink() ?>" class="thumbnail">
    <?php the_post_thumbnail( 'visual-thumbnail' ); ?>
    </a>
  </figure>
  <?php } ?>
  <header class="entry-header">
    <h1 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'visual' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h1>

    <?php if ( 'post' == get_post_type() ) : ?>
    <div class="entry-meta">
      <?php visual_posted_on(); ?>
    </div><!-- .entry-meta -->
    <?php endif; ?>
  </header><!-- .entry-header -->

  <?php $options = get_option( 'visual-theme', false );
  $excerpts = true;
  if ( $options['display_excerpts'] ) { $excerpts = true; } ?>
  <?php if ( is_search() || $excerpts ) : ?>
  <div class="entry-summary">
    <?php the_excerpt(); ?>
    <?php wp_link_pages( array( 'before' => '<div class="page-links">', 'after' => '</div>', 'link_before' => '<span class="active-link">', 'link_after' => '</span>' ) ); ?>
  </div><!-- .entry-summary -->
  <?php else : ?>
  <div class="entry-content">
    <?php the_content( __( 'Read More <span class="meta-nav">&rarr;</span>', 'visual' ) ); ?>
    <?php wp_link_pages( array( 'before' => '<div class="page-links">', 'after' => '</div>', 'link_before' => '<span class="active-link">', 'link_after' => '</span>' ) ); ?>
  </div><!-- .entry-content -->
  <?php endif; ?>

</article><!-- #post-<?php the_ID(); ?> -->
