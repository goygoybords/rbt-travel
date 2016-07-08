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
define('DB_NAME', 'rbt3');

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
define('AUTH_KEY',         'vdQlYMcR=y.>{6b[{S|07v,S:{WLmf:7!*~P{6{i)72>ZjS4X)&Ouzd9t8t9M{8;');
define('SECURE_AUTH_KEY',  '#(G#i#ZsxYj08*EZub3u mm~V-.Pj+~xFAhvRP<T4`4IO~~[Kdh$D|>#uG6yUz#2');
define('LOGGED_IN_KEY',    'ANLcG +#41]~tuIw~cedRDN]}Sv=?Q<>:x$|mIFm=O$&`J_t312Uvc53TH6nVY5}');
define('NONCE_KEY',        'eo]!*9KSK@v2a_(_0c<ezg~>-?5e$3x.WJRi8/lR-zx(;miyxwk~]/o/xx*w=M`5');
define('AUTH_SALT',        'CvkN+<&-f~TS`S=W?(?a-m]v{bHHm6rvXX4XPXu(xy?f Kva.Bik83IA#sbdS7M4');
define('SECURE_AUTH_SALT', 'fnAtBeK6{Gwr2`0TkL!i{$zPjI,a2wv$UI):;d[AQxL!I6ljTAKPQD7:$DKP)L%-');
define('LOGGED_IN_SALT',   'x#%nDtc5u.r , UnSgC%hwv6 ]Y/V-;v]VdFY~LulEgP_7~>MDPt9smFX8(HXbrB');
define('NONCE_SALT',       'fgON8TAHNhhU<62e?=8qsPg7U(}LD=hMTK4cyLdkq01*^#^jd)ZFOdx9X#)*:548');

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
