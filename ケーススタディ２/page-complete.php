<?php get_header(); ?>

<body>
  <main>
    <article>
      <section class="reservation-completed">
        <div class="reservation-completed-content">
        <h3 class="complete">予約完了しました！！</h3>
        <p>ご予約ありがとうございます。確認のメールをお送りしましたのでご確認ください。</p>
        </div>
        <button class="complete-btn"><a href="<?php echo  home_url() ; ?>">ホームページに戻る</a></button>
    </section>

    </article>
  </main>

  <?php get_footer(); ?>