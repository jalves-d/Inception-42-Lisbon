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
define( 'DB_PASSWORD', '12345' );

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
define('AUTH_KEY',         'hS&pkv|%.zzNR?GoVxm$&A.~Z98bN;MM)`am*)U@,l@x=+=7K#BzyF~b{t(jBzm_');
	define('SECURE_AUTH_KEY',  'D]FOd-;0ep5)&%6H!r57g*J>2[6m)]ffa*A&Z`h}dT.PH.z$Rk*ikij0|Q`$qg_C');
	define('LOGGED_IN_KEY',    'Y? W*5UROAUd;OZz}M*}<H!$))hcZv8/(p(oSVk}Z;irsow#^.syi WGfE>OY)+>');
	define('NONCE_KEY',        'BrbsE!%`u@6EU(+Nj_,T??[VaSq&W~K:W94Qr!fVmIjAx-7iz+f-!pZ3^t&I?d|g');
	define('AUTH_SALT',        ':<?uVsg/R3J}fx5]:/Wy-OI7q}-BF`%cT|q0X7m[?ygWX!Ug~X;IvJ|S7i3h+Sqa');
	define('SECURE_AUTH_SALT', '9bUf*%|U^^@|4bfaWJo,4##I_/-Jmh)#>ia_bqo>/(U;o@e6cE)D6&C{Ea=ylcmu');
	define('LOGGED_IN_SALT',   'z%mrw+Rybu&1qt<n-@dO}YFn%h!Mk1BHN-S1X@TJ$~f(:Pn^eb+C;zcwn<qh=CsB');
	define('NONCE_SALT',       '+/3mi-0mbZ_y=L0f|HE zn|3l0#2]qDh|Or XH)7kF<!sG@LJ*F0/B0$`<xA.)Fz');
/*#@-*/

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
