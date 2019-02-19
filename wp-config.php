<?php
/** 
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information by
 * visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sddb0040213678');

/** MySQL database username */
define('DB_USER', 'sddbMjExNTg3');

/** MySQL database password */
define('DB_PASSWORD', 'x6bkI&5n');

/** MySQL hostname */
define('DB_HOST', 'sddb0040213678.cgidb');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', ':H,%#(Hk;Xqj]?e<f^g6GqtFZ+vfW2G?LvHC6so]J^AFZdte`92w%!IYf8*mpQ{T');
define('SECURE_AUTH_KEY', '6z;d{~*;R(_h+yF7`lS+[BUajtp<QehgJee=6K6a$E/aP4#?xb@}#bN7+B]bux]F');
define('LOGGED_IN_KEY', 'G>OER-cASG$D{3-w,nF-8b6zl3$5[~of^c+}t(.iB*.]OhRZoxkJ[@@H# @-@wvG');
define('NONCE_KEY', '8T61{QydX@6r2#C,WKWKa~QcOUDSCNbNVu1rmq hW,wK4G]tLSuUbx~ls,!&[Qz0');
define('AUTH_SALT', 'M4~McP 5FG/:o/Qs@t+0oX%-D4G5DQw!kkzset[iwD;}bZGcCP9MlW]bAnP]72rr');
define('SECURE_AUTH_SALT', 'rE-2nUNtXOdE`2c$EA/lL5M(~ik!$>fHByjl8S3rVj;GgkdXiQ:RT e)KvTK;(EO');
define('LOGGED_IN_SALT', 'KAv(-<DdfAsqsBb<Kl5Kq XH%(G8L+(9l6{:syx|w(BZz-xFo@WY%MOqwKN}Lces');
define('NONCE_SALT', 'y6^rYVC8[;,&j 9&;}hw/#[YY-dc,LzX75+>.!w`Un()[pbl|_nGzP|:,nC9+};Z');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_table';

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

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
