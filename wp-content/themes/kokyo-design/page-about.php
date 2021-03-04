<?php get_header(); ?>
    <!-----------------------kv------------------------>
    <section class="kv kv--profile">
        <h2 class="kv__ttl">About</h2>
    </section><!--/.kv-->
    <!---------------------page-about------------------------>
    <section class="page-about">
        <div class="container-fluid">
            <h2 class="section__ttl">
                <span class="main__ttl">About</span>
                <span class="sub__ttl">事業内容</span>
            </h2>
            <div class="about__container">
                <div class="img__container">
                    <img src="<?php echo esc_url( get_theme_file_uri( "img/about_main_img.jpg" ) ); ?>" alt="田舎の道" class="img">
                </div>
                <div class="about__contents">
                    <p class="contents__txt01">KOKYO DESIGNは、千葉県にてWebサイト制作や各種DTPデザインを行う<br class="xl__none">デザインオフィスです。<br>WEB制作会社へ転職後、個人でもデザインを受注しており次第に多くのご依頼をいただくようになったため、個人事業として開業しました。</p>
                    <p class="contents__txt01">KOKYO DESIGNでは、どんなにすばらしいデザインでも価値がなければその<br class="xl__none">デザインは無駄になってしまうと考えています。<br>お客様のビジネスが持つ<strong class="st">価値･可能性</strong>をデザインでより多くの人に正確に伝え、<br class="xl__none">その可能性を極大化させること。これを目標として活動しております。</p>
                    <p class="contents__txt01">はじめてのホームページ制作でもわかりやすくサポートいたしますのでお気軽にご相談ください。</p>
                </div><!--/.about__contents-->
            </div><!--/.about__container-->
            <div class="about__table__container">
                <table class="about__table">
                    <tbody class="table__body">
                        <th class="table__head">事業携帯</th>
                        <td class="table__date">個人事業主  ウェブデザイナー</td>
                    </tbody>
                    <tbody class="table__body">
                        <th class="table__head">事業主</th>
                        <td class="table__date">関谷 諒(せきや りょう)</td>
                    </tbody>
                    <tbody class="table__body">
                        <th class="table__head">所在地</th>
                        <td class="table__date">千葉市内(自宅兼事務所のため契約時記載いたします)</td>
                    </tbody>
                    <tbody class="table__body">
                        <th class="table__head">連絡先</th>
                        <td class="table__date">下記フォームからお問い合わせください</td>
                    </tbody>
                    <tbody class="table__body">
                        <th class="table__head">定休日</th>
                        <td class="table__date">不定休(お問い合わせいただいてから、24時間以内にご連絡いたします)</td>
                    </tbody>
                    <tbody class="table__body">
                        <th class="table__head">事業内容</th>
                        <td class="table__date">WEBデザイン/CMS構築/DTPデザイン/バナーデザイン/ロゴデザイン</td>
                    </tbody>
                </table><!--/.about__table-->
            </div><!--/.about__table__container-->
        </div><!--/.container-fluid-->
    </section>
    <!---------------------page-profile------------------------>
    <section class="page-profile">
        <div class="container-fluid">
            <h2 class="profile__ttl">Profile</h2>
            <div class="profile__container">
                <div class="img__container">
                    <img src="<?php echo esc_url( get_theme_file_uri( "img/profile_img.jpg" ) ); ?>" alt="制作者" class="img">
                </div>
                <div class="profile__contents">
                    <p class="contents__txt01">関谷諒</p>
                    <p class="contents__txt01">1992年生まれ、長野県長野市出身<br><span>長野日本大学高等学校</span><span class="sp01">日本大学卒業</span></p>
                    <p class="contents__txt01">WEB制作･デザインに出会い、営業職を思い切って退職。デザイン･コーディングを本格的に学び始め、のめり込む。</p>
                    <p class="contents__txt01">千葉県内のWEB制作会社へフロントエンドとして転職<br>WEB制作･デザイン･CMS設計を担当</p>
                    <p class="contents__txt01">個人事業主としてWEB制作を受注開始</p>
                    <p class="contents__txt02"><span class="sp02">趣味:</span><span>旅行/アウトドア(サーフィン･スノーボード)</span></p>
                    <p class="contents__txt02">
                        <span class="sp02">好きな物:</span>
                        <span>自然 / ポテトチップス / コーヒー</span>
                    </p>
                    <p class="contents__txt02">
                        <span class="sp02">にがてな物:</span>
                        <span>ひとごみ / ヘビ   </span>
                    </p>
                </div><!--/.profile__contents-->
            </div><!--/.profile__container-->
        </div><!--/.container-fluid-->
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
    <!-- -----------------breadcrum------------------- -->
    <main class="breadcrumb__container">
        <div class="container-fluid">
            <!--パンくず--><?php echo breadcrumb_func(); ?>
        </div>
    </main>
    <?php get_footer(); ?>