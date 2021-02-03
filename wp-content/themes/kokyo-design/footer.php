    <!---------------------footer------------------------>
    <footer class="footer">
        <div class="container-fluid">
            <h2 class="logo__container logo__container--footer">
                <a href="/" class="logo__link">
                    <img src="<?php echo esc_url( get_theme_file_uri( "img/logo-w.svg" ) ); ?>" alt="KOKYO DESIGN こきょうデザイン" class="logo">
                </a>
            </h2>
                <nav class="footer__nav">
                <li>
                    <a href="/">
                        <p class="link__ttl">Top</p>
                        <p class="link__sub-ttl">トップ</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url( home_url( '/#message' ) ); ?>">
                        <p class="link__ttl">Messege</p>
                        <p class="link__sub-ttl">メッセージ</p>
                    </a>
                </li>
                <li>
                    <a href="<?php echo esc_url( home_url( '/#service' ) ); ?>">
                        <p class="link__ttl">Service</p>
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
            </nav><!--/.footer__nav-->
            <small class="copyright">&copy;2021.1 KOKYO DESIGN</small>
        </div><!--/.container-fluid-->
    </footer>
    <?php wp_footer(); ?>
</body>
</html>