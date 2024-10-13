<?php get_header(); ?>
    <main>
      <div id="voice" class="voice-top voice-top-index">
        <div class="content-title">
          <p>お客様の声</p>
          <span>VOICE</span>
        </div>
        <div class="category-voice">
        <?php if (have_posts()) : ?>
                       <?php while(have_posts()) : the_post(); ?>
          <div class=" category-voice-content">
            <a  href="<?php the_permalink(); ?>"> <div style="border:1px solid #333" class="image">image</div></a>
            <div>
              <a href="<?php the_permalink(); ?>">
              <?php echo wp_trim_words( get_the_content() , 60, '.....'); ?></a
              >
            </div>
          </div>
        
          <?php endwhile; ?>
                     <?php endif; ?>
        </div>
      </div>
    </main>

<?php get_footer(); ?>