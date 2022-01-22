<?php

// BEGIN iThemes Security - Do not modify or remove this line
// iThemes Security Config Details: 2
define( 'DISALLOW_FILE_EDIT', true ); // Disable File Editor - Security > Settings > WordPress Tweaks > File Editor
// END iThemes Security - Do not modify or remove this line

/** Enable W3 Total Cache */
define('WP_CACHE', true); // Added by W3 Total Cache

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'myespits_gp2' );

/** MySQL database username */
define( 'DB_USER', 'myespits_usergp2' );

/** MySQL database password */
define( 'DB_PASSWORD', 'PhINeJjRA' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         'd%{3Uu`#&Hu=d>W3r&K*h+|V-0S+B5^ZLr}{)&BF_(dE_[j-<Vj|<f4.-@0n&liT');
define('SECURE_AUTH_KEY',  '.;%-K.b0(1X~#`Z}!}`~<%g7*xxQ3zonjVL{FI+]5;pc{Wz+F!Q@+}gs0 qnb&T8');
define('LOGGED_IN_KEY',    '&]?GO$#Q>A l@2jZ5%UH:C0)V+r_hywSWDBqac3G*>jO6~qQmWI4pd*a+i[ed7io');
define('NONCE_KEY',        'GI`Hm#uZO|-WlCYAPqT4jl{Zgg]_=5Oa/|jffv,nMSzmzrRsb:?P3zkJitdo#O/|');
define('AUTH_SALT',        'H(j=i&2go|8X9]@7[MoQZN=tgA*= ZhQu^Qg/dmfmp|XK6b7QLAb>x.En`IgMdBE');
define('SECURE_AUTH_SALT', '1oyV/>6FwzEN2kw%qvKQ$=7 Sx.Rk?H)~J)-{Zl}p52qG-;8YyGCp?:hmU`{.<s!');
define('LOGGED_IN_SALT',   '0A7-4ofiZ6*O]fE|J=iUf?qx--<4pC=h-T-]2XF3)$czEc[gYso]]G3)R|FaE!k8');
define('NONCE_SALT',       '_T-{M|tf+e$T*4GVQc-Kq{o)tmBB:w`#hG<aX+$[R-Mcl&I8yFI->O,GE+_`1M5u');

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
