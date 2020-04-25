<?php get_header(); ?>

  




<!-- single -->

<section class="single">
  <div class="inner">


  <?php 
      if ( have_posts() ) :
          while ( have_posts() ) : the_post();
      ?>


<h2><?php the_title(); ?></h2>


       <div class="single-box">


         <div class="single-left">

         <?php
if (has_post_thumbnail() ) {
// アイキャッチ画像が設定されてれば大サイズで表示
the_post_thumbnail('large');
} else {
// なければnoimage画像をデフォルトで表示
echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="">';
}
?>
  
         </div>


         <?php if(get_field('repeat_work')): ?>
         <?php while(the_repeater_field('repeat_work')): ?>


         <div class="single-right">

              <p class="txtl"><?php the_sub_field('work_title'); ?></p>
              <p><a href="<?php the_sub_field('work_link'); ?>" class="site">
              <?php the_sub_field('work_link_text'); ?></a></p>
              <p class="gai-txt"><?php the_sub_field('work_nai'); ?></p>
              <p><?php the_sub_field('work_person'); ?></p>
              <p><?php the_sub_field('work_date'); ?></p>
              <p><?php the_sub_field('work_res'); ?></p>
              <p><?php the_sub_field('work_language'); ?></p>
              <p><?php the_sub_field('work_coding'); ?></p>
      
         </div>

         <?php endwhile; ?>
         <?php endif; ?>   


       </div>


       <?php 
          endwhile;
      endif;
      ?>

  </div>
</section>





<!-- 関連のアイキャッチの表示 -->




<h2 class="center">Other Project</h2>
<div class="works-boxs-new">

<?php if( has_category() ) {
$post_cats = get_the_category();
$cat_ids = array();
//所属カテゴリーのIDリストを作っておく
foreach($post_cats as $cat) {
$cat_ids[] = $cat->term_id;
}
}

$myposts = get_posts( array(
  'post_type' => 'post', // 投稿タイプ
  'posts_per_page' => '2', // 2件を取得
  'post__not_in' => array( $post->ID ),// 表示中の投稿を除外
  'category__in' => $cat_ids, // この投稿と同じカテゴリーに属する投稿の中から
  'orderby' => 'rand' // ランダムに
  ) );

  if( $myposts ): ?>



<?php foreach($myposts as $post): setup_postdata($post);?>
<div class="works-box-new wbox1">

<a href="<?php the_permalink(); //記事のリンクを表示 ?>">
           <!--<img src="<?php echo get_template_directory_uri() ?>/img/work.png" alt="実績の写真" width="250" height="200">-->

           <?php
if (has_post_thumbnail() ) {
// アイキャッチ画像が設定されてればミディアムサイズで表示
the_post_thumbnail('thumbnail');
} else {
// なければnoimage画像をデフォルトで表示
echo '<img src="' . esc_url(get_template_directory_uri()) . '/img/noimg.png" alt="" width="150" height="150">';
}
?>
<div class="wbp-new">
     <p class="txtl">関連</p>
</div>

</a>
</div>
<?php endforeach; wp_reset_postdata(); ?>

        <!--<a href="work2"><div class="works-box-new wbox2">
           <img src="<?php echo get_template_directory_uri() ?>/img/work2.png" alt="実績の写真" width="250" height="200">
           <div class="wbp-new">
             <p class="txtl">模写制作LP</p>
           </div>
        </div></a>-->

<?php endif; ?>
</div>


<!-- top -->

<section class="top">
  <a href="#"><i class="fa fa-sort-up"></i></a>
  </section>


  



<?php get_footer(); ?>