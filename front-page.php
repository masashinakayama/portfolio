<?php get_header(); ?>



<!-- main -->
  <section class="main">
    <div class="inner">
    <div class="main2">
			  <h1 class="text">MASASHI NAKAYAMA</h1>		
        <div class="shadow">
				    <div  class="viewport">
					      <h1 class="text">MASASHI NAKAYAMA</h1>
				    </div>
   			</div>
         </div>
    </div>
  </section>




<!-- skills -->

<section class="skills">
 <div class="inner">
   <h2>Skills</h2>



   <div class="skills-boxs">

   <?php if(get_field('repeat_skill')): ?>
   <?php while(the_repeater_field('repeat_skill')): ?>
       <div class="skills-box box1">
       <img src="<?php echo get_template_directory_uri() ?>/img/skill1.png" alt="ロゴの写真">
         <p class="txtl"><?php the_sub_field('skill_name'); ?></p>
         <p class="text"><?php the_sub_field('skill_nai'); ?></p>
       </div>
     <?php endwhile; ?>
     <?php endif; ?>



     <?php if(get_field('repeat_skill2')): ?>
     <?php while(the_repeater_field('repeat_skill2')): ?>
       <div class="skills-box box2">
       <img src="<?php echo get_template_directory_uri() ?>/img/skill2.png" alt="ロゴの写真">
         <p class="txtl"><?php the_sub_field('skill_name2'); ?></p>
         <p class="text"><?php the_sub_field('skill_nai2'); ?></p>
       </div>
       <?php endwhile; ?>
     <?php endif; ?>


     <?php if(get_field('repeat_skill3')): ?>
     <?php while(the_repeater_field('repeat_skill3')): ?>
       <div class="skills-box box3">
       <img src="<?php echo get_template_directory_uri() ?>/img/skill3.png" alt="ロゴの写真">
         <p class="txtl"><?php the_sub_field('skill_name3'); ?></p>
         <p class="text"><?php the_sub_field('skill_nai3'); ?></p>
       </div>
       <?php endwhile; ?>
     <?php endif; ?>


   </div>



   <a href="Skills" class="btn">More</a>
 </div>
</section>












<!-- works -->

<section class="works">
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
      <a href="https://github.com/masashinakayama"><i class="fab fa-github git"></i></a>
    </div>
    <a href="<?php echo esc_url( home_url() ); ?>/Contact" class="contact-a btn">Contact</a>

 </div>
</section>





<!-- top -->

<section class="top">
<a href="#"><i class="fa fa-sort-up"></i></a>
</section>





<?php get_footer(); ?>