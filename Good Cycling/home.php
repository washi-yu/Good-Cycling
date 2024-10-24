<?php get_header(); ?>
<main>
  <div class="main-visual">
    <div class="main-img">
      <img src="<?php echo get_template_directory_uri(); ?>/img/main-visual.jpg" alt="メインビジュアル" />
    </div>
    <div class="main-text">
      <p>Discover new paths, discover yourself.</p>
    </div>
  </div>
  <div id="news">
    <div class="content-title">
      <p>news</p>
      <span>ニュース</span>
    </div>
    <div class="news">



      <?php

      $args = array(


        'post_type'      => 'post',

        'category_name' => 'news',

        'posts_per_page' => 3,
      );
      // データの取得
      $posts = get_posts($args);
      ?>

      <?php foreach ($posts as $post) : ?>
        <?php setup_postdata($post); ?>
        <a href="<?php the_permalink(); ?>" class="news-content">
          <span class="news-date"><?php echo get_the_date(); ?>
          </span><br>
          <span class="news-title" style="font-weight: bold;"> <?php the_title(); ?></span>
          <p class=" news-text">
            <?php
            $content = wp_trim_words(get_the_content(),  50, '...');
            echo $content;
            ?>
          </p>
        </a>
        <!-- <a href="newssingle.html " class="news-content">
            <span class="news-date">3月12日:</span>
            <span class="news-title">タイトルタイトル</span>
            <p class="news-text">
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
          </a>
          <a href="newssingle.html " class="news-content">
            <span class="news-date">3月12日:</span>
            <span class="news-title">タイトルタイトル</span>
            <p class="news-text">
              テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト
            </p>
          </a> -->
      <?php endforeach; ?>

      <?php wp_reset_postdata(); ?>

    </div>
  </div>
  <p class="readmore"><a href="<?php echo home_url(); ?>/category/news">read-more</a></p>
  <div class="position">
    <div id="consept">
      <div class="content-title">
        <p>concept</p>
        <span>コンセプト</span>
      </div>
      <div class="concept-text">
        <p>
          「忙しい都市生活をもっと自由に。新しい都市型シェアサイクルで、好きな時に、好きな場所へ。
          交通渋滞も気にせず、スマートに移動。
          手軽に借りて、スムーズに返却。あなたの街をもっと身近に感じられる、新しい移動手段です。」
        </p>
      </div>
    </div>
    <div id="features">
      <div class="content-title">
        <p>特徴</p>
        <span>features</span>
      </div>
      <div class="concept-text">
        <p>
          GoodCyclingの魅力は、便利さと手軽さにあります。まず、低価格で利用でき、時間ごとの課金により、1分ごとの料金で決済されますので、無駄なく利用できます。
          さらに、主要駅の徒歩1分圏内にサイクルステーションが設置されており、通勤やちょっとした移動に最適です。観光や日常のちょっとした移動まで、幅広いシーンで活用できるこのサービスは、都市での移動をよりスマートで快適にします。
        </p>
      </div>
    </div>
  </div>

  <!-- スマホアプリ -->
  <div class="fix-sp">
    <div class="apple-sp">
      <img src="<?php echo get_template_directory_uri(); ?>/img/app.png" alt="アプリアイコン" />
    </div>
    <p class="arrow-sp">↑↑↑↑</p>
    <p class="instol-sp">インストール</p>
  </div>
  <div id="howuse" class="howuse">
    <div class="content-title">
      <p>ご利用方法</p>
      <span>how-to-use</span>
    </div>
    <div>
      <ul>
        <li class="howuse-title">
          1. アプリをダウンロードし、アカウント登録
        </li>
        <li class="howuse-text">
          まずはアプリをダウンロードし、メールアドレスや電話番号でアカウントを登録します。
        </li>
        <li class="howuse-title">2. 近くのサイクルステーションを検索</li>
        <li class="howuse-text">
          アプリの地図機能を使って、最寄りのサイクルステーションを探し、利用可能な自転車を確認します。
        </li>
        <li class="howuse-title">3. QRコードをスキャンして自転車を解錠</li>
        <li class="howuse-text">
          指定された自転車のQRコードをアプリでスキャンし、ロックを解除して出発します。
        </li>
        <li class="howuse-title">4. 返却ステーションで自転車を返却</li>
        <li class="howuse-text">
          目的地の返却ステーションに到着したら、自転車を停めてロックを施し、アプリで返却手続きを完了します。
        </li>
      </ul>
    </div>
    <div class="work-men">
      <img src="<?php echo get_template_directory_uri(); ?>/img/通勤_男性.jpg" alt="通勤男性" />
    </div>
  </div>

  <div id="area" class="area-top">
    <div class="content-title">
      <p>対応地域</p>
      <span>area</span>
    </div>
    <div>
      <ul class="area">
        <li>・東京23区内</li>
        <li>・大阪市内</li>
      </ul>
      <ul class="area-text">
        <li>
          各区内の主要駅や観光名所の近くにサイクルステーションを設置しています。
        </li>
        <li>今後もステーション数、エリア拡大予定！</li>
        <li>アプリからステーション設置候補地の提案も可能！</li>
      </ul>
    </div>
    <div class="phone-girl">
      <img src="<?php echo get_template_directory_uri(); ?>/img/女性_スマホ2.jpeg" alt="女性スマホ" />
    </div>
  </div>
  <div id="voice" class="voice-top">
    <div class="content-title">
      <p>お客様の声</p>
      <span>VOICE</span>
    </div>
    <div class="voice">

      <?php

      $args = array(
        'order' =>  'ASC',

        'post_type'      => 'post',

        'category_name' => 'voice',

        'posts_per_page' => 3,
      );
      // データの取得
      $posts = get_posts($args);
      ?>

      <?php foreach ($posts as $post) : ?>

        <?php setup_postdata($post); ?>
        <div class="voice-content">
          <a href="<?php the_permalink(); ?>">
            <!-- 追加 -->
            <div class=voice-image-wrapper>
              <!-- お試し -->
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
              <!-- 追加 -->
            </div>
          </a>
          <div>
            <a href="<?php the_permalink(); ?>">
              <?php $content = wp_trim_words(get_the_content(),  50, '...');
              echo $content;
              ?></a>
          </div>
        </div>
        <!-- <div class="voice-content">
            <a href="voicesingle.html"> <div class="image">image</div></a>
            <div>
              <a href="voicesingle.html">
                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</a
              >
            </div>
          </div>
          <div class="voice-content">
            <a href="voicesingle.html"> <div class="image">image</div></a>
            <div>
              <a href="voicesingle.html">
                テキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキストテキスト</a
              >
            </div>
          </div> -->
      <?php endforeach; ?>

      <?php wp_reset_postdata(); ?>
    </div>
    <p class="voice-read-more"><a href="<?php echo home_url(); ?>/category/voice">read-more</a></p>
  </div>
  <div id="qa" class="qa">
    <div class="content-title">
      <p>よくある質問</p>
      <span>Q&A</span>
      <div>
        <!-- ここから -->
        <div class="accordion">
          <div class="faq">
            <input type="checkbox" id="faq01" class="toggle" />
            <label class="question" for="faq01"><span>Q</span>シェアサイクルの利用方法を教えてください。</label>
            <div class="anser">
              <div>
                <span>A</span>
                アプリをダウンロードし、登録後、地図から最寄りのサイクルステーションを探して自転車を予約します。予約後、自転車に表示されているQRコードをアプリでスキャンしてロックを解除します。利用後は、指定されたサイクルステーションに返却し、アプリで返却手続きを行ってください。
              </div>
            </div>
          </div>

          <div class="faq">
            <input type="checkbox" id="faq02" class="toggle" />
            <label class="question" for="faq02"><span>Q</span>料金体系はどのようになっていますか？</label>
            <div class="anser">
              <div>
                <span>A</span>
                料金は利用時間に応じて計算されます。基本料金に加え、利用時間に応じた追加料金が発生します。詳細はアプリインストール後、料金表をご確認ください。
              </div>
            </div>
          </div>

          <div class="faq">
            <input type="checkbox" id="faq03" class="toggle" />
            <label class="question" for="faq03"><span>Q</span>どこで自転車を借りたり返却したりできますか？</label>
            <div class="anser">
              <div>
                <span>A</span>
                サイクルステーションは区内各地に設置されています。アプリ内の地図から最寄りのサイクルステーションを確認し、自転車を借りたり返却したりできます。
              </div>
            </div>
          </div>
          <p class="readmore"><a href="<?php echo home_url(); ?>/category/qa">read-more</a></p>
        </div>
        <!-- ここまで -->
      </div>
    </div>
  </div>
  <!-- スマホアプリ -->
  <div class="fix-sp">
    <div class="apple-sp">
      <img src="<?php echo get_template_directory_uri(); ?>/img/app.png" alt="アプリアイコン" />
    </div>
    <p class="arrow-sp">↑↑↑↑</p>
    <p class="instol-sp">インストール</p>
  </div>

  <div id="recautions" class="recautions">
    <div class="content-title">
      <p>注意事項</p>
      <span>recautions</span>
      <details>
        <summary>ご利用の際にお読み下さい</summary>
        <ul>
          <li class="recautions-title">1. 交通ルールの遵守</li>
          <li class="recautions-text">
            <span>信号や標識を守る</span>：特に交差点や横断歩道では、必ず信号や標識に従いましょう。
          </li>
          <li class="recautions-text">
            <span>歩行者優先</span>：歩行者と同じ歩道を通る際は、歩行者を優先し、スピードを抑えてください。
          </li>
          <li class="recautions-text">
            <span>一方通行に注意</span>：シェアサイクル利用時も、車両としてのルールに従い、一方通行の道路に注意しましょう。
          </li>
          <li class="recautions-title">2. 安全装備の確認</li>
          <li class="recautions-text">
            <span>ヘルメットの着用</span>：義務化されている場合もありますが、自発的にヘルメットを着用することで頭部のケガを防げます。
          </li>
          <li class="recautions-text">
            <span>ライトと反射材の使用</span>：夜間や視界が悪い場合は、前照灯や後部ライト、反射材を利用して自分の存在を他者に知らせましょう。
          </li>
          <li class="recautions-title">3. 車両の点検</li>
          <li class="recautions-text">
            <span>タイヤの空気圧</span>：出発前にタイヤの空気圧を確認し、必要であれば調整してください。
          </li>
          <li class="recautions-title">4. 適切なスピードでの運転</li>
          <li class="recautions-text">
            <span>過度なスピードを出さない</span>特に人通りの多い場所や視界が悪い場所では、スピードを控えましょう。
          </li>
          <li class="recautions-text">
            <span>急ブレーキに注意</span>急なブレーキは転倒の原因になります。周囲の状況を見極め、余裕を持った運転を心掛けてください。
          </li>

          <li class="recautions-title">5. 周囲の状況に注意</li>
          <li class="recautions-text">
            <span>車両の死角に注意</span>自動車やトラックの死角に入らないように注意し、巻き込み事故を防ぎましょう。
          </li>
          <li class="recautions-text">
            <span>左右の確認</span>曲がる際や道路を横断する際は、必ず左右を確認し、他の車両がいないか確かめましょう
          </li>

          <li class="recautions-title">6. 適切な駐輪</li>
          <li class="recautions-text">
            <span>駐輪禁止エリアの確認</span>：駐輪は、施設や道路の指定された場所に行う必要があります。公共の場での無断駐輪は迷惑行為となるため注意が必要です
          </li>
          <li class="recautions-text">
            <span>自転車のロック</span>：使用後は必ずロックをかけ、盗難を防ぎましょう。
          </li>
          <li class="recautions-title">7. 事故が発生した場合の対応</li>
          <li class="recautions-text">
            <span>警察への連絡</span>：事故に遭遇した場合、速やかに警察に連絡し、事故の状況を報告してください。
          </li>
          <li class="recautions-text">
            <span>運営会社への連絡</span>運営会社への連絡
          </li>
          <li class="recautions-text">
            <span>相手方の確認</span>事故の相手がいる場合は、連絡先を交換し、保険の手続きを行う準備をしてください。
          </li>

          <li class="recautions-title">8. 保険加入の確認</li>
          <li class="recautions-text">
            <span>賠償責任保険</span>：シェアサイクルの利用者は、万が一の事故に備えて賠償責任保険に加入しておくことが推奨されます。
          </li>
        </ul>
      </details>
    </div>
  </div>
</main>
<div class="fix">
  <div class="apple">
    <img src="<?php echo get_template_directory_uri(); ?>/img/app.png" alt="アプリアイコン" />
  </div>
  <p class="arrow">↑↑↑↑</p>
  <p class="instol">インストール</p>
</div>
</body>
<?php get_footer(); ?>