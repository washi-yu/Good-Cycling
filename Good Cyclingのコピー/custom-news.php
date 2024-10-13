<?php
/*
Template Name: ニュース投稿ページ
Template Post Type: post
*/
?>


<?php get_header(); ?>
    <main>
      <div id="news">
        <div class="content-title">
          <p>news</p>
          <span>ニュース</span>
        </div>
        <div class="news indexnews">

        <?php if(have_posts()) :?>
   <?php while (have_posts()) : the_post() ; ?>
          <span class="news-content index-news-content">
            <span class="news-date">    <?php echo get_the_date(); ?>:</span>
            <span class="news-title"> <?php the_title(); ?></span>
            <p class="news-text">
            <?php the_content(); ?>
            </p>
          </span>
          <!-- <a href="newssingle.html " class="news-content index-news-content">
            <span class="news-date">3月12日:</span>
            <span class="news-title">タイトルタイトル</span>
            <p class="news-text">
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
          </a>
          <a href="newssingle.html " class="news-content index-news-content">
            <span class="news-date">3月12日:</span>
            <span class="news-title">タイトルタイトル</span>
            <p class="news-text">
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
          </a> -->

          <!-- <div class="news-content">
            <span class="news-date"><a href="newsindex.html">3月12日:</a></span>
            <span class="news-title"
              ><a href="newsindex.html">タイトルタイトル</a></span
            >
            <p class="news-text">
              <a href="newsindex.html"
                >テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテ</a
              >
            </p>
          </div>
          <div class="news-content">
            <span class="news-date"><a href="newsindex.html">3月12日:</a></span>
            <span class="news-title"
              ><a href="newsindex.html">タイトルタイトル</a></span
            >
            <p class="news-text">
              <a href="newsindex.html"
                >テキストテキストテキストテキストテキストテキストテキスト</a
              >
            </p>
          </div> -->
          <?php endwhile; ?>
     <?php endif; ?>
        </div>
      </div>
    </main>

  </body>
  <?php get_footer(); ?>