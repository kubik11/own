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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '|59Y_K)q-IgXC7]rY.NNpB/fhv4N)6R)6.:v[W??I)HLsYNO5KV+dwLF2?O35N^2');
define('SECURE_AUTH_KEY',  'MbET%+b#i67:iV?UM ^4Oa?r?+][cNo#<lAkH)d&t#h8cx=ul!g5pS1(>B3>0En5');
define('LOGGED_IN_KEY',    ',SwVML[dp?|Vn03$Zh<Y[~`iDg2FWvaV$==XboO?Olw!.AY@FF>_!PkZ(b6?l6Pg');
define('NONCE_KEY',        '@VS(n PH.+OB**9 S5`oiVt #fKFr24Mi:s*Ouyl,0jOIKDUpy= 3t=]F~4M8&![');
define('AUTH_SALT',        '/Hc9pWRx7FG>TqqUAvXP/(>#Qf;4T0lUU:BI#4QKk0TqPqcz)7J!h?_RQaE]q_-*');
define('SECURE_AUTH_SALT', '_kpDW-(>;-$I?}X;{xVa&NZD8|R<z|ma~%})6g(sGxzWnF/h=pEj*[CW;2RXm6LQ');
define('LOGGED_IN_SALT',   'p+>&fYj(,VEB5Z7SYG@*77t.>P6).![{OWsTTR;kF&&umH;2Nh*kCN?]|-Y*ETwp');
define('NONCE_SALT',       '^{eCp<V@4+a#3uQcE:#));DUNr%>;t;b:-^|nVFLT/O%b$v9^A*w2us8+PRB]:Yn');

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
