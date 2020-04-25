
<?php get_header(); ?>

  




<!-- about-page -->

<section class="about-page">
  <div class="inner">

  <?php 
      if ( have_posts() ) :
          while ( have_posts() ) : the_post();
      ?>

      <h2><?php the_title(); ?></h2>
    
       <div class="about-box">
         <div class="about-left">
            <!--<img src="<?php echo get_template_directory_uri() ?>/img/work.png" alt="顔写真" width="300" height="300">-->
            <?php
                 if ( has_post_thumbnail() ) {
                the_post_thumbnail( 'large' );
               }
            ?>
         </div>


         <?php if(get_field('repeat_about')): ?>
        <?php while(the_repeater_field('repeat_about')): ?>

         <div class="about-right">


             <p class="txtl name"><?php the_sub_field('about_name'); ?></p>
             <p class="name1"><?php the_sub_field('about_prace'); ?></p>
             <p class="name1"><?php the_sub_field('about_learn'); ?></p>
             <p class="name1"><?php the_sub_field('about_hobby'); ?></p>
             <p class="name-txt txt1"><?php the_sub_field('about_sub_reki'); ?></p>
             <p class="name-txt txt3"><span class="under"><?php the_sub_field('about_reki'); ?></span></p>
             <p class="name-txt txt4"><?php the_sub_field('about_nai'); ?></p>



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




<!-- top -->

<section class="top">
  <a href="#"><i class="fa fa-sort-up"></i></a>
  </section>


  <?php get_footer(); ?>