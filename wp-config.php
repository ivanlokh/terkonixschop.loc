<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'terkonixbd' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '^HiE$LJt4u/:&7X#+hH-#-|jW,7cUNm{ lSh_hp 8zO]X:QR#bOKyGi|o6Bh{4Y1' );
define( 'SECURE_AUTH_KEY',  '4dN}wcQ+cSTW7JU2=Zu!oBO*BD;]#-/+-OW/3$B/gJ IY018[e*CRfCIwwst/Nb7' );
define( 'LOGGED_IN_KEY',    '}>20L-?A`r(Y)) iYxoO e4akI<I^`/xBYV`u,87lNG%L=b8s:F5xqe(+~M07(A`' );
define( 'NONCE_KEY',        '6znQFa9)mp^9yTV#z]n0w/ 2E0q{&!Jj>:Taq19xEhl9e=k_Xp`go(-+&)$xVE-f' );
define( 'AUTH_SALT',        '{!ygg*fY?2kf%S|O+*eo>%iV<EB`4U:{foVibwg73e?=8tv%).M?)2}gSZv[5]aV' );
define( 'SECURE_AUTH_SALT', ':+)r~+pEj<XE4pdKnVZNx@fI5-jU4oKyZ9~(9d*XCGz<jm-75# &_8!Rq!v_1cg(' );
define( 'LOGGED_IN_SALT',   '%`-I07y5b:-x&T-@} }VSpivoZ@>IFRSk+~NuS(O(H<PQRg)s#qS0 ;T>gF!;rPq' );
define( 'NONCE_SALT',       '})/ykJP{<23kk-r>[ DOj|3`2`@Pleryxq7H*2t<{zS#/iF$15fc%,VW.+6^?P%h' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'terk_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
