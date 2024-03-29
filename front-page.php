<?php 'get_header'(); ?>
<main class="front-page">
  <div class="hero">
    <div class="l-wrapper">
      <div class="hero__txt">
        <div class="hero__txt--left">
          <p>ビジョン実現の</p>
          <p>パートナー</p>
          <div class="hero__txt--left--btn">
            <a href="<?php echo 'home_url'('/'); ?>contact">contact</a>
          </div>
        </div>
        <div class="hero__txt--right">
          <p>CONSULTING</p>
        </div>
      </div>
    </div>
  </div>
  <section id="about" class="about">
    <h2 class="sec-title">about</h2>
    <div class="l-wrapper sec-container">
      <div class="sec-img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/AdobeStock_463369910.png" alt="" width="550" height="354">
      </div>
      <div class="sec-txt">
        <p class="sec-txt__head">
          東フリコンサルはクライアントと<br />
          二人三脚でのお仕事を徹底しています。
        </p>
        <p class="sec-txt__txt">
          プロジェクトに必要なスキルセットを持つフリーランスプロフェッショナルを厳選し、貴社のビジョンを実現するお手伝いをします。
        </p>
        <a class="sec-txt__btn" href="<?php echo 'home_url'('/'); ?>about">私たちについてもっと詳しく ></a>
      </div>
    </div>
  </section>
  <section id="service" class="service">
    <h2 class="sec-title">service</h2>
    <div class="l-wrapper sec-container">
      <div class="sec-img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/AdobeStock_463369910.png" alt="" />
      </div>
      <div class="sec-txt">
        <p class="sec-txt__head">
          貴社の必要とす人材を見極め<br />
          効率の良い事業運営をお助けします。
        </p>
        <p class="sec-txt__txt">
          プロジェクトに必要なスキルを持つフリーランス専門家をご紹介。
          柔軟なリソース活用とコスト効率を実現します。
        </p>
        <a class="sec-txt__btn" href="<?php echo 'home_url'('/'); ?>service">サービスについてもっと詳しく ></a>
      </div>
    </div>
  </section>
  <section id="news" class="news">
    <h2 class="sec-title">news</h2>
    <div class="l-wrapper">
      <ul class="news__list">
        <?php if ('have_posts'()) : while ('have_posts'()) : the_post(); ?>
            <li class="news__item">
              <a href="<?php 'the_permalink'(); ?>"><span class="news__item_date"><?php echo get_the_date('Y.m.d'); ?></span>
                <p class="news__item_txt">
                  <?php the_title(); ?>
                </p>
              </a>
            </li>
          <?php endwhile; ?>
        <?php endif; ?>
      </ul>
      <div class="news-btn"><a href="<?php echo 'home_url'('/'); ?>news">他の記事を読む</a></div>
    </div>
  </section>

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
