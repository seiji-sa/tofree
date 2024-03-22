$(".openbtn1").on("click", function () {
  $(this).toggleClass('active');
});


$('.slider').slick({
  autoplay: true, // 自動的に動き出すか。初期値はfalse。
  infinite: true, // スライドをループさせるかどうか。初期値はtrue。
  speed: 500, // スライドのスピード。初期値は300。
  slidesToShow: 3, // 画面に3枚のスライドを表示
  slidesToScroll: 1, // 1回のスクロールで1枚のスライドを移動
  prevArrow: '<div class="slick-prev"></div>', // 矢印部分「前へ」のHTMLを変更
  nextArrow: '<div class="slick-next"></div>', // 矢印部分「次へ」のHTMLを変更
  centerMode: true, // 要素を中央ぞろえにする
  variableWidth: true, // 幅の違う画像の高さを揃えて表示
  dots: true // 下部ドットナビゲーションの表示
});




