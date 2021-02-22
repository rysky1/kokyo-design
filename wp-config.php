<?php
/**
 * WordPress の基本設定
 *
 * このファイルは、インストール時に wp-config.php 作成ウィザードが利用します。
 * ウィザードを介さずにこのファイルを "wp-config.php" という名前でコピーして
 * 直接編集して値を入力してもかまいません。
 *
 * このファイルは、以下の設定を含みます。
 *
 * * MySQL 設定
 * * 秘密鍵
 * * データベーステーブル接頭辞
 * * ABSPATH
 *
 * @link https://ja.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// 注意:
// Windows の "メモ帳" でこのファイルを編集しないでください !
// 問題なく使えるテキストエディタ
// (http://wpdocs.osdn.jp/%E7%94%A8%E8%AA%9E%E9%9B%86#.E3.83.86.E3.82.AD.E3.82.B9.E3.83.88.E3.82.A8.E3.83.87.E3.82.A3.E3.82.BF 参照)
// を使用し、必ず UTF-8 の BOM なし (UTF-8N) で保存してください。

// ** MySQL 設定 - この情報はホスティング先から入手してください。 ** //
/** WordPress のためのデータベース名 */
define( 'DB_NAME', 'kokyo-design' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'root' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', '' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'localhost' );

/** データベースのテーブルを作成する際のデータベースの文字セット */
define( 'DB_CHARSET', 'utf8' );

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define( 'DB_COLLATE', '' );

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!b^}`rIte$YN|5uVV|_>#<=n$C<,u4&|W>F|ID|`|ey1zd8:~ES`=fw##M%|RvE[');
define('SECURE_AUTH_KEY',  'KaWy~lvu<NHytF7!X~o$~oQW]U.z-o}O@to/2!r.JG bS)+0urp/P.c_evfAiMq}');
define('LOGGED_IN_KEY',    'VG{iM8U,f!_tpIjG{[gh/(xPIu+*I$?Yf^dc{X1<XK>m+h9?+E[d8~nZa-u{FV,~');
define('NONCE_KEY',        '+U;_/K>i+$8x]OlndUG|6,dhTwWyi|R1U+.0U:UEU?_3C?-kwq4<*J+w%)-:3g-X');
define('AUTH_SALT',        '/9`|$-5<=Fn<s?&mA8U*[{(aDR [Z8?q_OYx|[u+Zh&F176Keu7@oF8+LCYt})K=');
define('SECURE_AUTH_SALT', ')u-(2R5ckGeWWP:#(dX<syKx[I)nY{ .>8M7*0n_?U%#j^{;H[+AJ61{.]33ds0:');
define('LOGGED_IN_SALT',   '<KB^d$&TjULi8bn9rOM>~6doxL=k={/J1Tz<-c3v5+HJ!|[osYX!U1C)h@Odnpp>');
define('NONCE_SALT',       'J3)za qesL<m#Q5--lY?q]2SDDDoM}b|l4+Aw q[%m?-yQR4C]Ez0m{Lh`dwKPW?');
/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'xx_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数についてはドキュメンテーションをご覧ください。
 *
 * @link https://ja.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );
// リビジョン5まで
define('WP_POST_REVISIONS', 5 );
// エラーは非表示
ini_set('display_errors', 0);
// 自動アップデート停止
define('AUTOMATIC_UPDATER_DISABLED', true);
// Contact Form7で自動挿入されるpタグを削除する
// ※以下は無くても問題ないです
define ('WPCF7_AUTOP', false);
/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
