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
define('DB_NAME', 'mysait');

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
define('AUTH_KEY',         'A&bkv50lX!*4AEbZj8s!9nVt^@AvT<|jG`:)X= 4r20nya=ym.h.6SoXW/nxCSB6');
define('SECURE_AUTH_KEY',  'v-NPZd#+$6|^Vuvo/~Ujl!s2*B!6{x7$xc` 3 [hRSAx@<|p|y}w);!i|2/*?I$f');
define('LOGGED_IN_KEY',    'a1LLL*F5P6IHS?w7y8[Hsf7KB#}_HT>-Z9&FtmV=]t7# R}=km(H707@Zi[~g-^K');
define('NONCE_KEY',        'nfVgZkLQJ>8>Es!Jc{F@_farz8W1^~nnO;tDa$/GB16EK=3|D{;vB_l;JxZqLNPN');
define('AUTH_SALT',        'Y+H>ZOw5tE^T826)|=@hdnq%YE%%,Lw&9c|&pk@(ai{VtH|U Our~pOwE<lE4{b*');
define('SECURE_AUTH_SALT', 'h-6o]VlC<A#>jU~#$!(smN q+]3chSzQ;ZU3CVe]}]>%EtKr3Aj>*x={<^&j$^{}');
define('LOGGED_IN_SALT',   'BbkH?``$EKx4d55fs}?y6E+@gz;&ROXl+YecIbg`#j}[Zm}%pWV3V4xJon7<@B`7');
define('NONCE_SALT',       'DST7$Y(!-dywh:!E3R[oMm7KcWNZpw[ExOhjoeYbi;.ojQ9L R}Na,gMLR^e_gFm');

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
