<?php get_header(); ?>
    <!---------------------mv------------------------>
    <section class="mv">
        <canvas id="canvas_wave" width="2000" height="150" class="mv__wave"></canvas>
        <video loop autoplay muted playsinline poster="<?php echo esc_url( get_theme_file_uri( "img/mv-bg.png" ) ); ?>" src="<?php echo esc_url( get_theme_file_uri( "img/mv__video.mov" ) ); ?>" class="mv__video"></video>
        <h2 class="mv__ttl">人に寄り添う<br>デザインを</h2>
    </section><!--/.kv-->
    <!---------------------messege------------------------>
    <section id="message" class="message">
        <div class="container-fluid container-fluid--message">
            <div class="message__container">
                <div class="message__image__container">
                    <img src="<?php echo esc_url( get_theme_file_uri( "img/message_img.jpg" ) ); ?>" alt="青空" class="img">
                </div>
                <div class="message__contents">
                    <h2 class="section__ttl">
                        <span class="main__ttl">Message</span>
                        <span class="sub__ttl">メッセージ</span>
                    </h2>
                    <div class="txt__area">
                        <div class="sp__image__container">
                            <img src="<?php echo esc_url( get_theme_file_uri( "img/message_img.jpg" ) ); ?>" alt="青空" class="img">
                        </div>
                        <h3 class="ttl">人に寄り添うデザイン</h3>
                        <p class="txt">デザイン･ホームページ制作にはさまざまな可能性がありますが<br class="lg__none">お客さまの想い、課題に対して寄り添い、<strong class="st">価値のある</strong>デザインが<br class="lg__none">重要だと考えています。<br>価値を正確に伝える事。利用者様が使いやすく、目的を達成できる<br class="lg__none">ことを重点の置いた制作を心がけています。</p>
                        <p class="txt txt--02">KOKYO DESIGNの<strong class="st">KOKYO(故郷)</strong>には、<strong class="st">”安心する場所”</strong>という思いを<br class="lg__none">込めております。<br class="lg__none">お客様が、安心していただけるよう丁寧で柔軟なサポートをして<br class="lg__none">いきたいと考えています。</p>
                    </div><!--/.txt__area-->
                </div><!--/.message__contents-->
            </div><!--/.message__container -->
        </div><!--/.container-fluid-->
    </section>
    <!---------------------service------------------------>
    <section id="service" class="service">
        <div class="container-fluid">
            <h2 class="section__ttl">
                <span class="main__ttl">Service</span>
                <span class="sub__ttl">サービス</span>
            </h2>
            <div class="service__container">
                <div class="service__contents">
                    <div class="contents__icon">
                        <img src="<?php echo esc_url( get_theme_file_uri( "img/service-icon1.svg" ) ); ?>" alt="CMSのアイコン" class="icon__img">
                    </div>
                    <p class="contents__ttl">CMS構築 / Wordpress</p>
                    <p class="contents__txt">更新が必要なサイトは Wordpress をご提案しています。専門的な知識や技術がなくてもデザインが崩れず簡単に更新作業ができるよう構築します。</p>
                </div><!--/.service__contents-->
                <div class="service__contents">
                    <div class="contents__icon">
                        <img src="<?php echo esc_url( get_theme_file_uri( "img/service-icon2.svg" ) ); ?>" alt="設計図のアイコン" class="icon__img">
                    </div>
                    <p class="contents__ttl">デザイン</p>
                    <p class="contents__txt">バナーやSNSのカバー、ホームページや<br class="xl__none">ランディングページのデザインを行います。お客様のご要望･コンセプト等をヒアリングさせて頂き、デザインを作成いたします。</p>
                </div><!--/.service__contents-->
                <div class="service__contents">
                    <div class="contents__icon">
                        <img src="<?php echo esc_url( get_theme_file_uri( "img/service-icon3.svg" ) ); ?>" alt="PCのアイコン" class="icon__img">
                    </div>
                    <p class="contents__ttl">コーポレートサイト制作</p>
                    <p class="contents__txt">会社のイメージを重視しながら会社概要やお知らせの掲載、所在地地図の設置などに対応します。企業様がお持ちの価値を正確に伝えるサイトを制作します。</p>
                </div><!--/.service__contents-->
                <div class="service__contents">
                    <div class="contents__icon">
                        <img src="<?php echo esc_url( get_theme_file_uri( "img/service-icon4.svg" ) ); ?>" alt="テキストのアイコン" class="icon__img">
                    </div>
                    <p class="contents__ttl">ランディングページ制作</p>
                    <p class="contents__txt">サービスや商品の魅力をストーリーで<br class="xl__none">伝える、ランディングページを制作します。商品価値を分かりやすく伝え、<br class="xl__none">問い合わせに結びつきやすくします。</p>
                </div><!--/.service__contents-->
                <div class="service__contents">
                    <div class="contents__icon">
                        <img src="<?php echo esc_url( get_theme_file_uri( "img/service-icon5.svg" ) ); ?>" alt="キーボードのアイコン" class="icon__img">
                    </div>
                    <p class="contents__ttl">コーディング</p>
                    <p class="contents__txt">コーディングのみの対応も行っております。デザインカンプから、第三者にも<br class="xl__none">メンテナンスしやすく、見やすい汎用的なマークアップを行います。</p>
                </div><!--/.service__contents-->
                <div class="service__contents">
                    <div class="contents__icon">
                        <img src="<?php echo esc_url( get_theme_file_uri( "img/service-icon6.svg" ) ); ?>" alt="名刺のアイコン" class="icon__img">
                    </div>
                    <p class="contents__ttl">その他デザイン</p>
                    <p class="contents__txt">ウェブ媒体のみではなく、ポスターや<br class="xl__none">チラシ、名刺などのデザインも承って<br class="xl__none">おりますのでお気軽にご依頼ください。</p>
                    <a href="<?php echo esc_url(get_permalink( 8 )); ?>" class="more__btn">
                        <p class="btn__txt">お問い合わせへ</p>
                    </a>
                </div><!--/.service__contents-->
            </div><!--/.service__container-->
        </div><!--/.container-fluid-->
    </section>
    <!---------------------works------------------------>
    <section id="works" class="works">
        <div class="container-fluid">
            <h2 class="section__ttl">
                <span class="main__ttl">Works</span>
                <span class="sub__ttl">実績</span>
            </h2>
            <div class="swiper-container works__wrapper">
                <div class="works__slider__btn-area">
                    <div class="swiper-button-prev slider__btn slider__btn--prev"></div>
                    <div class="swiper-button-next slider__btn slider__btn--next"></div>
                </div>
                <div class="swiper-wrapper works__container">
                    <a href="#works1" class="swiper-slide works__contents modal__open">
                        <p class="contents__image"><img src="<?php echo esc_url( get_theme_file_uri( "img/product01.png" ) ); ?>" alt="実績PC画面"></p>
                        <p class="contents__ttl">コーポレートサイト</p>
                        <p class="contents__txt02">Design / Cording / Wordpress</p>
                    </a><!--/.swiper-slide works__contents-->
                    <a href="#works2" class="swiper-slide works__contents modal__open">
                        <p class="contents__image"><img src="<?php echo esc_url( get_theme_file_uri( "img/product02.png" ) ); ?>" alt="実績PC画面"></p>
                        <p class="contents__ttl">ポートフォリオサイト</p>
                        <p class="contents__txt02">Design / Cording / Wordpress</p>
                    </a><!--/.swiper-slide works__contents-->
                    <a href="#works3" class="swiper-slide works__contents modal__open">
                        <p class="contents__image"><img src="<?php echo esc_url( get_theme_file_uri( "img/product03.png" ) ); ?>" alt="実績PC画面"></p>
                        <p class="contents__ttl">コーポレートサイト</p>
                        <p class="contents__txt02">Design / Cording / Wordpress</p>
                    </a><!--/.swiper-slide works__contents-->
                </div><!--/.swiper-wrapper works__container-->
            </div><!--/.swiper-container works__wrapper-->
        </div><!--/.container-fluid-->
    </section>
    <!--POPUP WORKS1-->
    <section id="works1" class="works__popup">
        <div class="container-fluid works__popup__container">
            <div class="head">
                <p class="sub__ttl">Website</p>
                <h2 class="ttl">コーポレートサイト</h2>
            </div>
            <div class="works__contents">
                <table class="contents__tb">
                    <tr>
                        <th>In charge</th>
                        <td>Design / Cording / Wordpress</td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td>2020/12</td>
                    </tr>
                </table>
                <p class="contents__txt01">コーポレートサイトの制作を行いました。”ワクワクする・クリエイティブ”をコンセプトにデザインから設計、商品の一覧ページも構築させていただきました。</p>
            </div>
            <div class="web__img__container">
                <img src="<?php echo esc_url( get_theme_file_uri( "img/works_brightlink.jpg" ) ); ?>" alt="制作物の画像" class="img">
            </div>
            <div class="sp__img__wrapper">
                <p class="img__container"><img src="<?php echo esc_url( get_theme_file_uri( "img/brightlink_sp1.png" ) ); ?>" alt="制作物の画像" class="img"></p>
                <p class="img__container"><img src="<?php echo esc_url( get_theme_file_uri( "img/brightlink_sp2.png" ) ); ?>" alt="制作物の画像" class="img"></p>
                <p class="img__container"><img src="<?php echo esc_url( get_theme_file_uri( "img/brightlink_sp3.png" ) ); ?>" alt="制作物の画像" class="img"></p>
            </div><!--/.sp__img__wrapper-->
            <p class="contact__txt01">制作物に興味のある方は下記からお問い合わせください。</p>
            <a href="<?php echo esc_url(get_permalink( 8 )); ?>" class="more__btn">
                <p class="btn__txt">お問い合わせへ</p>
            </a>
        </div><!--/.container-fluid-->
    </section>
    <!--POPUP WORKS2-->
    <section id="works2" class="works__popup">
        <div class="container-fluid works__popup__container">
            <div class="head">
                <p class="sub__ttl">Portfolio</p>
                <h2 class="ttl">ポートフォリオ</h2>
            </div>
            <div class="works__contents">
                <table class="contents__tb">
                    <tr>
                        <th>In charge</th>
                        <td>Design / Cording / Wordpress</td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td>2020/11</td>
                    </tr>
                </table>
                <p class="contents__txt01">ポートフォリオサイトを作成しました。風景画が好きで、素材を活かすためシンプルなテイストで作成しました。訪れてくれた方が迷わないサイトをコンセプトにして構築しました。</p>
            </div>
            <div class="web__img__container">
                <img src="<?php echo esc_url( get_theme_file_uri( "img/works_kokyodesign.jpg" ) ); ?>" alt="制作物の画像" class="img">
            </div>
            <div class="sp__img__wrapper">
                <p class="img__container"><img src="<?php echo esc_url( get_theme_file_uri( "img/kokyodesign_sp1.png" ) ); ?>" alt="制作物の画像" class="img"></p>
                <p class="img__container"><img src="<?php echo esc_url( get_theme_file_uri( "img/kokyodesign_sp2.png" ) ); ?>" alt="制作物の画像" class="img"></p>
                <p class="img__container"><img src="<?php echo esc_url( get_theme_file_uri( "img/kokyodesign_sp3.png" ) ); ?>" alt="制作物の画像" class="img"></p>
            </div><!--/.sp__img__wrapper-->
            <p class="contact__txt01">制作物に興味のある方は下記からお問い合わせください。</p>
            <a href="<?php echo esc_url(get_permalink( 8 )); ?>" class="more__btn">
                <p class="btn__txt">お問い合わせへ</p>
            </a>
        </div><!--/.container-fluid-->
    </section>
    <!--POPUP WORKS3-->
    <section id="works3" class="works__popup">
        <div class="container-fluid works__popup__container">
            <div class="head">
                <p class="sub__ttl">Website</p>
                <h2 class="ttl">コーポレートサイト</h2>
            </div>
            <div class="works__contents">
                <table class="contents__tb">
                    <tr>
                        <th>In charge</th>
                        <td>Design / Cording / Wordpress</td>
                    </tr>
                    <tr>
                        <th>Date</th>
                        <td>2021/1</td>
                    </tr>
                </table>
                <p class="contents__txt01">コーポレートサイトの制作を行いました。イラストを使用したＰＯＰなデザインをベースに、分かりやすいサイト設計を心掛けました。</p>
            </div>
            <div class="web__img__container">
                <img src="<?php echo esc_url( get_theme_file_uri( "img/works_proudup.jpg" ) ); ?>" alt="制作物の画像" class="img">
            </div>
            <div class="sp__img__wrapper">
                <p class="img__container"><img src="<?php echo esc_url( get_theme_file_uri( "img/proudup_sp1.png" ) ); ?>" alt="制作物の画像" class="img"></p>
                <p class="img__container"><img src="<?php echo esc_url( get_theme_file_uri( "img/proudup_sp2.png" ) ); ?>" alt="制作物の画像" class="img"></p>
                <p class="img__container"><img src="<?php echo esc_url( get_theme_file_uri( "img/proudup_sp3.png" ) ); ?>" alt="制作物の画像" class="img"></p>
            </div><!--/.sp__img__wrapper-->
            <p class="contact__txt01">制作物に興味のある方は下記からお問い合わせください。</p>
            <a href="<?php echo esc_url(get_permalink( 8 )); ?>" class="more__btn">
                <p class="btn__txt">お問い合わせへ</p>
            </a>
        </div><!--/.container-fluid-->
    </section>
    <!---------------------price------------------------>
    <section id="price" class="price">
        <div class="container-fluid">
            <div class="price__detail">
                <h2 class="section__ttl">
                    <span class="main__ttl">Price</span>
                    <span class="sub__ttl">価格</span>
                </h2>
                <div class="price__container">
                    <div class="price__image">
                        <img src="<?php echo esc_url( get_theme_file_uri( "img/price_img.jpg" ) ); ?>" alt="夕焼け">
                    </div>
                    <div class="price__inner">
                        <div class="price__contents">
                            <p class="contents__ttl">Web Site</p>
                            <div class="contents__list">
                                <p class="list__ttl">ホームページ制作(デザイン含)</p>
                                <p class="list__price">&yen;70,000~</p>
                            </div><!--/.price__list-->
                            <div class="contents__list">
                                <p class="list__ttl">CMS(Wordpress)構築</p>
                                <p class="list__price">&yen;50,000~</p>
                            </div><!--/.price__list-->
                            <div class="contents__list">
                                <p class="list__ttl">ランディングページ制作<br class="sm__block">(デザイン含)</p>
                                <p class="list__price">&yen;50,000~</p>
                            </div><!--/.contents__list-->
                        </div><!--/.price__contents-->
                        <div class="price__contents">
                            <p class="contents__ttl">Design</p>
                            <div class="contents__list">
                                <p class="list__ttl">TOPページデザイン</p>
                                <p class="list__price">&yen;25,000~</p>
                            </div><!--/.contents__list-->
                            <div class="contents__list">
                                <p class="list__ttl">下層ページデザイン</p>
                                <p class="list__price">&yen;15,000~</p>
                            </div><!--/.contents__list-->
                            <div class="contents__list">
                                <p class="list__ttl">チラシデザイン</p>
                                <p class="list__price">&yen;20,000~</p>
                            </div><!--/.contents__list-->
                            <div class="contents__list">
                                <p class="list__ttl">バナーデザイン</p>
                                <p class="list__price">&yen;6,000~</p>
                            </div><!--/.contents__list-->
                            <div class="contents__list">
                                <p class="list__ttl">ロゴデザイン</p>
                                <p class="list__price">&yen;20,000~</p>
                            </div><!--/.contents__list-->
                            <div class="contents__list">
                                <p class="list__ttl">名刺デザイン</p>
                                <p class="list__price">&yen;12,000~</p>
                            </div><!--/.contents__list-->
                        </div><!--/.price__contents-->
                        <div class="price__contents">
                            <p class="contents__ttl">Coding</p>
                            <div class="contents__list">
                                <p class="list__ttl">TOPページコーディング(HP･LP)</p>
                                <p class="list__price">&yen;15,000~</p>
                            </div><!--/.contents__list-->
                            <div class="contents__list">
                                <p class="list__ttl">下層ページコーディング</p>
                                <p class="list__price">&yen;10,000~</p>
                            </div><!--/.contents__list-->
                        </div><!--/.price__contents-->
                        <div class="price__attention">
                            <p class="attention__mark">&#x203B;</p>
                            <div class="attention__contents">
                                <p class="txt01">WEBサイト制作はすべてレスポンシブ対応  動作確認テスト後、サーバーへの設置まで行います</p>
                                <p class="txt01">コードはSEO、文法を重視して修正しやすいマークアップをします</p>
                                <p class="txt01">デザインの修正はご納得頂けるまで無制限で行いますがサイト構築段階での修正は別途費用が掛かります</p>
                                <p class="txt01">既存ホームページのリニューアルも対応可能ですのでお気軽にお問合せ下さい</p>
                            </div><!--/.attention__contents-->
                        </div>
                    </div><!--/.price__inner-->
                    <a href="#flow" class="more__btn modal__open">
                        <p class="btn__txt">ホームページ制作の流れ</p>
                    </a>
                </div><!--/.price__container-->
            </div><!--/.price__detail-->
        </div><!--/.container-fluid-->
    </section>
    <!--------------FLOW POPUP------------->
    <section id="flow" class="flow__popup">
        <div class="container-fluid">
            <div class="popup__overlay">
                <div class="popup__container popup__container--flow">
                    <div class="popup__contents popup__contents--flow">
                        <div class="popup__header">
                            <h3 class="flow__ttl">ホームページ制作の流れ</h3>
                            <div class="modal__close popup__close popup__close--flow"></div>
                        </div><!--/.modal__header-->
                        <div class="flow__container">
                            <p class="flow__number">01</p>
                            <div class="flow__contents">
                                <div class="ttl__contents">
                                    <p class="icon__container">
                                        <img src="<?php echo esc_url( get_theme_file_uri( "img/popup-icon1.svg" ) ); ?>" alt="メールのアイコン" class="icon">
                                    </p>
                                    <p class="ttl">お問い合わせ</p>
                                </div><!--/.ttl__contents-->
                                <div class="txt__contents">
                                    <p class="txt01"><a href="<?php echo esc_url(get_permalink( 8 )); ?>" class="contact__link">お問い合わせフォーム</a>からお問い合わせください。<br>ご要望(ホームページを新しくしたい・リニューアルしたい、デザイン･コーディングのみ依頼したい、とりあえず一度相談してみたい...etc)をお問い合わせ内容に記載いただき送信ください。原則24時間以内に内容を確認させていただき、ご返信いたします。</p>
                                </div>
                            </div><!--/.flow__contents-->
                        </div><!--/.flow__container-->
                        <div class="flow__container">
                            <p class="flow__number">02</p>
                            <div class="flow__contents">
                                <div class="ttl__contents">
                                    <p class="icon__container">
                                        <img src="<?php echo esc_url( get_theme_file_uri( "img/popup-icon2.svg" ) ); ?>" alt="吹き出しのアイコン" class="icon">
                                    </p>
                                    <p class="ttl">打ち合わせ</p>
                                </div><!--/.ttl__contents-->
                                <div class="txt__contents">
                                    <p class="txt01">ミーティングアプリ(Zoom/Google Meet)を使用したテレビ電話にて打ち合わせさせていただきます。お客様のご要望をお聞かせください。もちろんメールやslackでの打ち合わせも可能です。原則オンラインでの打ち合わせになりますが千葉県内、都内であれば日程を調整させていただき、直接打ち合わせも可能です。</p>
                                </div>
                            </div><!--/.flow__contents-->
                        </div><!--/.flow__container-->
                        <div class="flow__container">
                            <p class="flow__number">03</p>
                            <div class="flow__contents">
                                <div class="ttl__contents">
                                    <p class="icon__container icon__container--03">
                                        <img src="<?php echo esc_url( get_theme_file_uri( "img/popup-icon3.svg" ) ); ?>" alt="テキストのアイコン" class="icon">
                                    </p>
                                    <p class="ttl">お見積り書･納品スケジュール作成</p>
                                </div><!--/.ttl__contents-->
                                <div class="txt__contents">
                                    <p class="txt01">お伺いしたご要望をまとめ、お見積り書と納品までのスケジュールをまとめてメールにて送信いたします。内容をご確認いただき、ご承諾いただけましたら契約成立とさせて頂き制作に着手します。</p>
                                </div>
                            </div><!--/.flow__contents-->
                        </div><!--/.flow__container-->
                        <div class="flow__container">
                            <p class="flow__number">04</p>
                            <div class="flow__contents">
                                <div class="ttl__contents">
                                    <p class="icon__container icon__container--04">
                                        <img src="<?php echo esc_url( get_theme_file_uri( "img/popup-icon4.svg" ) ); ?>" alt="パレット" class="icon">
                                    </p>
                                    <p class="ttl">デザイン作成</p>
                                </div><!--/.ttl__contents-->
                                <div class="txt__contents">
                                    <p class="txt01">お客様から伺ったご要望を基に、トップページデザインを作成します。出来るかぎり、どんなイメージにしたいか、色合いなどをヒアリングさせていただき相違がないようデザインしていきます。作成後、ご確認いただきます。(イメージと違ったなどありましたら再度作成し直します)</p>
                                </div>
                            </div><!--/.flow__contents-->
                        </div><!--/.flow__container-->
                        <div class="flow__container">
                            <p class="flow__number">05</p>
                            <div class="flow__contents">
                                <div class="ttl__contents">
                                    <p class="icon__container">
                                        <img src="<?php echo esc_url( get_theme_file_uri( "img/popup-icon5.svg" ) ); ?>" alt="PCのアイコン" class="icon">
                                    </p>
                                    <p class="ttl">コーディング･サイト構築･テスト</p>
                                </div><!--/.ttl__contents-->
                                <div class="txt__contents">
                                    <p class="txt01">デザイン確定後、WEBサイトに表示されるようコーディング･プログラミング作業を進め、サイトを構築いたします。完成後、テスト用にパスワードを設定して仮公開します。テストをして、お客さまにもご確認いただき細かい修正をいたします。       </p>
                                </div>
                            </div><!--/.flow__flow__contents-->
                        </div><!--/.flow__contents-->
                        <div class="flow__container">
                            <p class="flow__number">06</p>
                            <div class="flow__contents">
                                <div class="ttl__contents">
                                    <p class="icon__container">
                                        <img src="<?php echo esc_url( get_theme_file_uri( "img/popup-icon6.svg" ) ); ?>" alt="目的地のアイコン" class="icon">
                                    </p>
                                    <p class="ttl">納品(本番へアップロード･公開)</p>
                                </div><!--/.ttl__contents-->
                                <div class="txt__contents">
                                    <p class="txt01">テスト･修正後、本番サーバーへアップロードを行います。問題がないかチェックを行い、納品完了とさせていただきます。その後、問題が起きたなどトラブルがあれば対応いたします。(保守やページの追加、修正などは別途費用がかかりますのでご了承ください)</p>
                                </div>
                            </div><!--/.flow__flow__contents-->
                        </div><!--/.flow__container-->
                    </div><!--/.modal__content-->
                </div><!--/.modal__container-->
            </div><!--/.modal__overlay-->
        </div><!--/.container-fluid-->
    </section>
    <!---------------------profile------------------------>
    <section class="profile">
        <div class="container-fluid profile__cotainer">
            <div class="profile__image__container">
                <img src="<?php echo esc_url( get_theme_file_uri( "img/profile1.jpg" ) ); ?>" alt="制作者の画像" class="img">
            </div>
            <div class="profile__detail">
                <h2 class="section__ttl">
                    <span class="main__ttl">Profile</span>
                    <span class="sub__ttl">プロフィール</span>
                </h2>
                <div class="profile__contents">
                    <p class="profile__name">
                        <span class="name__01">Ryo Sekiya</span>
                        <span class="name__02">せきや りょう</span>
                    </p>
                    <p class="profile__txt01">ウェブデザイナー<br>長野県で生まれ育ち、現在千葉県在住。<br>自然がこよなく好き。<br>営業職退職後、WEB制作会社でデザイン、<br class="md__none">コーディング、フロントエンド業務を担当<br>お客様一人ひとりにあったホームページを<br class="md__none">提案しています。</p>
                    <div class="sp__image__container">
                        <img src="<?php echo esc_url( get_theme_file_uri( "img/profile1.jpg" ) ); ?>" alt="制作者の画像" class="img">
                    </div>
                    <div class="profile__skill__container">
                        <p class="icon__container"><img src="<?php echo esc_url( get_theme_file_uri( "img/icon_xd.svg" ) ); ?>" alt="adobe xdのアイコン" class="icon"></p>
                        <p class="icon__container"><img src="<?php echo esc_url( get_theme_file_uri( "img/icon_ps.svg" ) ); ?>" alt="adobe photoshopのアイコン" class="icon"></p>
                        <p class="icon__container"><img src="<?php echo esc_url( get_theme_file_uri( "img/icon_js.svg" ) ); ?>" alt="javascriptのアイコン" class="icon"></p>
                        <p class="icon__container"><img src="<?php echo esc_url( get_theme_file_uri( "img/icon_wp.svg" ) ); ?>" alt="wordpressのアイコン" class="icon"></p>
                        <p class="icon__container icon__container--php"><img src="<?php echo esc_url( get_theme_file_uri( "img/icon_php.svg" ) ); ?>" alt="phpのアイコン" class="icon"></p>
                    </div><!--/.profile__skill__container-->
                    <a href="<?php echo esc_url(get_permalink( 10 )); ?>" class="more__btn">
                        <p class="btn__txt">詳細へ</p>
                    </a>
                </div><!--/.profile.contents-->
            </div><!--prfile__detail-->
        </div><!--container-fluid-->
    </section>
    <!---------------------contact------------------------>
    <section class="contact">
        <div class="container-fluid">
            <h2 class="section__ttl">
                <span class="main__ttl">Contact</span>
                <span class="sub__ttl">お問い合わせ</span>
            </h2>
            <div class="contactform">
                <p class="contactform__txt01">お客さまからのご相談をお問合せフォームにて受付けております。<br>以下フォームから必要事項をご記入のうえ、お問合せください。</p>
                <?php echo do_shortcode( '[contact-form-7 id="48" title="contact"]' ); ?>
            </div>
        </div><!--/.container-fluid-->
    </section>
<?php get_footer(); ?>