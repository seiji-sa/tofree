<?php get_header(); ?>

<main class="about-page">
  <h2 class="page-title">About</h2>
  <section id="philosophy" class="philosophy">
    <h3 class="sec-title">企業理念</h3>
    <div class="l-wrapper">
      <img class="philosophy-img" src="<?php echo get_template_directory_uri(); ?>/img/misson-items.png" alt="クライアント思考・革新と成長・専門知識と洞察力の３つの画像" width="800" height="721">
    </div>
  </section>
  <section id="greeting" class="greeting">
    <h3 class="sec-title">代表挨拶</h3>
    <div class="l-wrapper greeting-container">
      <div class="greeting-img">
        <img src="<?php echo get_template_directory_uri(); ?>/img/AdobeStock_463369910.png" alt="代表の人物画像" / width="486" height="335">
      </div>
      <div class="greeting-txt">
        <p>
          私たちの強みは、経験豊かな専門家チームと綿密な調査・分析に基づく戦略立案です。お客様のビジョンと目標を共有し、最適な戦略を共に創り上げます。そして、その戦略を実現に向けてお手伝いし、成功へと導きます。私たちは経営のパートナーとして、お客様の成長と成功を全力でサポートします。協力し、共に目標を達成しましょう。どうぞお気軽にご相談ください。
        </p>
      </div>
    </div>
  </section>
  <section id="profile" class="profile">
    <h3 class="sec-title">会社概要</h3>
    <div class="l-wrapper profile-container">
      <table>
        <tbody>
          <tr>
            <th>会社名</th>
            <td>東フリコンサルティング</td>
          </tr>
          <tr>
            <th>代表者名</th>
            <td>山田 太郎</td>
          </tr>
          <tr>
            <th>事業内容</th>
            <td>人材紹介、経営コンサルティング</td>
          </tr>
          <tr>
            <th>住所</th>
            <td>東京都中央区1丁目1番1号</td>
          </tr>
          <tr>
            <th>資本金</th>
            <td>100万円</td>
          </tr>
          <tr>
            <th>設立年月日</th>
            <td>2023年1月1日</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
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
<?php get_footer(); ?>
