<?php get_header(); ?>
<main>
  <div id="voice" class="voice-top voice-top-index">
    <div class="content-title">
      <p>お客様の声</p>
      <span>VOICE</span>
    </div>
    <div class="category-voice">
      <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <div class=" category-voice-content">
            <a href="<?php the_permalink(); ?>">
              <div style="border:1px solid #333" class="image ">


                <?php
                // カスタムフィールドから画像IDを取得
                $image_id = get_post_meta($post->ID, 'voice-img', true);
                // 画像のURLを取得
                $image_url = wp_get_attachment_image_src($image_id, 'full');

                if ($image_url) {
                  // 画像を表示
                  echo '<img src="' . esc_url($image_url[0]) . '" alt="">';
                } else {
                  // 画像がない場合はno-image.pngを表示
                  echo '<img src="' . esc_url(get_template_directory_uri() . '/img/no-image.png') . '" alt="No Image">';
                }
                ?>
              </div>
            </a>
            <div>
              <a href="<?php the_permalink(); ?>">
                <?php echo wp_trim_words(get_the_content(), 60, '.....'); ?></a>
            </div>
          </div>

        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
</main>

<?php get_footer(); ?>