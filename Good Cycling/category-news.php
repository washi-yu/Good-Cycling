<?php get_header(); ?>
<main>
  <div id="news">
    <div class="content-title">
      <p>news</p>
      <span>ニュース</span>
    </div>
    <div class="news indexnews">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <a href="<?php echo get_permalink(); ?> " class="news-content index-news-content">

            <span class="news-date">3月12日:</span>
            <span class="news-title" style="font-weight: bold;"><?php the_title(); ?></span>
            <p class=" news-text">
              <?php echo wp_trim_words(get_the_content(), 150, '.....'); ?>
            </p>

          </a>
        <?php endwhile; ?>
      <?php endif; ?>



    </div>
  </div>
</main>


</body>

<?php get_footer(); ?>