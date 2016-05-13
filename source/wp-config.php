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
define('DB_NAME', 'bhuvansystemdb');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         ':a/c_#_2^m8E4aq]ENY.jIa6!%=awE2pD.i3,i%!PY]I@hE}[v!W)_((}WvyoADx');
define('SECURE_AUTH_KEY',  'EGN+&~84q38sBc.BK(IQ+,j=(9SFydE`-F|0Q:FU>hDA.UlBw>&I5Vt7Sv(*xk:G');
define('LOGGED_IN_KEY',    '0;_;Q21uWoDRrsebM}Nbmg~-JqvD25v!-]2 }lI7uCfIU+Z _#ZSAz:^wP|$N[)q');
define('NONCE_KEY',        'a[J`=^FG?;<Wc!CWUj7ldQ:p|OVR(b[G+~DwbKTh&vnmz,mroVEUm-6}*sXyMM<X');
define('AUTH_SALT',        'K_!v1A9<Deury.d81_uHe!/Sr5 YRxn/L^KFT: j!PvTc-l[0<7,<>(auH8Wa`x{');
define('SECURE_AUTH_SALT', '{E7b0.|Rrg& (R2C8DPHx[=O&@g|iyAa.ZdyyhN89xErN#pjZLNOuvqO^)>xQ>A ');
define('LOGGED_IN_SALT',   '7YK]2y}QKT^=CABq@TK]P2@~YPcrr*ZGeO{n1VSGuRoVeV&=d~hsKW;YC+w*M_Zf');
define('NONCE_SALT',       '$FT^{cOe>9Td8?;@9odTwRbP;uPll-0v(<XO?EfO}/=WCjpRTZw7saK2H;_!~1#O');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'bs_';

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
