<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'id14541101_wpdb' );

/** MySQL database username */
define( 'DB_USER', 'id14541101_root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'JkAQJ8yJH3jhZ/={' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Q)co8lh}Sy%fAsl7;{275(s4qQ--WmNH6z~AcT*@Za&q52SF:c$S72{yy]OII~c]' );
define( 'SECURE_AUTH_KEY',  '~=eWA  ?m!rET`LcI|/M.&!/anlopd7.RJ^4!mz IBta[XE:v]%|2FVA0/kryW@I' );
define( 'LOGGED_IN_KEY',    'mj&G~pG=S80(Q$[Bp6EDYRc%CI0R/A^m(C)z$haDaJ+hVZWHxEe}y/oYQp=&ffM&' );
define( 'NONCE_KEY',        '$1Cyyb#bX_r5hA|^H}kTPDhd=)e:-1Iby.Xb94#H4XNd:tHmMei38O(xYde~IO:2' );
define( 'AUTH_SALT',        ';|nekumaEHbyk0;jw+{!$oa3TQcr77QdKXDC_]WTZteJgilNCFAddE|Hy8E}`Nil' );
define( 'SECURE_AUTH_SALT', '%O0$Vw?ecO.FSBb{3~]CdcyS,g40Nak7Zc3Bk?V=o0kFZZqhaId&vfU}-Q@xSF_V' );
define( 'LOGGED_IN_SALT',   'yro_f<g!PhF,-PLTU1q{&~S^Km&JQ?WGUlebB{Btx-V5)xjt!HkESGL%CaBmk;an' );
define( 'NONCE_SALT',       '8<88%!n~~]m#=}g}Lq%/7=[fm*Ze{;a&r?%@9x)71W W7FJ0y.F(|Ym @weOmfs2' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';

define('FS_METHOD', 'direct');