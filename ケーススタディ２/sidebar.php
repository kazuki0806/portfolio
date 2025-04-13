<h3 class="fade-in">カテゴリー</h3>
  <ul class="fade-in">
        <li class="fade-in"><a href="<?php echo  home_url() ; ?>/">ホーム</a></li>
        <li class="fade-in"><a href="<?php echo  home_url() ; ?>/stadio">スタジオ撮影</a></li>
        <li class="fade-in"><a href="<?php echo  home_url() ; ?>/trip">出張撮影</a></li>
        <li class="fade-in"><a href="<?php echo  home_url() ; ?>/category/blog">ブログ</a></li>
        <li class="fade-in"><a href="<?php echo  home_url() ; ?>/category/gallery">ギャラリー</a></li>
        <li class="fade-in"><a href="<?php echo  home_url() ; ?>/reservation">予約フォーム</a></li>
  </ul>

  <h3 class="fade-in">最近の投稿</h3>
  <ul class="fade-in">
      <?php
        $recent_posts = new WP_Query(array(
          'post_type' => 'post',
          'posts_per_page' => 3,
          'orderby' => 'date',
          'order' => 'DESC',
          'category_name' => 'blog' // 「blog」カテゴリーの記事のみ取得
        ));
        if ($recent_posts->have_posts()) :
          while ($recent_posts->have_posts()) : $recent_posts->the_post();
      ?>
            <li class="fade-in"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
      <?php
          endwhile;
          wp_reset_postdata();
        else :
      ?>
          <li class="fade-in">記事がありません。</li>
      <?php endif; ?>
  </ul>
