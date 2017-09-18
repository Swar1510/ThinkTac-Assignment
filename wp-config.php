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
define('DB_NAME', 'Thinktac');

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
define('AUTH_KEY',         ',ZP{XZGYs8U@:47*:Wjm#YMGe2?@w?_hGbFJn2a}rX5VhdKrFaSr?|rSQaa0+Dw]');
define('SECURE_AUTH_KEY',  'rA[)|p<cqzA##/B%R7~*Vh2HlaNgykCp;S-UY-1x^@C[hZNQgqM([r-6|nj^}KLM');
define('LOGGED_IN_KEY',    '*V-}=U@XcAW-hqMx+]ge`28{um^`!IA|>xWC30Pxku7;H/m,(?/58Zgxtc+9Q&B?');
define('NONCE_KEY',        '3rvr|UrM9;|PK%p&hH1kKcfRx`m;Oa<853C[2}Ygu?>VOB;N12aW=JAr &QzJPfB');
define('AUTH_SALT',        'R>v!M|.x)43gz%v4VC|jhT@eLb0[g)0.O((+3Yl`n9~Q|jb!%@|MPfO@9CrO&57+');
define('SECURE_AUTH_SALT', 'f0N?j+&Q@CH*tU,cg#`LXIE!rA#LoLS5D7n{;+:4uUzZhA-oBIpQ+pS-/q{x|P>c');
define('LOGGED_IN_SALT',   'y1~+~+*-}08s&.BC7(q55H-2t>R[1efMDLxgm-8x@` JB}DsN*`SbJ/%xAn|MpV{');
define('NONCE_SALT',       '6j+S9slN!w+GmVTw#dlpR%C.,j!}`+F,twcE|87K tzvt/=}|:Uw3;S-_e<BT:`K');/**#@-*/
/**
 * Updated Path for Wordpress Core Files and Content
 *
 * Because the wp-content directory isn’t in the same place as the core WordPress files ,
 * we need to tell the config file where it actually is.
 * The same with the core WordPress files.
 */

define('WP_ENVIRONMENT', 'Development');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */

/**
 * Default Theme
 */

define('WP_DEFAULT_THEME', 'Thinktac');

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
