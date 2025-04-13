<?php get_header(); ?>

<body>
  <main class="fade-in">
    <article class="fade-in">
      <section class="fade-in">
        <div id="gallery-menu" class="fade-in">
          <div class="menu-title fade-in">
            <h2>ギャラリー</h2>
          </div>

          <!-- ギャラリーとサイドバーを横並びにする -->
          <div class="gallery-layout fade-in">
            <!-- ギャラリーエリア（7割） -->
            <div class="gallery fade-in">
              <?php if (have_posts()): ?>
                <?php while (have_posts()): the_post(); ?>
                  <div class="gallery-container fade-in">
                    <a href="<?php the_permalink(); ?>" class="gallery-link fade-in">
                      <div class="gallery-picture fade-in">
                        <?php if (has_post_thumbnail()): ?>
                          <?php the_post_thumbnail('medium'); ?>
                        <?php else: ?>
                          <img src="<?php echo get_template_directory_uri(); ?>/assets/no-image.png" alt="No Image">
                        <?php endif; ?>
                      </div>
                    </a>
                  </div>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
              <?php else: ?>
                <p class="fade-in">ギャラリー画像がありません。</p>
              <?php endif; ?>
            </div>

            <!-- サイドバー（3割） -->
            <aside class="sidebar fade-in">
              <?php get_sidebar(); ?>
            </aside>
          </div>
        </div>
      </section>
    </article>
  </main>

  <?php get_footer(); ?>
</body>
