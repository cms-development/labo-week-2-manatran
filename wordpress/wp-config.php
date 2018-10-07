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
define('DB_NAME', 'cmsdev-db');

/** MySQL database username */
define('DB_USER', 'cmsdev-user');

/** MySQL database password */
define('DB_PASSWORD', 'cmsdev-pass');

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
define('AUTH_KEY',         '8l]_2z*|.F*?7oIjJ}Y0(g39.j1jCIW|3HK~>{/v)b]|b(j|Ip<[5|35MCGy$Hz5');
define('SECURE_AUTH_KEY',  'J^vlhxX^U50 $EzXMd3ZD?70PaAV`K2}>!&.^9fN%fA@/!|+[#nO!x]ie|.W$:*/');
define('LOGGED_IN_KEY',    'qNDS#}cSW95S)Rn8[EPC!cTa7kZa`Tq7|&-$A!D!QRnXE_8tk;:Q(GM5*kM|f!v!');
define('NONCE_KEY',        'EZA6Zp4+T}yMsDk51hJ7=9h,N:.M[im?pZ~({EDN)fMA#U*FvOG&tZ5>N1[nS:5U');
define('AUTH_SALT',        '|qCAmT4;T0]j]gvjq6T%e9-RJe7El,i,q]u%U^x.Oe) 77dW_<sjd^+jvAMD6.nw');
define('SECURE_AUTH_SALT', 'cIsp?zs7kdm?8KR^<@dx]NILCS.#F`$m[TU~dvMI=5yk22(SE[L}OCou;o^Mm9P`');
define('LOGGED_IN_SALT',   '4;//Q3Peg2Fg7aP3%>%dOslIe_L7F`iV5wEJ#Jo;rS0lTYEC{YI=jDy|7YVb?qRj');
define('NONCE_SALT',       'Wz 992tw(q(TsG&hXs%3gW(M-NTaf$rR!1HhDc]5||G16j@wk#M]kEy,?{{1o)f7');

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
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
