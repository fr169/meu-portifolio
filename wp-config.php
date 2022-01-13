<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'portifolio' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '7I8RvH$,]Y.vh#g}&YPA<?v^8*o8KC[Q( tk>O(TV#ub}zY[n{U,aqM~jW}a,iYa' );
define( 'SECURE_AUTH_KEY',  'No(S=*||9Px].CWzY#n;06/=GtVKP}cnw_do40/RImZDqO_OdRz)S({eS#<r |IE' );
define( 'LOGGED_IN_KEY',    '{YL{9bQA:g.%V2ZYs6/NP`~^]5*zD*KvQ-XlqL5W VfF=KNZ5fdTb2W0TCJ{u1H/' );
define( 'NONCE_KEY',        'd_o?J91fh/!k`~FxOb@im.n~5s#c{n`76Q#ywg@2dIGvYa:/A$`ju686nl9sb0}L' );
define( 'AUTH_SALT',        '=uC.AX6<}4`6ahkF+cUJ.NtN9f#|:mq+[k;{mLzV}&kt}. o$POH%@T)w<fkmTf*' );
define( 'SECURE_AUTH_SALT', '2:js/:?3~*oFdv(`iWSkd4z1r2H`Bj`&)TP75K$_?i0Zj^r|^&k.m=mT7O]ljPP2' );
define( 'LOGGED_IN_SALT',   'k%o&LLG;@LZWO8hqO@Y B+46ILCa5m[2i-x}Wy!`c!M35.E$57_ZX*vMkFZ%6zV|' );
define( 'NONCE_SALT',       '~ZfX#gu~qQ3Y}$2A.>sJ]`tDp]Y@3gx#</,BS@$2{;e?}j[53Yw~!96G>y}(5:$D' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
