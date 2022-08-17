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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'u4<N0a:dcMnq3WO3v! SE*|w-H GrkcJQ.c7/?-kIj5X3bLg1W{K[s|Vk!r|*S;N' );
define( 'SECURE_AUTH_KEY',  'JC.VExr6:m*k2 5Z%s,m^/:Xi)Ae~rCE!l`XHE=C*p~X,JyZ-3NhS7Dm0}wDvxcj' );
define( 'LOGGED_IN_KEY',    '%5X?=XCp@S%j3bhdm%a(W3K(SH|b_;k5ukZ-J)Y:Kw]2n~am#O&1Q`!KryaPSIzu' );
define( 'NONCE_KEY',        '&K>2Xw9rbn~VZ%4GB|Sr:M(M&QzhS_uJHb.{M>@#QGZFb^8cd-N}o@.FX3WQ,,^L' );
define( 'AUTH_SALT',        '_- ew#5q:LgC5Jig6K0KpxpoHha}^8.Yb01,f[01+QSWtWR:a}qn2Uz3GisS)S T' );
define( 'SECURE_AUTH_SALT', 'n95*Lf,Ur1|kpRnUn`LoWcwmZfSe5NI0^*A^6BmU<-n-6#?> F1&Z_P.Kt;;V395' );
define( 'LOGGED_IN_SALT',   '&p|B&NV1~1+&s:2xEZ:qDC6xDJJSzQ+{Y-;cr3kgdPT<|=}t0oxwK~v]wcz!@Y<B' );
define( 'NONCE_SALT',       '@TdtGS]&Af|SbYIhX/c1E{DNHOf0qMLZh/eD3y(@rh56=432%wp=e[|MN96V]0[H' );

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
