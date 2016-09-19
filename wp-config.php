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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wok');

/** MySQL database username */
define('DB_USER', 'dustin');

/** MySQL database password */
define('DB_PASSWORD', 'LayrRocks123!');

/** MySQL hostname */
define('DB_HOST', 'ec2-54-218-99-86.us-west-2.compute.amazonaws.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'vLbZZn`W:5cHuD!,,q-[2!v~P|:x3s7`~luM&BGumY]ET{lkQ:m9e#_5=1aO`c`d');
define('SECURE_AUTH_KEY',  '-:VX|)uPbU;/,NVRT2:1(_S;*ft-n`;.2/J(LA;RglcQ?88hZZMDAvzGC%+J1B/X');
define('LOGGED_IN_KEY',    'mQXF/qDpR=q:P{5rli=M*#>lb5E;!S=(E?I&Iv^y9d7K)g{U&>EoZ]&xg!FbnmpY');
define('NONCE_KEY',        'Ywza.qdCBG!L~h6(F)_`W Y M_5Np4]p[1B_XX>%o^hL5(wstpv.?B?pTwr29 2@');
define('AUTH_SALT',        '(tTQK Lpu|dlRXc6o!)5Ki^{]u&/c,(`k:1:SzK?,zKhZ0Xa{@+kVX)m?(rN5KHX');
define('SECURE_AUTH_SALT', '[GHxZs1H,^WKFYwd7Ixjj8xPxV+^&mX3-}IUN-%.SDB`+i@aPl(i !N*9PRwp2xh');
define('LOGGED_IN_SALT',   'pxH3k9P| @HOuoKuAfpxTvp4z;#Ae7YpKbFQ0y#=jh3=e%[j{KdYsc[H^ $?vd)D');
define('NONCE_SALT',       '8aZ]ZR{cC%*s^VV;Sa!i}`IOK?*>QFLF%snY8~?`5#-H}3c#::Sx:R5->/;#ahn%');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
