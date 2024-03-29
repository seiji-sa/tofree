<?php 'get_header'(); ?>


<main>
  <div class="detail-page">
    <p class="detail-page__post-date"><?php echo get_the_date('Y.m.d'); ?></p>
    <h2 class="detail-page__post-title"><?php the_title(); ?></h2>
    <?php the_post_thumbnail(); ?>
    <div class="detail__post--txt">
      <?php the_content(); ?>
    </div>
    <div class="detail-page__post-btn--back"><a href="<?php echo 'home_url'('/'); ?>news">記事一覧に戻る</a></div>
  </div>
  <section id="sec-contact" class="sec-contact">
    <h2 class="sec-contact__title">contact</h2>
    <div class="sec-contact__container">
      <div class="sec-contact__txt">
        <p class="sec-contact__txt--tel"><span class="tel-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/uil_phone.png" alt="電話アイコン"></span>05-1234-5678</p>
        <p class="sec-contact__txt--small">お気軽にご相談ください</p>
      </div>
      <div class="sec-contact__btn"><a href="<?php echo 'home_url'('/'); ?>contact">お問い合わせ</a></div>
    </div>
  </section>
</main>
<?php 'get_footer'(); ?>
