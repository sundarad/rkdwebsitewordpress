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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rkd_web' );

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
define( 'AUTH_KEY',         '#frBci3;0G:1xhEzzBVFYe,t|j@Crx^ZWjcLaAm[t UQFm.qm; >tFh5mBm#]&}l' );
define( 'SECURE_AUTH_KEY',  '$4-/H^O[G@[m/fI_f(+fdvSwkyJ`YgI{b-boaR=B,swaFnglHMwJB1RKpP5?-5C/' );
define( 'LOGGED_IN_KEY',    '=XqA J~1#gHtF;sUVKe`}pe=bNUpQUvj`NeXk, OYL}YPm!,~NyaCKSp0O0soRf|' );
define( 'NONCE_KEY',        'gtTb4:o^VI#|<&J.a*VN=8K]6^2Zip.2TUj5NhH2L]&}dJ!Sm E1XvmHFQ<4a,%4' );
define( 'AUTH_SALT',        '0$__i-}B{#B?O:Iv]kc;,JTt3$t+hCN4iazHfu<J2K7hZTY/2VT#/Ug0$1uWH..u' );
define( 'SECURE_AUTH_SALT', 'nV6!QyR<],h-7{&:r/LyDB`.?Z?dm+YA#}4D28%B*?G~o5T/ I_G,QW=lmq*swe9' );
define( 'LOGGED_IN_SALT',   'MR9f>ysu3.fZZ0:JQR{7vH2l-vuN2Qwj13Qf{1g4g0D-n,K&GWrae tE:nK6)s(.' );
define( 'NONCE_SALT',       'F9k+kWV4^UC414|1NEek;@5Z^^~3t@&Y~@BIjYd&uQcrv!l_MP#iaPM|u=4w&R`&' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
