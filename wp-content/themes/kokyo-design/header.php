<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2
    " crossorigin="anonymous">
    <link href="<?php echo esc_url( get_theme_file_uri( "img/favicon.ico" ) ); ?>" type="image/x-icon" rel="icon">
    <link href="<?php echo esc_url( get_theme_file_uri( "img/favicon.ico" ) ); ?>" type="image/x-icon" rel="shortcut icon">
    <?php wp_head(); ?>
</head>
<body>
    <!---------------------header---------------------->
    <header class="header">
        <h1 class="logo__container logo__container--header">
            <a href="/" class="logo__link">
                <img src="<?php echo esc_url( get_theme_file_uri( "img/logo.svg" ) ); ?>" alt="KOKYO DESIGN こきょうデザイン" class="logo">
            </a>
        </h1>
        <a href="<?php echo esc_url(get_permalink( 8 )); ?>" class="header__contact__btn">
            <p class="icon__container"><img src="<?php echo esc_url( get_theme_file_uri( "img/mail_icon.svg" ) ); ?>" alt="メールアイコン" class="icon"></p>
            <p class="contact__txt">CONTACT</p>
        </a>
    </header>
    <!---------------------popup-menu------------------------>
    <div id="nav__btn" class="popup__nav__btn"><img src="<?php echo esc_url( get_theme_file_uri( "img/wave_bnt.svg" ) ); ?>" alt="波線" class="icon__wave"></div>
    <div id="popup__nav" class="popup__modal">
        <div class="popup__overlay">
            <div class="popup__container">
                <div class="popup__contents">
                    <h2 class="logo__container logo__container--header">
                        <a href="/" class="logo__link">
                            <img src="<?php echo esc_url( get_theme_file_uri( "img/logo-w.svg" ) ); ?>" alt="KOKYO DESIGN こきょうデザイン" class="logo">
                        </a>
                    </h2>
                    <div id="close" class="popup__close"><img src="<?php echo esc_url( get_theme_file_uri( "img/close_btn-w.svg" ) ); ?>" alt="閉じるボタン" class="icon"></div>
                    <nav class="popup__nav">
                        <ul id="list">
                            <li>
                                <a href="/">
                                    <p class="link__ttl">Top</p>
                                    <p class="link__sub-ttl">トップ</p>
                                </a>
                            </li>
                            <li>
                                <a href="/#message" data-micromodal-close aria-label="Close modal">
                                    <p class="link__ttl">Message</p>
                                    <p class="link__sub-ttl">メッセージ</p>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url( home_url( '/#service' ) ); ?>">
                                    <p class="link__ttl">Survice</p>
                                    <p class="link__sub-ttl">サービス</p>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url( home_url( '/#works' ) ); ?>">
                                    <p class="link__ttl">Works</p>
                                    <p class="link__sub-ttl">実績</p>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url( home_url( '/#price' ) ); ?>">
                                    <p class="link__ttl">Price</p>
                                    <p class="link__sub-ttl">価格</p>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url(get_permalink( 10 )); ?>">
                                    <p class="link__ttl">About</p>
                                    <p class="link__sub-ttl">事業詳細</p>
                                </a>
                            </li>
                            <li>
                                <a href="<?php echo esc_url(get_permalink( 8 )); ?>">
                                    <p class="link__ttl">Contact</p>
                                    <p class="link__sub-ttl">お問い合わせ</p>
                                </a>
                            </li>
                        </ul>
                    </nav><!--/.popup__nav-->
                </div><!--/.popup__content-->
            </div><!--/.popup__container-->
        </div><!--/.popup__overlay-->
    </div><!--/.popup__modal-->
