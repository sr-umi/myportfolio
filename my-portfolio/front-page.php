<?php get_header();?>

    <main>
        <section class="sec-1">
            <div class="video-top">
                <video class="first-video" src="<?php echo get_template_directory_uri(); ?>/video/first-view.mp4" autoplay loop muted playsinline></video>
            </div>
            <div class="catchcopy">
                <h2>これまでの歩み。
                    <p>0から1へ</p>
                    <span>Progress so far, 0 to 1</span>
                </h2>
                
            </div>
        </section>
            
        <section class="sec-2">
            <div class="container">
            <div id="double-slider" class="double-slider">
                <div id="main-slider" class="main-slider">
                    <div class="img-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/recipe.jpg">
                    </div>
                    <div class="img-wrap">
                        <img src="<?php echo get_template_directory_uri(); ?>/images/shirts.jpg">
                    </div>
                    <div class="img-wrap">                   
                        <img src="<?php echo get_template_directory_uri(); ?>/images/cafe-view.jpg">
                    </div>
                </div>
                <div id="text-slider" class="text-slider">
                    <div class="txt">
                        <p class="site-name"><span>サイト名:</span>Recipe</p>
                        <p class="site-time"><span>制作時間:</span>約17時間</p>
                        <p class="site-point">
                            <span>大変だった点:</span>
                            1番最初に作った作品で、どのように書いていいかイメージが湧かずに
                            全部苦労した。<br>
                            この作品でたくさん検証を使ったので検証の使い方を覚えた。
                        </p>
                    </div>
                    <div class="txt">
                        <p class="site-name"><span>サイト名:</span>Clothes</p>
                        <p class="site-time"><span>制作時間:</span>約15時間</p>
                        <p class="site-point">
                            <span>大変だった点:</span>
                            まず疑似要素というものを知らなかったので、
                            navの下線を疑似要素という発想がなかった。<br>
                            あと、cssもグチャグチャで修正したいときに、
                            どこか分からなくなっていた。
                        </p>
                    </div>
                    <div class="txt">
                        <p class="site-name"><span>サイト名:</span>Cafe</p>
                        <p class="site-time"><span>制作時間:</span>約10時間</p>
                        <p class="site-point">
                            <span>大変だった点:</span>
                            HTML,CSSをわかりやすく書くように意識した。<br>
                            デモサイトのやつに出来るだけ近づけ、少しだけ遊び心を付け加えました。
                        </p>
                    </div>
                </div>
            </div>
        </div>
        </section>
    </main>

<?php get_footer();?>