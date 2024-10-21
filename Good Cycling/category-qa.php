<?php get_header(); ?>

<main>
  <div id="qa" class="qa qa-index">
    <div class="content-title">
      <p>よくある質問</p>
      <span>Q&A</span>
      <div>
        <?php if (have_posts()) : ?>
          <?php while (have_posts()) : the_post(); ?>
            <!-- ここから -->
            <div class="accordion">
              <div class="faq">
                <?php $faq_id = 'faq' . get_the_ID(); ?>
                <input type="checkbox" id="<?php echo $faq_id; ?>" class="toggle" />
                <label class="question" for="<?php echo $faq_id; ?>"><span>Q</span><?php the_title(); ?></label>
                <div class="anser">
                  <div>
                    <span>A</span>
                    <?php echo get_the_content(); ?>
                  </div>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</main>
</body>
<?php get_footer(); ?>