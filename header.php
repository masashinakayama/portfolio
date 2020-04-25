<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- SEO対策 検索結果に表示される説明文 -->
    <meta name="format-detection" content="telephone=no">
    <title>Masashi Nakayama</title>

    <!-- Faviconsサイト上の小さいアイコン  --> 
   <link rel="shortcut icon" href="<?php echo get_template_directory_uri() ?>/img/logo4.png">

   <!-- 外部のcssライブラリを読み込む --> 
    
   <!-- 内部cssファイルを読み込む -->
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/pc.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/tab.css" media="all">
    <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/sp.css" media="all">
    <!-- 外部のjs記述を読み込む -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous"> 
    <link href="https://fonts.googleapis.com/css?family=Ribeye" rel="stylesheet">


   <!--  twitterカード  -->
   <meta name="twitter:card" content="summary_large_image" /> <!--①-->
   <meta name="twitter:site" content="@masashi04353004" /> <!--②-->
   <meta property="og:url" content="https://masashiii.com/" /> <!--③-->
   <meta property="og:title" content="自作ポートフォリオ" /> <!--④-->
   <meta property="og:description" content="独学2ヶ月目で一から制作した自作のポートフォリオ用テーマです。" /> <!--⑤-->
   <meta property="og:image" content="<?php echo get_template_directory_uri() ?>/work6.png" /> <!--⑥-->



    <?php wp_head(); ?>

</head>
<body>
  
  <!-- header -->
  <header>
      <div class="inner">
        <div class="header-left">
          <a href="<?php echo esc_url( home_url() ); ?>"><img src="<?php echo get_template_directory_uri() ?>/img/logo4.png" alt="ロゴの写真"></a>
        </div>

        <div class="header-right">
           <ul>
             <li><a href="<?php echo esc_url( home_url() ); ?>/About">About</a></li>
             <li><a href="<?php echo esc_url( home_url() ); ?>/Skills">Skills</a></li>
             <li><a href="<?php echo esc_url( home_url() ); ?>/Works">Works</a></li>
             <li><a href="https://masashiii.com/wp/">Blog</a></li>
             <li><a href="<?php echo esc_url( home_url() ); ?>/Contact">Contact</a></li>
           </ul>
        </div>


      </div>
    </header>



