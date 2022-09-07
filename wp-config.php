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
define( 'DB_NAME', 'rkd_website' );

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
define( 'AUTH_KEY',         '%.>@&xZ}7va:%URUvgLr`YzP-d7OOQJ4!HokR@Ci.uk~ p}ms:cI-mRm9u1)Vl;i' );
define( 'SECURE_AUTH_KEY',  '_`JWcLw/`rzcQ[O#s4X-0]|iY+=3fz9Xci@}=fS%JW= .VV.zOSY$G+dtTY~!&)e' );
define( 'LOGGED_IN_KEY',    '@rtQbw_#>B2-OQs)qPYIex.H@Z^a!KZ8=hWXc[wy:%pXso0r9H!v(V*#DHY,Fx[O' );
define( 'NONCE_KEY',        'uSgSE{mR+Z_YLFmEP66<emBGd[!+p=#uk8!b%:V*yg_q2dj)<xz7>tBb{)1~Ff:-' );
define( 'AUTH_SALT',        '>2d.[7p b084$4{P9CX9xtU$a,dq#*AfI|{mH4!VKv@kN+}CjNvsX!pstHD-+]tt' );
define( 'SECURE_AUTH_SALT', 'F{XDyGKp4Xob]vKX{5E>:c@D^@K|TOe]3q[]|&]_*j8g`-aJx|52y=2c)l9*{Qr,' );
define( 'LOGGED_IN_SALT',   'A7s/!ItN3)W-><t4DK5Mg8/5;}ofe;dQSQLf=,=$PY E%/Z}E-b@p.^[8Y`h7QdL' );
define( 'NONCE_SALT',       '^`(oM{`,*`2hz?qziUqkff.%f_ (dzuB.kn8,Z8i<y0H)/$#oV{dB-Bp[rsEdu0[' );

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
