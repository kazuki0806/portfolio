<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>case study</title>
  <link rel="stylesheet" href="main.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">

</head>
<body>

<header>
    <div id="header-inner">
        <img src="image/studio_camera/ハンバーガー.png" alt="ハンバーガーメニュー" id="menu-icon">
        <h1>Tail Family</h1>
    </div>

    <!-- メニュー -->
    <nav id="hamburger-menu">

      <button id="close-menu">&times;</button>
        <ul>
            <li><a href="#">ホーム</a></li>
            <li><a href="#">スタジオ撮影</a></li>
            <li><a href="#">出張撮影</a></li>
            <li><a href="#">ブログ</a></li>
            <li><a href="#">ギャラリー</a></li>
            <li><a href="#">予約フォーム</a></li>
        </ul>
    </nav>
</header>


  <main>
    <article>
    <section>
      <div id="top-inner">
        <div class="swiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                  <img src="image/Animals/cat_4.jpg" alt="猫の画像">
                    <div id="cat-content" class="animal">
                      <p>大切な家族であるペットとの特別な瞬間を、<br class="only">心からリラックスできる空間でお届けします。</p>
                    </div>
                </div>
                <div class="swiper-slide">
                  <img src="image/Animals/dog_2.jpg" alt="犬の画像">
                    <div id="dog-content" class="animal">
                      <p>ペットたちがまるで自宅にいるような居心地の良さを感じられる雰囲気を大切にしています。</p>
                    </div>
                </div>
                <div class="swiper-slide">
                  <img src="image/Animals/bird_3.jpg" alt="鳥の画像">
                    <div id="bird" class="animal">
                      <p>「可愛い」だけじゃない、愛おしい日常の瞬間を一緒に形にしませんか？</p>
                    </div>
                </div>
                
            </div>
             <!-- 前後ボタン -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <!-- ページネーション -->
        <div class="swiper-pagination"></div>
    </div>
    </div>
        <div id="stadio-inner">
          <div class="title">
            <h2>Tail Familyのスタジオ</h2>
          </div>
          <div class="stadios">
            <div class="stadio">
              <img src="image/studio_camera/studio_2.jpg" alt="スタジオの写真">
              <div class="stadio-content">
                <h3>ハウススタジオ</h3>
                <p>温かみのあるインテリアが特徴のスタジオで、まるで自宅のようにくつろぎながら撮影できます。
                ナチュラルな光が差し込む落ち着いた雰囲気の中、ペットの自然な表情を引き出します。</p>
              </div>
            </div>

            <div class="stadio">
              <div class="stadio-content">
                <h3>スチール撮影スタジオ</h3>
                <p>プロの撮影機材を揃えたスタジオで、スタイリッシュなシーンを撮影できます。
                  洗練された背景とライティングを駆使して、ペットの魅力を最大限に引き出す撮影が可能です。</p>
              </div>
              <img src="image/studio_camera/studio_1.jpg" alt="スタジオの写真">
            </div>

            <button class="btn">スタジオプラン</button>
          </div>

          <div id="servise-inner">
            <div class="title">
              <h2>出張サービス</h2>
            </div>
            <div class="servises">
              <img src="image/Animals/dog_6.jpg" alt="犬の写真">
              <div class="servise-content">
                <p>「いつものお散歩コースで」
                  「お気に入りのおうちのソファで」ペットがリラックスできる場所で
                  撮影してみませんか？</p>
                  <p>慣れた場所で、いつも通りの姿を記念に残したい」そんな想いを形にするお手伝いをいたします！</p>
              </div>
            </div>
            <button class="btn">出張プラン</button>
          </div>



          <div id="cameraman-inner">
            <div class="title">
              <h2>カメラマン紹介</h2>
            </div>
            <div class="cameramans">
              <div class="cameraman">
                <img src="image/studio_camera/cam_1.jpg" alt="カメラマンの写真">
                <div class="cameraman-content">
                  <h3>犬山 羽子</h3>
                  <p>やさしい目線でペットの自然な表情を捉えることに長けています。
                    細やかな気配りと温かな対応で、初めての撮影でも安心してお任せいただけます。</p>
                </div>
              </div>

              <div class="cameraman">
                <img src="image/studio_camera/cam_2.jpg" alt="カメラマンの写真">
                <div class="cameraman-content">
                  <h3>猫田 映子</h3>
                  <p>プロフェッショナルな技術を駆使し、
                    ペットの魅力を引き出すアングルやライティングを得意としています。ご希望のイメージに合わせた撮影が可能です。</p>
                </div>
              </div>
            </div>
          </div>

         
        </div>
      </div>
    </section>
    </article>
  </main>

  <footer>
    <div id="footer-inner">
      <p>Tail Family</p>
      <div class="footer-content">
        <p>スタジオ名：Studio Tail Family<br>
          所在地：〒105-0001東京都港区虎ノ門1丁目3-1グローバルスクエア 17階<br>
          アクセス：<br>
          東京メトロ銀座線「虎ノ門駅」より徒歩3分<br>
          東京メトロ日比谷線「虎ノ門ヒルズ駅」より徒歩5分<br>
          営業時間：10:00〜19:00（最終受付 17:00）定休日：毎週火曜日
          </p>

          <p>特徴：<br>
            自然光がたっぷり入る広々としたスタジオ<br>
            ペットがリラックスできる落ち着いた空間づくり<br>
            ご家族も一緒にくつろげるラウンジスペース完備<br>
            お問い合わせ：<br>
            TEL：03-xxxx-xxxx<br>
            メール：-----@tailfamily.jp<br>
            ペットと一緒に心地よい時間を過ごせるスタジオです。ぜひ一度お越しください！
            </p>
      </div>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
  <script src="script.js"></script>
</body>
</html>