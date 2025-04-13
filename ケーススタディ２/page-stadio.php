<?php get_header(); ?>
<body>

<?php if(have_posts()): ?>
  <?php while(have_posts()): the_post(); ?>
  <main class="fade-in">
    <article class="fade-in">
      <section class="fade-in">
        <div id="stadio-menu" class="fade-in">
          <div class="menu-title fade-in">
            <h2><?php the_title(); ?></h2>
          </div>

          <div class="fade-in">
            <div class="stadio-menu-content fade-in">
              <h3 class="fade-in">1. スタンダードプラン</h3>
              <p class="sub-title fade-in">〜ペットの魅力を手軽に引き出す、お試し感覚のプランです〜</p>
              <p class="plan-content fade-in">
                撮影時間：約1時間<br>
                納品カット数：8カット（高解像度データ）<br>
                撮影場所：スタジオまたは出張撮影（1箇所）<br>
                料金：27,500円（税込） おすすめ：記念日や日常の1シーンを気軽に撮影したい方
              </p>

              <button class="btn-menu fade-in"><a href="<?php echo home_url(); ?>/reservation">予約する</a></button>
            </div>

            <div class="stadio-menu-content fade-in">
              <h3 class="fade-in">2. プレミアムプラン </h3>
              <p class="sub-title fade-in">〜たっぷり時間をかけて、さまざまなシーンや表情を撮影する充実プラン〜</p>
              <p class="plan-content fade-in">
                撮影時間：約2時間<br>
                納品カット数：20カット（高解像度データ）<br>
                撮影場所：スタジオまたは出張撮影（1~2箇所）<br>
                料金：55,000円（税込） おすすめ：特別なイベントや、しっかり思い出を残したい方
              </p>

              <button class="btn-menu fade-in"><a href="<?php echo home_url(); ?>/reservation">予約する</a></button>
            </div>

            <div class="stadio-menu-content fade-in">
              <h3 class="fade-in">3. オーダーメイドプラン</h3>
              <p class="sub-title fade-in">〜お客様のご希望に合わせて撮影内容をカスタマイズ〜</p>
              <p class="plan-content fade-in">
                撮影時間：自由に設定可能（最長5時間まで対応）<br>
                内容：納品カット数・ロケーション・特別なリクエストに対応<br>
                お見積もり：お問い合わせください
              </p>

              <button class="btn-menu fade-in"><a href="<?php echo home_url(); ?>/reservation">予約する</a></button>
            </div>

            <div class="stadio-menu-content fade-in">
              <h3 class="fade-in">オプションサービス</h3>
              <p class="plan-content fade-in">
                追加カット（1枚）：1,750円<br>
                プリント（Lサイズ〜A3サイズ）：550円〜<br>
                ペットの衣装レンタル：2,200円/1着<br>
                記念グッズ作成（カレンダー、ポスターなど）：お問い合わせください
              </p>

              <button class="btn-menu fade-in"><a href="<?php echo home_url(); ?>/reservation">予約する</a></button>
            </div>
          </div>

        </div>
      </section>
    </article>
  </main>

  <?php endwhile; ?>
  <?php endif; ?>

  <?php get_footer(); ?>
