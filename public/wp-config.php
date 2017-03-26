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
define('DB_NAME', 'klikography');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'fGqvSw];4!|++x &N|`DB {@l~utzf56V`t?}j[=S-JN=v^nUqUYiG 9z<J2h|K~');
define('SECURE_AUTH_KEY',  '~PKlO1+%xb~p#f1e`|5(JFgmZ7a<y5vCRH,#|r?/*DB^7wT|u=DvfsLh|5o&I:t!');
define('LOGGED_IN_KEY',    '*4;;pXVoyGvT<^0qemJOVmj=iU+tuZ1sT4(W:+5)enDVXPD9lkF>B`yw+8fDI!!+');
define('NONCE_KEY',        '!Z_>XJphq<x{x>,}nWNC,]2@>bzb,cu)Hj)YXq/&%:29[TeVi!Jy|tHq[!0+4Xv@');
define('AUTH_SALT',        '$X8hH!Aa#w)*G!Oj$x1w#!eMq{[t7M4-O2+&i8A8qwSA_GN!(/Ow~W5N4~/qw#Aw');
define('SECURE_AUTH_SALT', 'yy2Qz#1E9v=W4zgE^(tD24-3) [d.-8[[vl.buO2IriANOQmzH~_~$2.L!s4/|yO');
define('LOGGED_IN_SALT',   'pkDB!lcyMi1$ted!^9Gat>+i}x)54N9$YAo8^y0]q&+5O5JK{,C[/3u<3?Fw0b7s');
define('NONCE_SALT',       '(lwoq3f-VQD-/)RA3Q<ji+Z0/|Qkh=F:nZ5WRv^t`+88!bxw?(YHjr4/9WQ+8V[s');
/**#@-*/
/**
 * Updated Path for Wordpress Core Files and Content
 *
 * Because the wp-content directory isn’t in the same place as the core WordPress files ,
 * we need to tell the config file where it actually is.
 * The same with the core WordPress files.
 */

define('WP_ENVIRONMENT', 'Development');

if (WP_ENVIRONMENT == 'Production') {
	define('WP_ROOT', '');
} elseif (WP_ENVIRONMENT == 'Development') {
	define('WP_ROOT', '');
}

define('WP_CONTENT_DIR', __DIR__ . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . WP_ROOT . '/wp-content');
define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . WP_ROOT . '/wp');
define('WP_HOME', 'http://' . $_SERVER['SERVER_NAME'] . WP_ROOT);

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */

/**
 * Default Theme
 */

define('WP_DEFAULT_THEME', 'klikography');

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
