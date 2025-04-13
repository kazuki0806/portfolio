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
              <p class="sub-title fade-in">〜たっぷり時間をかけて、ペットの個性を引き出す本格的なプランです〜</p>
              <p class="plan-content fade-in">
                撮影時間：約3時間<br>
                納品カット数：25カット（高解像度データ）<br>
                撮影場所：ご指定の1〜2箇所（自宅＋公園などの組み合わせも可能）<br>
                料金：66,000円（税込）＋交通費 おすすめ：特別な日の撮影や、たくさんの表情を記念に残したい方
              </p>

              <button class="btn-menu fade-in"><a href="<?php echo home_url(); ?>/reservation">予約する</a></button>
            </div>

            <div class="stadio-menu-content fade-in">
              <h3 class="fade-in">2. プレミアムプラン</h3>
              <p class="sub-title fade-in">〜ペットとの大切な時間を余裕をもって贅沢に楽しむプラン。オリジナルアルバム付き〜</p>
              <p class="plan-content fade-in">
                撮影時間：約4時間<br>
                納品カット数：40カット以上（高解像度データ）<br>
                撮影場所：ご指定の1〜3箇所（複数ロケーションで多彩な写真を撮影）<br>
                特典：オリジナルフォトアルバム（A4サイズ、20ページ）<br>
                衣装レンタル・小道具無料対応<br>
                料金：99,000円（税込）＋交通費 おすすめ：ペットの誕生日や特別なイベント、家族全員での記念写真
              </p>

              <button class="btn-menu fade-in"><a href="<?php echo home_url(); ?>/reservation">予約する</a></button>
            </div>

            <div class="stadio-menu-content fade-in">
              <h3 class="fade-in">3. グループ撮影プラン</h3>
              <p class="sub-title fade-in">〜ペット仲間同士で撮影を楽しめるプラン。お友達と一緒に！（2家族様から〜</p>
              <p class="plan-content fade-in">
                撮影時間：約2時間～（最大5家族様まで対応）<br>
                納品カット数：15カット／1家族（高解像度データ）<br>
                撮影場所：ご指定の1箇所（公園やドッグランなどがおすすめ）<br>
                料金：1家族様につき33,000円（税込）＋交通費 おすすめ：お友達との記念撮影やグループイベントの思い出作り
              </p>

              <button class="btn-menu fade-in"><a href="<?php echo home_url(); ?>/reservation">予約する</a></button>
            </div>

            <div class="stadio-menu-content fade-in">
              <h3 class="fade-in">オプションサービス</h3>
              <p class="plan-content fade-in">
                追加カット（1枚）：1,750円<br>
                記念グッズ作成（フォトフレーム、ポスター、カレンダーなど）：お問い合わせください<br>
                特別なリクエスト（早朝や深夜撮影、遠方対応など）：個別相談可能
              </p>

              <button class="btn-menu fade-in"><a href="<?php echo home_url(); ?>/reservation">予約する</a></button>
            </div>

            <div class="stadio-menu-content fade-in">
              <h3 class="fade-in">交通費について</h3>
              <p class="plan-content fade-in">
                関東圏内であれば対応可能です。<br>
                交通費はご指定の場所に応じてお見積もりいたします（例：最寄駅からの移動費＋車での移動の場合の駐車場代など）。
              </p>
            </div>
          </div>

        </div>
      </section>
    </article>
  </main>

  <?php endwhile; ?>
  <?php endif; ?>

 <?php get_footer(); ?>
