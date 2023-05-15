$('.class,id名').slick({
    autoplay: false,//自動的に動き出すか。初期値はfalse
    autoplaySpeed: 3000,//次のスライドに切り替わる待ち時間
    speed:1000,//スライドの動きのスピード。初期値は300
    infinite: true,//スライドをループさせるかどうか。初期値はtrue
    slidesToShow: 1,//スライドを画面に1枚見せる
    slidesToScroll: 1,//1回のスクロールで枚の写真を移動して見せる
    arrows: true,//左右の矢印あり。初期値はtrue
    prevArrow: '<div class="slick-prev"></div>',//矢印部分PreviewのHTMLを変更
    nextArrow: '<div class="slick-next"></div>',//矢印部分NextのHTMLを変更
    dots: true,//下部ドットナビゲーションの表示
    pauseOnFocus: false,//フォーカスで一時停止を無効
    pauseOnHover: false,//マウスホバーで一時停止を無効
    pauseOnDotsHover: false,//ドットナビゲーションをマウスホバーで一時停止を無効
});

//スマホ用：スライダーをタッチしても止めずにスライドをさせたい場合
$('.class,id名').on('touchmove', function(event, slick, currentSlide, nextSlide){
$('.class,id名').slick('slickPlay');
});



// ここから編集
$("#main-slider").slick({
    asNavFor:"#text-slider",//同期させる
    autoplay: true,
    autoplaySpeed: 4000,
    speed:1000, //1000
    pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,
})
$("#text-slider").slick({
    draggable:false,
    arrows:false,   
    autoplay: true,
    autoplaySpeed: 4000,
    speed:1000,
    pauseOnFocus: false,
    pauseOnHover: false,
    pauseOnDotsHover: false,
})



// More information about this technique/pen:
// https://medium.com/@electerious/parallax-scrolling-with-js-controlled-css-variables-63cfe96820c7#.o1kkd4cte









  
