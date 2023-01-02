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
define( 'DB_NAME', 'my_portfolio' );

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
define( 'AUTH_KEY',         'Cm3Tzhapf&ux/yHSadN?F M^fMzi{B^C5o-KB .|?4CYP@*6omq+?dIJhEUp@06d' );
define( 'SECURE_AUTH_KEY',  '!^EsmaSz&Z^1m1IZGkw*[-Iiy$xgn*)d+!?oH:CaT$0)Yp$,lVZr(X`Gl-Lw(?Td' );
define( 'LOGGED_IN_KEY',    '#Dnt$dIc8hDtV/xz^OM?%KA!bNF}eX&J#@S{ci3Z$gLA,As6[aGrTYch:e4;p0D-' );
define( 'NONCE_KEY',        '39kDe/vMAtOi;&F{Aov20lk`:B^/CN?T:BB(c,fN[Y&,qP!^E!,4au[lI$m8ine/' );
define( 'AUTH_SALT',        '4G|xx@yC)n?9|kwH+~*Xk2Ji*~^!%hMcSA5sAn#XFpTXhWCu~uh2h@vY|#;%&PTO' );
define( 'SECURE_AUTH_SALT', '`,N{[gOet*-0dN+OyFgeN2LaO!P$C+ypQu9;J(L^[?Y6qUop,I?3F,l+} XnrjFn' );
define( 'LOGGED_IN_SALT',   '{YMmjkWCx1A~s^.n;<An5&pTgoRa*tFnFTbkUigVfWo~T?b{x^p.AV>;NP2&?uzF' );
define( 'NONCE_SALT',       ';p|#R,kSb/mU7.N6I#l9>=6b#Z{ra*nk!EC<Yc=Q}iPJ@W$>1w1yo&IJ}%GAUoq]' );

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
