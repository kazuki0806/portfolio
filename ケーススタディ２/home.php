<?php get_header(); ?>

<main class="fade-in">
    <article class="fade-in">
        <section class="fade-in">
        <div id="top-inner">
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/Animals/cat_4.jpg" alt="猫の画像">
                        <div id="cat-content" class="animal fade-in">
                            <p class="fade-delay">大切な家族であるペットとの特別な瞬間を、<br class="only">心からリラックスできる空間でお届けします。</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/Animals/dog_2.jpg" alt="犬の画像">
                        <div id="dog-content" class="animal fade-in">
                            <p class="fade-delay">ペットたちがまるで自宅にいるような居心地の良さを感じられる雰囲気を大切にしています。</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/Animals/bird_3.jpg" alt="鳥の画像">
                        <div id="bird" class="animal fade-in">
                            <p class="fade-delay">「可愛い」だけじゃない、愛おしい日常の瞬間を一緒に形にしませんか？</p>
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
  



            <div id="stadio-inner" class="fade-in">
                <div class="title fade-in">
                    <h2>Tail Familyのスタジオ</h2>
                </div>
                <div class="stadios fade-in">
                    <div class="stadio fade-in">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/studio_camera/studio_2.jpg" alt="スタジオの写真">
                        <div class="stadio-content fade-in">
                            <h3>ハウススタジオ</h3>
                            <p>温かみのあるインテリアが特徴のスタジオで、まるで自宅のようにくつろぎながら撮影できます。
                                ナチュラルな光が差し込む落ち着いた雰囲気の中、ペットの自然な表情を引き出します。</p>
                        </div>
                    </div>
                    <div class="stadio fade-in">
                        <div class="stadio-content fade-in">
                            <h3>スチール撮影スタジオ</h3>
                            <p>プロの撮影機材を揃えたスタジオで、スタイリッシュなシーンを撮影できます。
                                洗練された背景とライティングを駆使して、ペットの魅力を最大限に引き出す撮影が可能です。</p>
                        </div>
                        <img src="<?php echo get_template_directory_uri(); ?>/image/studio_camera/studio_1.jpg" alt="スタジオの写真">
                    </div>
                    <button class="btn fade-in"><a href="<?php echo home_url(); ?>/stadio">スタジオプラン</a></button>
                </div>
            </div>

            <div id="servise-inner" class="fade-in">
                <div class="title fade-in">
                    <h2>出張サービス</h2>
                </div>
                <div class="servises fade-in">
                    <img src="<?php echo get_template_directory_uri(); ?>/image/Animals/dog_6.jpg" alt="犬の写真">
                    <div class="servise-content fade-in">
                        <p>「いつものお散歩コースで」「お気に入りのおうちのソファで」ペットがリラックスできる場所で
                            撮影してみませんか？</p>
                        <p>慣れた場所で、いつも通りの姿を記念に残したい」そんな想いを形にするお手伝いをいたします！</p>
                    </div>
                </div>
                <button class="btn fade-in"><a href="<?php echo home_url(); ?>/trip">出張プラン</a></button>
            </div>

            <div id="cameraman-inner" class="fade-in">
                <div class="title fade-in">
                    <h2>カメラマン紹介</h2>
                </div>
                <div class="cameramans fade-in">
                    <div class="cameraman fade-in">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/studio_camera/cam_1.jpg" alt="カメラマンの写真">
                        <div class="cameraman-content fade-in">
                            <h3>犬山 羽子</h3>
                            <p>やさしい目線でペットの自然な表情を捉えることに長けています。
                                細やかな気配りと温かな対応で、初めての撮影でも安心してお任せいただけます。</p>
                        </div>
                    </div>
                    <div class="cameraman fade-in">
                        <img src="<?php echo get_template_directory_uri(); ?>/image/studio_camera/cam_2.jpg" alt="カメラマンの写真">
                        <div class="cameraman-content fade-in">
                            <h3>猫田 映子</h3>
                            <p>プロフェッショナルな技術を駆使し、
                                ペットの魅力を引き出すアングルやライティングを得意としています。ご希望のイメージに合わせた撮影が可能です。</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </article>
</main>

<?php get_footer(); ?>

