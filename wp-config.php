<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

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
define('AUTH_KEY',         'ypy.K8lMszr{$9T);hYHaF$N1{d0[SkEGU_lS_ZyGB!C9T.G(s_l];=ZvO%A!h4E');
define('SECURE_AUTH_KEY',  'if#H]_z9]t]LwJ6+[Ou={ONtVm[_+$1Yz.(j-Y.^!$$l6}u@r14|~7;/2a3^D o2');
define('LOGGED_IN_KEY',    't|mE4! d;v>HIlF._-jr%3.*E|{-*8P9ER[Zm[%t>Q%&]A-zS0y)/<Mbv-[VO+k>');
define('NONCE_KEY',        '7T/r0?(iGsT*m|o::Ru?-hXLh`-IWBL?BXf{.0}XKNj]q[-={snXa|0A m~>>0P~');
define('AUTH_SALT',        '7k2+p)f%n*teuHVs|6_[(eOFI`||G:O74Lz6^l5M`dKl4?hA]e/QEb[qT[&?Kq8>');
define('SECURE_AUTH_SALT', 'oe;I-i8-k,B|#R45Uy+I>%>(cDdOqX4bmx;i5`sV`_O!A1.Kw@t~MD)FJdgV:.%U');
define('LOGGED_IN_SALT',   'Dpzw]q@mbS[9Ws7Y}Vr9,TOy}9@#uPXBbQj<,b)/x%*gKcv~EOLOpdbYf=-y}}ln');
define('NONCE_SALT',       'daSC/i|*gwcQ@z,orS${AUo5B+1lJ3?w(-Bs[Qa(kCxKAkuPTzThnv<=.!9c15Ye');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
