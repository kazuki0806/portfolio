<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>case study</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/main.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.css">
  <?php wp_head(); ?>
</head>
<body>

<header>
    <div id="header-inner">
        <img src="<?php echo get_template_directory_uri(); ?>/image/studio_camera/ハンバーガー.png" alt="ハンバーガーメニュー" id="menu-icon">
        <h1>Tail Family</h1>
    </div>

    <!-- メニュー -->
    <nav id="hamburger-menu">

      <button id="close-menu">&times;</button>
        <ul>
            <li><a href="<?php echo  home_url() ; ?>/">ホーム</a></li>
            <li><a href="<?php echo  home_url() ; ?>/stadio">スタジオ撮影</a></li>
            <li><a href="<?php echo  home_url() ; ?>/trip">出張撮影</a></li>
            <li><a href="<?php echo  home_url() ; ?>/category/blog">ブログ</a></li>
            <li><a href="<?php echo  home_url() ; ?>/category/gallery">ギャラリー</a></li>
            <li><a href="<?php echo  home_url() ; ?>/reservation">予約フォーム</a></li>
        </ul>
    </nav>
</header>

