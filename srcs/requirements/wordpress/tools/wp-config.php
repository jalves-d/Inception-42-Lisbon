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
define( 'DB_USER', 'jalves-d' );

/** Database password */
define( 'DB_PASSWORD', 'awesome' );

/** Database hostname */
define( 'DB_HOST', 'mariadb' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '{<y]g~!utCyN-eN3*@D@C[A$.3Z|u{>t5IP*Z:OleAF)x(Yo3~b[:$#]2-^-[7m5');
define('SECURE_AUTH_KEY',  '|FI]]A:_x-d&o>[aR[za}o-mot(wBOG?GgDNvF>+j:rL2AwPep)?739/[9h@H%+|');
define('LOGGED_IN_KEY',    ')H_{jTdgO8Nu?8TZ7S@n0z9d%1pFWG)@{==hu!39ED+Bkp^)yc2TMB#h#wd&SA`,');
define('NONCE_KEY',        'vx0HO!-emX|Q0?d}l|g|Uod?-%Jx4l7;JmD:4_82|UM;.av]S~[jEH}/v3H#]^B[');
define('AUTH_SALT',        'NutZ ,3VABaXy4eu{8{Wj;qgjEocTwOiF:{u:fU={&+h7|#`GKM)~h!u<GJ=JmBG');
define('SECURE_AUTH_SALT', 'Pb|nhjMH=$dMn4F%9E>?>f-zk<#/@)f4;A)+$X@selI98?K2lM m.<*=wI ~vZuC');
define('LOGGED_IN_SALT',   'l6P+y8__l2q<Yh/F=>Vm8Y>g-:5]Cn*|&T+Cnp-IY*!NI!RVtN_e.N2v0|s>5V~X');
define('NONCE_SALT',       '5)iM[in!hky+*Malpj#RzH,J+/)%5{4s>^%:;(]foc<h+[{;i~XND&S?y=P|i{5]');
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
