<?php 'get_header'(); ?>

<main class="contact-page">
  <div class="contact-wrap">
    <h2 class="contact-page__title">お問い合わせ</h2>
    <form action="#" method="post">
      <dt>
        <label for="name">お名前</label>
      </dt>
      <dd>
        <input type="text" />
      </dd>
      <dt>
        <label for="hurigana">フリガナ</label>
      </dt>
      <dd>
        <input type="text" />
      </dd>
      <dt>
        <label for="mail">メールアドレス</label>
      </dt>
      <dd>
        <input type="text" />
      </dd>
      <dt>
        <label for="message">お問い合わせ内容</label>
      </dt>
      <dd>
        <textarea name="message"></textarea>
      </dd>
      <div class="sub-btn">
        <input type="submit" value="送信する" />
      </div>
    </form>
  </div>
</main>
<?php 'get_footer'(); ?>
