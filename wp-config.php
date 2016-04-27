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
define('DB_NAME', 'protonintl');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'u2qeufTaKR1H|W|KP>LLGl)#y0c^5;.oVQLJN2v]y&4;[zKb;bCOQ0YAcUZ)g{-8');
define('SECURE_AUTH_KEY',  'd>H u[HXQ Md$xA85 C%Ia}cZZ3BTJYCL_[K>aVXf&_8l9Y$4i!Np^:j]Z}|{QUW');
define('LOGGED_IN_KEY',    'y#>p AB`S%ys0D|>nWbX(ktR~p~s~2nnW@Z;sBZVtG!PiYh5IR#{iP#AD;jc7eH8');
define('NONCE_KEY',        'VU2`;c]ExNYSQx<UwYqP9! e}R*z/#!SUdos]eTzjerhHPTB1L{Lck{[<o`}`U>=');
define('AUTH_SALT',        '42}PMx<g>|+rwt;~s~Zcqfr.CFT>P28 0|RD+bD$A]&2xV^/KAKr4:z]6f@T|DUj');
define('SECURE_AUTH_SALT', 'D,R!S-TJWPJ<x&p7LpP:%hVrlV,]r*/h1M_,yMM3(PlJ,lxxvGJ}ZGJ><LB`E=Oy');
define('LOGGED_IN_SALT',   'g0.e#_Do9c;aY=(2g<AjFMf$8<3G.lmX*W#f :5l@AO9p/i7[L?u]5Rl/u6&FI0!');
define('NONCE_SALT',       'm9Sf)yv5)GoRXGazM]Isza)*>@FR6gW(iQVz#]PY O+2W51P%~4Wftn2%R$3~*@X');

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
