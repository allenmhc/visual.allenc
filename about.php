<?php
/**
 * Template Name: About
 * Custom about template file.
 *
 * @package Visual.allenc
 * @since Visual 0.1
 */

get_header(); ?>

  <div id="primary" class="content-area">
    <div id="content" class="site-content" role="main">
      <?php
        $square_link = get_category_link(get_cat_ID('Square'));
        $google_link = get_category_link(get_cat_ID('Google'));
        $reading_link = get_category_link(get_cat_ID('Reading'));
        $writing_link = get_category_link(get_cat_ID('Writing'));
        $frontend_link = get_category_link(get_cat_ID('Front-End'));
        $games_link = get_category_link(get_cat_ID('Games'));
      ?>

      <article class="about clearfix">
        <div class="about-bg"></div>

        <div class="about-box-overview">
          <h2>Hi!</h2>
          <p>
            My name is Allen Cheung. I voice my thoughts on this blog and
            take whimsically bad pictures.
          </p>
          <footer class="update-timestamp">Updated: March 2014</footer>
        </div>

        <div class="about-box about-box-1">
          <h3>Work</h3>
          <p>
            I'm a software engineering manager, currently at
            <a href="<?php echo $square_link; ?>">Square</a> building a set of
            new products. I was previously employed at
            <a href="<?php echo $google_link; ?>">Google</a>, LolApps, and FactSet.
          </p>
          <p>
            I prefer clean designs, elegant code, and collaborative teams. I work primarily
            on <a href="<?php echo $frontend_link; ?>">front-end</a> web sites and applications,
            and spend a lot of time thinking about how I can do it better.
          </p>
        </div>

        <div class="about-box about-box-2">
          <h3>Life</h3>
          <p>
            I currently live in the San Francisco Bay Area, by the way of Hong Kong
            along with a decade-long pitstop in Vancouver, Canada.
          </p>
          <p>
            I have a lovely wife and a newborn baby whose volume control is permenantly
            stuck at 11.
          </p>
        </div>

        <div class="about-box about-box-3">
          <?php $num_years = date('Y') - 2004; ?>
          <h3>More</h3>
          <p>
            I consume my <a href="<?php echo $reading_link; ?>">fair share</a> of books and
            long-form articles, and have <a href="<?php echo $writing_link; ?>">written</a>
            blogs for the past <?php echo $num_years; ?> years, although allenc.com only
            goes back to 2011.
          </p>
          <p>
            <a href="<?php echo $games_link; ?>">Video games</a> are a favorite pastime,
            but like many have increasing difficulty in finding time to fully indulge. My
            home is full of slightly outdated gadgetry.
          </p>
        </div>

      </article>
    </div><!-- #content .site-content -->
  </div><!-- #primary .content-area -->

<?php get_footer(); ?>
