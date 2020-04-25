<?php get_header(); ?>

  




<!-- works -->

<section class="works-page">
<div class="inner">
  <h2>Works</h2>

  <?php $paged = get_query_var('paged'); ?>
<?php query_posts("posts_per_page=6&paged=$paged"); ?>

<?php if (have_posts()) : ?>

  <div class="works-boxs">
  <?php while(have_posts()) : the_post(); ?>

  <div class="works-box">
   <a href="<?php the_permalink(); //記事のリンクを表示 ?>">     
   <?php
             if ( has_post_thumbnail() ) {
               the_post_thumbnail( 'large' );
             }
        ?>
  <div class="wbp"><p class="txtl"><?php the_title(); //タイトルを表示 ?></p></div>
  </a>
</div>

<?php endwhile; ?>
</div>

<?php endif; ?>
<?php wp_reset_postdata(); ?>




<!-- ページネーションの表示 -->


  <?php if (paginate_links() ) : //ページが1ページ以上あれば以下を表示 ?>
    
    <!-- pagenation -->
    <div class="pagenation">
    <?php
    echo
    paginate_links(
    array(
    'end_size' => 0,
    'mid_size' => 1,
    'prev_next' => true,
    'prev_text' => '<i class="fas fa-angle-left"></i>',
    'next_text' => '<i class="fas fa-angle-right"></i>',
    )
    );
    ?>
    </div><!-- /pagenation -->
    <?php endif; ?>


  </div>
</section>




<!-- top -->

<section class="top">
  <a href="#"><i class="fa fa-sort-up"></i></a>
  </section>


  <?php get_footer(); ?>