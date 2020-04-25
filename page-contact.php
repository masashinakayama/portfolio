<?php get_header(); ?>







<!-- contact-page -->

<section class="contact-page">
  <div class="inner">

  <!--<?php the_title(); ?>

  <p>制作の依頼・ご相談などお気軽にお問い合わせください。</p>-->


<?php echo do_shortcode('[contact-form-7 id="215" title="コンタクトフォーム 1"]'); ?>





  <!--<h2>contact</h2>
    <p>制作の依頼・ご相談などお気軽にお問い合わせください。</p>

    <div class="contact-page-form">
     <div class="contact-page-form-in">
       <p class="txtl">GET IN TOUCH</p>

       <input type="text" class="intxt" placeholder="お名前">

       <div data-formrun-show-if-error="メールアドレス" class="error">※メールアドレスを正しく入力してください。</div>
       <input type="text" class="intxt" placeholder="メールアドレス"  data-formrun-type="email" data-formrun-required>

       <div data-formrun-show-if-error="メールアドレス" class="error">※電話番号を正しく入力してください。</div>
       <input type="text" class="intxt" placeholder="電話番号" data-formrun-required>

       <div data-formrun-show-if-error="お問い合わせ" class="error">※お問い合わせ入力してください。</div>
       <textarea name="" id="" cols="30" rows="10" class="intxta" placeholder="お問い合わせ内容" data-formrun-required></textarea>

     </div>
     <input type="submit" class="sub-btn" data-formrun-error-text="未入力の項目があります" data-formrun-submitting-text="送信中...">-->

  </div>
</section>









<!-- top -->

<section class="top">
  <a href="#"><i class="fa fa-sort-up"></i></a>
  </section>


<?php get_footer(); ?>