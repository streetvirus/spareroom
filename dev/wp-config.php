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

// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'spareroom_dev');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'spareroom');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'ZtKPb2y6pFQqVCR');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

if (!defined('DISALLOW_FILE_EDIT')) {
	define('DISALLOW_FILE_EDIT', false);
}
if (!defined('WP_ENV')) {
	define('WP_ENV', 'development');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         ' z8-WWZ9&!OyH=tnVhof qxe-QZXG|Ilp|z/=mV#eJhyvWhw1uk2 s[$wQr*Zv?z');
define('SECURE_AUTH_KEY',  '{)h^}J=Z?Zqu9-!67+;WMIWfL&x&;m#XJ:puW|9tX@ly@e{*&9|j3:pD.I_*h8.n');
define('LOGGED_IN_KEY',    'U85.+O|[H@s4ku_4j?Cok~4>q,)B8o:__|6qp>P?7]+f`}zn_&0jy,tpq4 /fKR(');
define('NONCE_KEY',        ' n(ve5T OLW%OY;:@>JLN3epI0RgskF5X| `;<7/Imb!y4.+o|CYO)Vqi;|{|#h)');
define('AUTH_SALT',        '|g?.S@()hqBx`Pnh<T=S}]lA%805agm5+@x)}|f38=p-Ev}P7po%_vH+1E6-zh+~');
define('SECURE_AUTH_SALT', '%Hc,*||rs9}^6pIM2y)`4=Pz`W(wZzPc+*mSNB-a#9y%wyWja<B7NU3;n(|}%!Ki');
define('LOGGED_IN_SALT',   ']g}+/7+gz>XE}+TBRL=KaDQ-1e7C=>ppD-(GzF)PtRP^W/7${QSLjURsY8JDGvDC');
define('NONCE_SALT',       'dwaiW)-i8e+2}|e{p={z TWCp#%+X-Wrqw:bR6A,Oa|uZ9v][|x+|ir-Jz4g7&&T');

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
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/wordpress');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . '/content');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/content');
}


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', true);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
