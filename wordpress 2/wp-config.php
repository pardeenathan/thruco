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
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'i7 O=[o$u|Z<.`aPBJ`v/[jIG+D-TxTc+--ScztwJ|noQ>dC((~O7c!3l8EUkE*)');
define('SECURE_AUTH_KEY',  'HvA`)O@BC2&uBPhT:T`H<2yO.BUHtkp6~?;)gHdJ |j^+K*2)]|u7|_~>MI~:Ayj');
define('LOGGED_IN_KEY',    'i|ra<3}f=QWi&!kbJ3|0~>LsT)R#cdb;rvR48w-y$;j2PM5/69kqIA/%u<b|ZY@O');
define('NONCE_KEY',        ';{yVN(@--#+vWx^i/h|;X@SH:tx|I8`)(f+J^.+?-z~OC^- }GAuy{{_;r5aka:S');
define('AUTH_SALT',        'qvv7XW[PZHe^R&b-&F>&$Jhag?fs/+|57+oxR&x6+JcQ!ZnY5`iDBYNV&,OS]X;E');
define('SECURE_AUTH_SALT', 'E~SWp+Y{e4Il&>%<N9sn#4-uRb^^.x-[j9PzDCobi&*TswtrKy2yxjlK{O<?tXR=');
define('LOGGED_IN_SALT',   'Lvw0BeTW2{azWwI)AXN.&8t)0VYW2oQA`}cc,!(32b~t&Ww8jsIj4s,Cdw~]vW#2');
define('NONCE_SALT',       'E&S-qn $cSpG_ 5AxU}{tl?ddy$|b.eRJ|&-uzODwHJvtYr>p[C:F<,@_vu^R-|p');

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
