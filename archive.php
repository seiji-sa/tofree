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
              <?php the_post_thumbnail(); ?>
              <div class="news-page__item--txt">
                <h4 class="archive post__title"><?php the_title(); ?></h4>
                <p class="archive post__date"><?php echo get_the_date('Y.m.d'); ?></p>
                <p class="archive post__txt">
                  <?php
                  global $post; // $post変数をグローバルスコープから取得

                  // 投稿の本文を取得
                  $post_content = $post->post_content;

                  if (mb_strlen($post_content, 'UTF-8') > 100) {
                    $content = mb_substr(strip_tags($post_content), 0, 100, 'UTF-8');
                    echo $content . '…';
                  } else {
                    echo strip_tags($post_content);
                  }
                  ?>

                </p>
              </div>
            </a>
          </li>
        <?php endwhile; ?>
      <?php endif; ?>

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
  </nav>
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
