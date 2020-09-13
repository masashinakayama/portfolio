 <?php get_header(); ?>

  <!-- main -->
    <section class="main">
      <div class="inner">
        <h1>Masashi Nakayama</h1>
        <p></p>
      </div>
    </section>

<!-- skills -->

<section class="skills">
   <div class="inner">
     <h2>Skills</h2>
     <div class="skills-boxs">
         <div class="skills-box box1">
          <i class="fas fa-laptop"></i>
           <p class="txtl">コーディング</p>
           <p class="text">スマホ、タブレット、PC、どれから見ても見やすいレスポンシブなサイトを制作することができます。</p>
         </div>
         <div class="skills-box box2">
          <i class="fab fa-js"></i>
           <p class="txtl">動的なサイト制作</p>
           <p class="text">JavaScriptのライブラリであるjQeryを用いて動きのあるリッチなサイトを作ることができます。</p>
         </div>
         <div class="skills-box box3">
          <i class="fab fa-wordpress"></i>
           <p class="txtl">WordPress対応</p>
           <p class="text">WordPressを導入し、編集・更新のしやすいサイトを制作いたします。 また、すでにお持ちのサイトをWordPress化することも可能です。</p>
         </div>
     </div>
     <a href="Skills" class="btn">More</a>
   </div>
</section>

<!-- works -->

<section class="works">
  <div class="inner">
    <h2>Works</h2>


    <div class="works-boxs">

        <?php
      //記事があればentriesブロック以下を表示
        if (have_posts() ) : ?>

        <div class="works-box">

           <?php
          //記事数ぶんループ
          while ( have_posts() ) :
          the_post(); ?>

          <a href="<?php the_permalink(); //記事のリンクを表示 ?>">
          <div class="work-img"></div>
           <div class="wbp">
             <p class="txtl"><?php the_excerpt(); //抜粋を表示 ?></p>
           </div>
          </a>


          <?php endwhile; ?>
          </div><!-- /entries -->
          <?php endif; ?>

    </div>

    <a href="<?php echo esc_url( home_url() ); ?>/Works" class="btn works-btn">More</a>
  </div>
</section>

<!-- contact -->

<section class="contact">
   <div class="inner">
      <h2>Contact</h2>
      <div class="contact-in">
        <p>制作の依頼・ご相談などお気軽にお問い合わせください。</p>
        <p>twitterのDMからでもお待ちしております。</p>
        <a href="https://twitter.com/masashi04353004"><i class="fab fa-twitter"></i></a>
      </div>
      <a href="<?php echo esc_url( home_url() ); ?>/Contact" class="contact-a btn">Contact</a>

   </div>
</section>

<!-- top -->

<section class="top">
<a href="#"><i class="fa fa-sort-up"></i></a>
</section>

<?php get_footer(); ?>