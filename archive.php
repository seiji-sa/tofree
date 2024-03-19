<?php 'get_header'(); ?>

<main>
  <h2 class="page-title">News</h2>
  <div class="l-wrapper news-page">
    <h3 class="news-page__title">お知らせ</h3>
    <ul class="news-page__list">
      <?php if ('have_posts'()) : ?>
        <?php while (have_posts()) : the_post(); ?>
          <li class="news-page__item">
            <a href="<?php the_permalink(); ?>">
              <div class="news-page__item-img"><?php echo get_template_directory_uri(); ?></div>
              <?php the_post_thumbnail('thumbnail'); ?>
              <div class="news-page__item-txt">
                <h4 class="archive post-title"><?php the_title(); ?></h4>
                <p class="archive post-date"><?php echo get_the_date('Y.m.d'); ?></p>
                <p class="archive post-txt">
                  <?php the_content(); ?>
                </p>
              </div>
            </a>
          </li>
        <?php endwhile; ?>
      <?php endif; ?>
      <!-- <li class="news-page__item">
        <a href="single.html">
          <div class="news-page__item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/AdobeStock_463369910.png" alt=""></div>
          <div class="news-page__item-txt">
            <h4 class="archive post-title">事業拡大に伴うオフィス移転について</h4>
            <p class="archive post-date">2023.09.01</p>
            <p class="archive post-txt">事業拡大に向けてメインとなるオフィスを移転しました。
              クライアントとより近い距離で作業できるようになりました。</p>
          </div>
        </a>
      </li>
      <li class="news-page__item">
        <a href="single.html">
          <div class="news-page__item-img"><img src="<?php echo get_template_directory_uri(); ?>/img/AdobeStock_463369910.png" alt=""></div>
          <div class="news-page__item-txt">
            <h4 class="archive post-title">都から表彰状をいただきました</h4>
            <p class="archive post-date">2023.09.01</p>
            <p class="archive post-txt">顧客満足度の高さを称して、都から表彰状をいただきました。
              これからも皆様のサポートができるよう精進してまいります。</p>
          </div>

        </a>
      </li> -->
    </ul>
  </div>
  <nav aria-label="pagination">
    <?php
    $args = array(
      'mid_size' => 1, //現在のページの左右にそれぞれ表示するページ番号の数
      'prev_text' => '&lt;', //前のページへのリンクテキスト
      'next_text' => '&gt;', //後のページへのリンクテキスト
      'screen_reader_text' => ' ', //スクリーンリーダー用のテキスト
    );
    the_posts_pagination($args);
    ?>
    <!-- <ul class="page-num">
      <li>1</li>
      <li><a href="#">2</a></li>
      <li><a href="#">3</a></li>
      <li><a href="#" rel="next">…</li>
      <li><a href="#">7</a></li>
    </ul> -->
  </nav>
  <section id="contact" class="contact">
    <h2 class="contact__sec-title">contact</h2>
    <div class="contact-container">
      <div class="contact__txt">
        <p class="contact__txt-tel"><span class="tel-icon"><img src="<?php echo get_template_directory_uri(); ?>/img/uil_phone.png" alt="電話アイコン"></span>05-1234-5678</p>
        <p class="contact__txt-small">お気軽にご相談ください</p>
      </div>
      <div class="contact__btn"><a href="#">お問い合わせ</a></div>
    </div>
  </section>
</main>

<?php 'get_footer'(); ?>
