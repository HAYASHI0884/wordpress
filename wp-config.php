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
define( 'DB_NAME', 'aws_infra_web' );

/** MySQL データベースのユーザー名 */
define( 'DB_USER', 'aws_infra' );

/** MySQL データベースのパスワード */
define( 'DB_PASSWORD', 'password' );

/** MySQL のホスト名 */
define( 'DB_HOST', 'awsnopractice.com' );

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
define('AUTH_KEY',         'MnNbg$H`Nl9{9OUv>ah|JgQ[VWd*;m6-|w{.0{-*(lt8A+L2p/F<Emee?w/_(zIb');
define('SECURE_AUTH_KEY',  'nCI=Wv:b/_u8rnK}1E+tnD3XD*Hc+t++OvQc]M /+3,DT{0k:{1r90|-vl4=_kIo');
define('LOGGED_IN_KEY',    '#%Z{mG88SC?>n`~b<v@)(qB]&LV}/HrF0Dkpw+p/r4a#+$:_Zocj`>QWf#F+(p52');
define('NONCE_KEY',        'u&^1y|%W#3u% hY|%V+R}YA!7D;JF|B|-=T0|.%U(v^AT?k<tJ`b}w)-xh.K4S75');
define('AUTH_SALT',        'nF,$cG+?+TOfI7a]h@]$]yGjwyyPKzA?y|r3iS0iV`FP*;CbV&LL$(-AB;I[gKTv');
define('SECURE_AUTH_SALT', '9LcthPA:g-w0qY?XBV|k406gEFi:6 {)V`|ldh{b5+`w=juhG$9Bz0-&!=/#rq1n');
define('LOGGED_IN_SALT',   '+wgE|wka[oky7X0s~JUtChe?>V8)2N3`AiOPfmNc1wp!HF| G8e6nvrl`z[39q2y');
define('NONCE_SALT',       '%xF;1?`;x|wc7;b]{y)Rtl_:QocTku/cO_-,>@]HMv42[tWtVX?ssaPBix|d`Gp!');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix = 'wp_';

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
define( 'WP_DEBUG', true );

/* カスタム値は、この行と「編集が必要なのはここまでです」の行の間に追加してください。 */



/* 編集が必要なのはここまでです ! WordPress でのパブリッシングをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
