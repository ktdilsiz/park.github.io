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
define('DB_NAME', 'test_db');

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
define('AUTH_KEY',         ',J0[:+GBb?K: ^ o]]z1gp7&!a 0H;uMGjHKIM#[-.kKPnC(^:9l/C}}xLq6}K]I');
define('SECURE_AUTH_KEY',  'g:Q:+mB08|~KgBtriDh{oh^1[SkP-i9f[4eb6yp,W@gDQzF(?z+U`bk_]Oie^=/h');
define('LOGGED_IN_KEY',    'l#Beaj/p1.[D#ik0IM}X8hP|`+EX._hmNrN7~7y!w?;9pvP;QN=!zn_N:he>mB*v');
define('NONCE_KEY',        ' FH^s8ZGjrt6CW)mTA`>dM+9K!niGtWPdY[(cqSoddtYBFk86,zm;NLLynl7siOT');
define('AUTH_SALT',        'VL%G-zi=}p5lzqis!p| ?ou&)SjZ!S@E:< JMdK_LqSWeFJE-bV%}%N=ehPWzcPr');
define('SECURE_AUTH_SALT', '7VHt.KdI3rp<.ACJ2W`EAN_ym&C:Qz_AvgUrgM0{),oGH;^LiL1sjf3.6Hy=,tTj');
define('LOGGED_IN_SALT',   'Jc2DP>08{K,y]$,l#o]q!V^ph)AeOl*# vsLPGJi)#7%n3|)3~?>eIWq6ui:TZhf');
define('NONCE_SALT',       'yG4W4(e|DO&x`v:4[Y?uWm2Fmbk$ 3xc:-`cM6,,nfHH-Z2!<(-/%8Kj;#mihgDy');

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
