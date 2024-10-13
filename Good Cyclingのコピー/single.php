<?php get_header(); ?>
    <!-- <header class="header-sp">
      <div>
        <div class="logo-sp">
          <img src="img/logo.png" alt="ロゴ" />
        </div>
        <div class="header-text-sp">
          <a href="index.html">Good Cycling</a>
        </div>
      </div>
    </header> -->

    <main>
      <div id="voice" class="voice-top voice-top-index">
        <div class="content-title">
          <p>お客様の声</p>
          <span>VOICE</span>
        </div>
        <div class="voice">
          <div class="voice-content voice-sinble">
            <a style="min-width: 30%; width: 30%" >
              <div class="image">image</div></a
            >
            <div style="display: flex; align-items: center">
              <div class="voicesingle-text" >
              <?php the_content(); ?></div
              >
            </div>
          </div>
          <!-- <div class="voice-content">
            <a href="voicesingle.html"> <div class="image">image</div></a>
            <div>
              <a href="voicesingle.html">
                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</a
              >
            </div>
          </div> -->
          <!-- <div class="voice-content">
            <a href="voicesingle.html"> <div class="image">image</div></a>
            <div>
              <a href="voicesingle.html">
                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</a
              >
            </div>
          </div> -->
        </div>
      </div>
    </main>
    <script
      src="https://code.jquery.com/jquery-3.7.1.min.js"
      integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo="
      crossorigin="anonymous"
    ></script>
    <script src="main.js"></script>
  </body>
  <?php get_footer(); ?>
