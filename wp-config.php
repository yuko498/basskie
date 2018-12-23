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
 * @link http://wpdocs.osdn.jp/wp-config.php_%E3%81%AE%E7%B7%A8%E9%9B%86
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
define('DB_NAME', 'DBzd1E17');

/** MySQL データベースのユーザー名 */
define('DB_USER', 'zd1E17');

/** MySQL データベースのパスワード */
define('DB_PASSWORD', 'PE3NRC');

/** MySQL のホスト名 */
define('DB_HOST', 'localhost');

/** テーマやプラグインの更新を行う際にFTP接続モードにしないため */
define('FS_METHOD','direct');

/** データベースのテーブルを作成する際のデータベースの文字セット */
define('DB_CHARSET', 'utf8mb4');

/** データベースの照合順序 (ほとんどの場合変更する必要はありません) */
define('DB_COLLATE', '');

/**#@+
 * 認証用ユニークキー
 *
 * それぞれを異なるユニーク (一意) な文字列に変更してください。
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org の秘密鍵サービス} で自動生成することもできます。
 * 後でいつでも変更して、既存のすべての cookie を無効にできます。これにより、すべてのユーザーを強制的に再ログインさせることになります。
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'L2Wr99}KytU0si8)j^>@z/%;ZBAn7<3w`u&|J1B~1O{=q]JF}x#l`z(S5MdXcbJ%');
define('SECURE_AUTH_KEY',  'cV(/!1x5V]1,>d.}l,=~$L}B*}oF*uj!a}kL$(~>]4k<^HU/i~Q*oQl&shj%IBD8');
define('LOGGED_IN_KEY',    'Xn680IS7:N= 1?s=t;EO$xrk#9ZUgxR06%zp&U0@J?hq@+F#msH{Z)X8m|e2h!(,');
define('NONCE_KEY',        '_ 2qb!IS7jqu~fyHsmqn!!tB,h)n5bb:?$QXT!EEpG@b5FP+-VxE5gk>x]BZzlHt');
define('AUTH_SALT',        'KB:e2xp02O }QoPAf0d1M(}q}m(p4Wq69>*Pwr6nv1[3T<|<&mZdFz?09{=Y9<<r');
define('SECURE_AUTH_SALT', '-pK6hM}j^-#|HEcINO:|v I#hl$<E;2%O]IG+mFno$^QxswU,l{X5J`iig2t91^Z');
define('LOGGED_IN_SALT',   ')*]rq?dkJN573:I5Se5l< X6bV#*D`/6L&Ey_^T+/|vY+RyjM>1*}t6l]xyY7.}p');
define('NONCE_SALT',       '#LiT^j$nINfExBn!!,1O?nIS9|}1WMr1^zyM]#B&~Oq(M1yk|siE^}kH(QpG`T{C');

/**#@-*/

/**
 * WordPress データベーステーブルの接頭辞
 *
 * それぞれにユニーク (一意) な接頭辞を与えることで一つのデータベースに複数の WordPress を
 * インストールすることができます。半角英数字と下線のみを使用してください。
 */
$table_prefix  = 'test_';

/**
 * 開発者へ: WordPress デバッグモード
 *
 * この値を true にすると、開発中に注意 (notice) を表示します。
 * テーマおよびプラグインの開発者には、その開発環境においてこの WP_DEBUG を使用することを強く推奨します。
 *
 * その他のデバッグに利用できる定数については Codex をご覧ください。
 *
 * @link http://wpdocs.osdn.jp/WordPress%E3%81%A7%E3%81%AE%E3%83%87%E3%83%90%E3%83%83%E3%82%B0
 */
define('WP_DEBUG', false);

/* 編集が必要なのはここまでです ! WordPress でブログをお楽しみください。 */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
