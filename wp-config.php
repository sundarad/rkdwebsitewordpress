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
define( 'DB_NAME', 'bandipur_rkdweb' );

/** Database username */
define( 'DB_USER', 'bandipur_rkdweb' );

/** Database password */
define( 'DB_PASSWORD', 'bandipur_rkdweb@' );

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
define( 'AUTH_KEY',         'pwe09hk[R8y&RynQ[.<g14LVxDNGKI(Ua:$Ki<c/9mlNPv9F7lx<^5+GHr=ni/b9' );
define( 'SECURE_AUTH_KEY',  '}Ri,IEwC3f1OfX1HKpLtHmX/1NZkqV:Oc|fzkYQ}yo{f*!X .92q,mRE`#(XBVZT' );
define( 'LOGGED_IN_KEY',    '%`4a[e68W/M*kJRhI (9}kH=g4!5~!<y5*+1$~4mq@6={b2+%31>P4H#+yitwy*;' );
define( 'NONCE_KEY',        'e+O][Jw4K^NW@}Xi~I|GPkG%K#D@/^e%waIJ&ZWb9[_D0r(IU;9X`rbeq3^RIVl}' );
define( 'AUTH_SALT',        '*>LROf,:j8,etF)Pr7&h:$Z.n_)J2 YNYXrT%`PkxyFh~U@x<TkeUD-9,~+g[s@e' );
define( 'SECURE_AUTH_SALT', 'nLkT@K.k0aR&2m!]BU*_S5``V+|-/51a}HI;6=u#7T9s3iU(?mats:16K?}ewY;?' );
define( 'LOGGED_IN_SALT',   'VpKZrwo=vFClJZW9?ts>0pk)e7nQX~Jbx5lxN7zJsd>CPNUQa#uxdNi%FGdXYwFX' );
define( 'NONCE_SALT',       '0BF5~Z&4pQWv*UE2qgmrjJDqZ29#AXvjNkZUW{:u)l5@w?g?Soht!^V>HPE@-XzM' );

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
