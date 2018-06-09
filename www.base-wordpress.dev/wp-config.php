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
define('DB_NAME', 'basewordDBroa71');

/** MySQL database username */
define('DB_USER', 'basewordDBroa71');

/** MySQL database password */
define('DB_PASSWORD', 'lX0nheQN8');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'Z|]lpWlCOS9Y4>g^cgrNJ04dsJc4y.bpxTtL9xxeiEPaHP<R[1~:ks~ZWDH_~VdKk');
define('SECURE_AUTH_KEY',  'v>o<PXP<26.,bQ>7.<juO]D+]SW1D+#;m#imHR[C-[4s-gd9:l|hlGSvckB7v@kg');
define('LOGGED_IN_KEY',    '2~HN|K@ggZO[d[d8YQQ3n>f00>0rF<u*WPa;jjbiA*O:;ldpDxtpxP_@R}4}}h4Z:');
define('NONCE_KEY',        '_:_wSP6AL.2~_eoGZ0CN>CzhCG:8K|hF$,0n$jn}z!YkzQkBe.{m<emuPb3<jubj');
define('AUTH_SALT',        'YY3xPiEPx*WiEITL<{mwOt5K!5st~WpLW~#eN|}8v0nv74![hw!ZgNn3^{my$Xj');
define('SECURE_AUTH_SALT', '1~|h0nc3U7B$>ko0B@0ozXEm+TmHEQ<y<PTalHL2DlpWW;AH*9x*HlGZ1CO[C');
define('LOGGED_IN_SALT',   'sN>0nz2u<fa6A<<fqyQqM7uS9DO#5_#hP#;+]ht+S!Zh[8v[ghsKd9KswR,ckvNnJ');
define('NONCE_SALT',       '!:9l~p~9OHa#1Hw#~dtFV!0@gzrUcr08G[-dkvCVNdCQfE7My$$XqjyXJY>703g');

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
define('WP_DEBUG', false);define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
