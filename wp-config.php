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
define('DB_NAME', '${DB_NAME}');

/** MySQL database username */
define('DB_USER', '${DB_USER}');

/** MySQL database password */
define('DB_PASSWORD', '${DB_PASSWORD}');

/** MySQL hostname */
define('DB_HOST', '${DB_HOST}');

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
 define('AUTH_KEY',         'Rmbs:HQtI@WojU+<[b}L&ARv+1}0ixxtj.2}58n<-36Q7=!u]$n<vo|38/TDo+E,');
 define('SECURE_AUTH_KEY',  'XQp(fPmdW|u7u[=Z}gLv&0s)@qs]QR<#_d2uX^jkzD?Z_|JT(/e|Dh+(> x9 QS~');
 define('LOGGED_IN_KEY',    'c++!|jn?yC4s.ZW,cTFNFrZ-z*>mC7>|u=%C0W%3:z>UZ8I6[,*6B:9JR;:Qy<sv');
 define('NONCE_KEY',        '0+T:La!$&3*2-:;{Fy2S#++6^Rs$:.+0)oy5s`7,({FhI|1J_J8}U4?TyIX-D<i&');
 define('AUTH_SALT',        'ERdHUX@T- 9~.:_G_xRtU ;t9GSPj3*p=-:`0uS=A[mL{|lpwT_v(~%(P!:9WB&>');
 define('SECURE_AUTH_SALT', '2jD3?XrJnZQ+@>O`b*G;KV&hfm=m[_y.->+s6Rx0P/XJo~Ys=`~Xr]j[Q$H/(q}b');
 define('LOGGED_IN_SALT',   '9b<^={X-4Fvk.)T$s AE0QP2Cv&%L8|pC84!xzKHwZ!cj26L*/MS:,`A6Y+dueB{');
 define('NONCE_SALT',       'OrW+`F[)LD3@UM1z(i1pYi?BeF{z%nW$z^Mt-qycV|bVPjSp@S*fRB*S.FXybI-Q');


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
