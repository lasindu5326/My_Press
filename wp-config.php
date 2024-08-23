<?php

/** WP 2FA plugin data encryption key. For more information please visit melapress.com */
define('WP_CACHE', true);
define( 'WPCACHEHOME', 'C:\xampp\htdocs\GitHub\My_Press\wp-content\plugins\wp-super-cache/' );
define( 'WP2FA_ENCRYPT_KEY', 'kaDCHj712G5M5QQUTUw3Iw==' );

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'my_press' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         ']|}Ckvf<i8K+Ck$Uh.U,1HN]1)%CU(9kw3mM(ZYUkTh!SV*A0C}Q.ijoToI`NIhK' );
define( 'SECURE_AUTH_KEY',  'tG+VHeX`d.:9IPEsje 6i73_uA)&=sXXmd^6lXWZh/7N(F;p:oLj@]_!QkEs91;`' );
define( 'LOGGED_IN_KEY',    'xO)/Mi:W~`9l.m. haqDz1TvA12QKK=t-TR-5|(KlQ`t)fU9ehRSmKUOSh4?}~2C' );
define( 'NONCE_KEY',        'nOkR2d-w4H=wJ`e2m?!E!mp^~w;+;U2(GBovq,*]s]h&#*sQk1jBSi:D5CQ@|bqJ' );
define( 'AUTH_SALT',        '?eH$+^w}T{>Uc,ECH.q&6fZa{sc-UC<UN;{,|O&~ys<q6Do:7,/kmN#iQ:xQP?^4' );
define( 'SECURE_AUTH_SALT', '<kVt<%rU$X*@3Lo{.:_.}s>|WNs.64lc-#*u$ZAnL=OzRt>&/1if6@d*Niahmd1t' );
define( 'LOGGED_IN_SALT',   '{^@wT]w,Y.fgbBlEk)agS=XQ2(~4TQ$NPDpo=0`-^7gtE!_x>QEX~z6(|c1rw7c`' );
define( 'NONCE_SALT',       'B^yR);(+%2adcf;lMO2X8%`b6)%~lUmdg%!FR>u#>SrKs1#xvF0?;s?J*(>yqwzz' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
