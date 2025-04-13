<?php get_header(); ?>

<body>
  <main class="fade-in">
    <article class="fade-in">
      <section class="fade-in">
        <div id="blog-menu" class="fade-in">
          <div class="menu-title fade-in">
            <h2>ブログ</h2>
          </div>

          <div class="container fade-in">
            <!-- 投稿一覧を横2列で並べる -->
            <div class="blog-layout fade-in">
              <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                  <div class="blog-post fade-in">
                    <!-- サムネイル -->
                    <?php if (has_post_thumbnail()): ?>
                      <div class="post-thumbnail fade-in">
                        <?php the_post_thumbnail('medium'); ?>
                      </div>
                    <?php endif; ?>

                    <div class="post-content fade-in">
                      <h3 class="fade-in"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                      <p class="fade-in"><?php the_excerpt(); ?></p>
                      <a href="<?php the_permalink(); ?>" class="read-more fade-in">続きを読む</a>
                    </div>
                  </div>
                <?php endwhile; ?>
              <?php else: ?>
                <p class="fade-in">記事がありません。</p>
              <?php endif; ?>
            </div> <!-- blog-layout 終了 -->

            <!-- サイドバー（固定位置） -->
            <aside class="sidebar fade-in">
              <?php get_sidebar(); ?>
            </aside>
                
          </div> <!-- container 終了 -->
        </div>
      </section>
    </article>
  </main>

  <?php get_footer(); ?>
</body>
