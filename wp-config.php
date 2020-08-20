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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'password');

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
define('AUTH_KEY',         'L9|too-2GGg^z|)CRK,2He)y:R|B$SZ`f9^K=(E7,z,(&R8V}<CN}^{{*5rIqEl3');
define('SECURE_AUTH_KEY',  '<sAtx3_bgV3S!]JlI@[!>snJ~*)r9- c[T41Hp2RI4Jts@z#u&N18g:)fd}cZ%fF');
define('LOGGED_IN_KEY',    '@gfEPK/yC],4@Ra$;BS }iqnpuh[p!Le?wr@^zIITz$fmt~m,6yy^E4zO+h-6*cu');
define('NONCE_KEY',        '`+;i.k6F9o<8Z.7LPWrE?.mN)rffAM6tf/%7@s+|%(`k`+ZvU)}c+prr^+n2Y q9');
define('AUTH_SALT',        'e?qFG>{y/2)E7zjovDkQ[CzKk.Wu`;-Cajf>y`>FjOW=PlSE:~k=tElnUz{9Er>r');
define('SECURE_AUTH_SALT', 'nPf^FCCG&al6A=CtwGHMrH*iP?tk0];;s.Zk=r4&dK0?ujy$$MSh,6*8&~.dKURs');
define('LOGGED_IN_SALT',   'h!JY]wCCHjVs~z!pE[x88{!~7]XYw*=Jy(u!4[4.iNuM?5_L`+cHDG_ZPS)jxq,>');
define('NONCE_SALT',       'EBmP(Pef5n<d~}c2M@dFrf6F:m/cT1umuyM_Xu]dA[T1!Z7{:w2L}Sxy#G/eKuT7');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
