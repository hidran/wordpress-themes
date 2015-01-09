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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         ']PI[$a32x#,X`9mHKrU)a8M<l^RE+5G#Wm+yYXZt[iPXwxpg8fMM|E.QE89pxvRo');
define('SECURE_AUTH_KEY',  '%[u}(;~:{;>I](^nZcDl.L?,v0q6R<]K{l.J.06r6h^6&jIe]xym/)$&0/]v%gK{');
define('LOGGED_IN_KEY',    'L86_ks`A!:c@k) s0csaP,=aW 2`K(7y*VT85A4KtXqzB8w-X}F($BurMvw-:~i4');
define('NONCE_KEY',        '&~#4)w4yl&dn4$Q-d0Yuak6oAF`69zKD#K%i{)H@K|.)/IEBIzgfv;GivQFfyuy0');
define('AUTH_SALT',        '&b4by>CMn&y{6p*u3dO2B~LWMBZdrNf^8#po[n) I.wX8kt&>EgtdxCGY<qkoHK^');
define('SECURE_AUTH_SALT', ':,38$uVL0=fc*gg6q)d%oR*L#nWBP[w/^.UIn(I1oug%=A{Rg[sWbDc0p5e+tQ }');
define('LOGGED_IN_SALT',   'V)f_8y,:ebeXW,,Dh@Geu`L>=^Lc5W*PEJ?vM%XzwV# Q|hgur*@^|U16VD(*om[');
define('NONCE_SALT',       '(xUrdz~ccw&9[gHv!{L.tLg{8cvW*B}Y0>j1O_G`c@!|5|lGQ- Oo{_b4[#YiVUM');

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
 * Change this to localize WordPress.  A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de.mo to wp-content/languages and set WPLANG to 'de' to enable German
 * language support.
 */
define ('WPLANG', '');

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
