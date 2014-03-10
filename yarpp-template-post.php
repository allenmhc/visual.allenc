<?php /*
Post template
Author: Allen Cheung
*/
?>
<?php if ($related_query->have_posts()):?>
  <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
  <div class="post-wrapper">
    <article class="post hentry">
      <header class="entry-header">
        <h2 class="entry-title"><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'visual' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
      </header>
      <footer class="entry-meta">
        <?php visual_posted_on(true); ?>
        <span class="post-link">
          <a href="<?php the_permalink(); ?>"><span class="icon-right-circled"></span><span class="visuallyhidden"><?php the_title(); ?></span></a>
        </span>

      </footer>
    </article>
  </div>
  <?php endwhile; ?>
<?php endif; ?>

