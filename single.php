<?php 'get_header'(); ?>


<main>
  <div class="detail-page">
    <p class="post-date"><?php echo get_the_date('Y.m.d'); ?></p>
    <h2 class="post-title"><?php the_title(); ?></h2>
    <?php the_post_thumbnail(); ?>
    <!-- <div class="post-img"><img src="<?php echo get_template_directory_uri(); ?>/img/AdobeStock_463369910.png" alt=""></div> -->
    <div class="detail__post--txt">
      <?php the_content(); ?>
    </div>
    <!-- <ul class="detail-page__list">
      <li class="detail-page__item">
        <h3>プロジェクトマッチングプラットフォーム</h3>
        <p>フリーランスとプロジェクトオーナーを結びつけるオンラインプラットフォームです。クライアントはプロジェクトの詳細を投稿し、適切なスキルセットを持つフリーランスを見つけることができます。</p>
      </li>
      <li class="detail-page__item">
        <h3>プロフェッショナルデベロップメント</h3>
        <p>フリーランスの専門スキルを向上させるためのトレーニングとリソースを提供します。オンラインコース、ワークショップ、専門家によるアドバイスなどを通じて、フリーランスは自己成長できます。</p>
      </li>
      <li class="detail-page__item">
        <h3>契約管理ツール</h3>
        <p>契約の作成、署名、請求書の送付、支払いの追跡などを効率的に行うための契約管理ツールを提供します。これにより、フリーランスはプロジェクトの管理と支払い処理を容易に行えます。</p>
      </li>
    </ul> -->
    <div class="post-btn_back"><a href="<?php echo 'home_url'('/'); ?>news">記事一覧に戻る</a></div>
  </div>
  <section id="contact" class="contact">
    <h2 class="contact__sec-title">contact</h2>
    <div class="contact-container">
      <div class="contact__txt">
        <p class="contact__txt-tel"><span class="tel-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/uil_phone.png" alt="電話アイコン"></span>05-1234-5678</p>
        <p class="contact__txt-small">お気軽にご相談ください</p>
      </div>
      <div class="contact__btn"><a href="<?php echo 'home_url'('/'); ?>contact">お問い合わせ</a></div>
    </div>
  </section>
</main>
<?php 'get_footer'(); ?>
