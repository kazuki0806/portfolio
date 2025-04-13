<?php get_header(); ?>

<body>
  <main class="fade-in">
    <article class="fade-in">
      <section class="fade-in">
        <div id="single-post" class="fade-in">
          <div class="menu-title fade-in">
            <h2><?php the_title(); ?></h2> <!-- 投稿のタイトル -->
          </div>

          <div class="container single-post-layout fade-in">
            <div class="single-post-content fade-in">
              <!-- サムネイル画像・ナビゲーション・戻るボタンを同じdivにまとめる -->
              <div class="post-meta fade-in">
                <!-- サムネイル画像 -->
                <?php if (has_post_thumbnail()) : ?>
                  <div class="post-thumbnail fade-in">
                    <img src="<?php the_post_thumbnail_url('large'); ?>" alt="<?php the_title(); ?>">
                  </div>
                <?php endif; ?>
              </div>

              <!-- 投稿の内容 -->
              <div class="post-body fade-in">
                <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                  <p><?php the_content(); ?></p>
                <?php endwhile; endif; ?>
              </div>

              <!-- 前後の記事へのリンク（同じカテゴリー内で制限） -->
                <div class="post-navigation">
                  <div class="prev-post">
                    <?php previous_post_link('%link', '← 前の記事へ', true, '', 'category'); ?>
                  </div>
                    <div class="next-post">
                        <?php next_post_link('%link', '次の記事へ →', true, '', 'category'); ?>
                    </div>
                </div>


              <!-- 戻るボタン -->
              <div class="back-to-blog fade-in">
                <?php 
                  $categories = get_the_category();
                  $category_link = home_url(); // デフォルトの戻る先
                  foreach ($categories as $category) {
                    if ($category->slug === 'gallery') {
                      $category_link = home_url('/category/gallery');
                      break;
                    } elseif ($category->slug === 'blog') {
                      $category_link = home_url('/category/blog');
                      break;
                    }
                  }
                ?>
                <a href="<?php echo esc_url($category_link); ?>">一覧に戻る</a>
              </div>
            </div>

            <!-- サイドバー -->
            <aside class="sidebar fade-in">
              <?php get_sidebar(); ?>
            </aside>
          </div>
        </div>
      </section>
    </article>
  </main>

<?php get_footer(); ?>
