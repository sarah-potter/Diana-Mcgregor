<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
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
define('DB_NAME', 'dianna');

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
define('AUTH_KEY',         'leXi4d,(e c[F1)M}81f/r!x-09O2Z/C``gdnqI?k!ntcX5b9Ncv-oUu^toV.?TG');
define('SECURE_AUTH_KEY',  '`L(aNhIXWPC;c:)@dX3+GB(w>S#qj&hb5@b%$G?Fa*H2i;D.Fle[l`]ZY_[!n|]`');
define('LOGGED_IN_KEY',    '(UNFzzoE]]gf$zjcnItDPrG_{XDFnEI9oY4XgMC_6pNMJ8)mNjt2!s_-lWZFOZ#+');
define('NONCE_KEY',        '.7v K6+cD)Fe5mT9+U2$[CDsbHn-4ZFC4ou(F<~Lgjk>;gZ@[?k$/uB1PJsLpW_c');
define('AUTH_SALT',        '[Noj&vqKz:5qK|N@GS_kn-=l4M-l5Gw0pBJ3ERQI)zG;|-]&=?=iat*R;-p6xS$:');
define('SECURE_AUTH_SALT', 'PKFyjmKyJ&/?OM<eD>-j23|c-:1JednSbvkZeUP^V(Ptg&1l`x0Kf>;4WHlkn4O#');
define('LOGGED_IN_SALT',   'FCwm1heiJ;m$qxDYG08Z8|84?t@W*e+R{NnfIrl1i+U`m`TGhkMG36r>Zc.0-jmE');
define('NONCE_SALT',       '2G;NhsU.?!A=_m6N1^9@<9O_b+7M~dz|3!-cgj.fD+,_|Y6N)9L-A:Jw5+s824`#');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

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
