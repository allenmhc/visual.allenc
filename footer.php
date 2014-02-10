<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package Visual
 * @since Visual 0.1
 */
?>
    </div> <!-- .section -->
  </div><!-- #main .site-main -->
  <div id="push"></div>
</div><!-- #page .hfeed .site -->

<footer id="colophon" class="site-footer" role="contentinfo">

  <div class="section" id="social">
    <ul id="social-icons" class="clearfix">
      <li class="social-icon">
        <a href="http://twitter.com/#!/allenmhc" target="_blank" title="Twitter" class="twitter" rel="me">
          <span>Twitter</span>
        </a>
      </li>
      <li class="social-icon">
        <a rel="author" target="_blank" title="Google+" class="googleplus"
           rel="me" href="https://profiles.google.com/allenc">
          <span>Google+</span>
        </a>
      </li>
      <li class="social-icon">
        <a href="http://www.quora.com/Allen-Cheung" target="_blank" title="Quora" class="quora" rel="me">
          <span>Quora</span>
        </a>
      </li>
      <li class="social-icon">
        <a href="http://www.linkedin.com/in/allencheung" target="_blank" title="LinkedIn" class="linkedin" rel="me">
          <span>LinkedIn</span>
        </a>
      </li>
      <li class="social-icon">
        <a href="https://github.com/allenmhc" target="_blank" title="Github" class="github" rel="me">
          <span>Github</span>
        </a>
      </li>
      <li class="social-icon">
        <a id="rss" title="rss" class="rss" href="<?php bloginfo('rss2_url'); ?>">
          <span>RSS</span>
        </a>
      </li>
    </ul>
  </div>

  <div class="section clearfix" id="search-form-wrapper">
    <?php get_search_form(); ?>
    <?php if (is_search()): ?>
      <?php
      global $wp_query;
      $total_results = $wp_query->found_posts;
      ?>
      <aside id="search-info">
        [<?php echo $total_results; ?>]
      </aside>
      <?php wp_reset_query(); ?>
    <?php endif; ?>
  </div>

  <div class="section clearfix" id="copyright">
    <span>copyright &copy;&nbsp;<?php
      $start_year = 2011;
      $curr_year = date('Y');
      echo $start_year . ($start_year == $curr_year ? '' : '-' . $curr_year);
    ?> allenc.com</span>
  </div>

</footer><!-- #colophon .site-footer -->

<?php wp_footer(); ?>

</body>
</html>
