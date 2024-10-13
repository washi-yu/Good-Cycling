<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="...." />
    <link rel="icon" href="#" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/reset.css" />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/main_style.css" />
    <title>Good Cycling</title>
  </head>
  <body>
    <!-- ハンバーガーメニュー -->
    <div class="hamburger">
      <!-- ハンバーガーメニューの線 -->
      <span></span>
      <span></span>
      <span></span>
      <!-- /ハンバーガーメニューの線 -->
    </div>
    <ul class="slide-menu">
      <li><a href="<?php echo home_url(); ?>/category/news">news</a></li>
      <li><a class="consept-hm" href="<?php echo home_url(); ?>/#consept">consept</a></li>
      <li><a class="features-hm" href="<?php echo home_url(); ?>/#features">特徴</a></li>
      <li><a class="howuse-hum" href="<?php echo home_url(); ?>/#howuse">ご利用方法</a></li>
      <li><a class="area-hum" href="<?php echo home_url(); ?>/#area">対応地域</a></li>
      <li><a href="<?php echo home_url(); ?>/category/voice">お客様の声</a></li>
      <li><a href="<?php echo home_url(); ?>/category/qa">よくある質問</a></li>
      <li><a class="recautions-hum" href="<?php echo home_url(); ?>/#recautions">注意事項</a></li>
    </ul>

    <a id="revers" class="revers" href="#"></a>
    <header class="header-pc">
      <div>
        <div class="logo">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="ロゴ" />
        </div>
        <div id=index.html class="logo-content">
          <a href="<?php home_url(); ?>/#index.html">Good Cycling</a>

          <div class="link">
            <ul>
              <li><a href="<?php echo home_url(); ?>/category/news">news</a></li>
              <li><a href="<?php echo home_url(); ?>/#consept">consept</a></li>
              <li><a href="<?php echo home_url(); ?>/#features">特徴</a></li>
              <li><a href="<?php echo home_url(); ?>/#howuse">ご利用方法</a></li>
              <li><a href="<?php echo home_url(); ?>/#area">対応地域</a></li>
              <li><a href="<?php echo home_url(); ?>/category/voice">お客様の声</a></li>
              <li><a href="<?php echo home_url(); ?>/category/qa">よくある質問</a></li>
              <li><a href="<?php echo home_url(); ?>/#recautions">注意事項</a></li>
            </ul>
          </div>
        </div>
      </div>
    </header>
    <header class="header-sp">
      <div>
        <div class="logo-sp">
          <img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" alt="ロゴ" />
        </div>
        <div class="header-text-sp">
          <a href="<?php home_url(); ?>/#index.html">Good Cycling</a>
        </div>
      </div>
      <?php wp_head(); ?>
    </header>