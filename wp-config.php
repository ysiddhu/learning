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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'learning_db' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
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
define( 'AUTH_KEY',         'xO7g6~V&9AuU@g-$s|nNOWu]-:]zv3f>i(Y=xvtBH3^$u+h44$6*Xo~b&z-eW/cf' );
define( 'SECURE_AUTH_KEY',  '87NC.mgg+){=iIC$Wk)y|TeXEof[$|2J&X[kFkW7,]+M`b}E^9DGCkUqu?OW67ES' );
define( 'LOGGED_IN_KEY',    ',?a;Kv^O=czTE:8/!^<ed/rnZ:82k2tBd.!m1iAvc5BBj@2sj=b*<~n&y0:J[v{{' );
define( 'NONCE_KEY',        'H{YGi^Du01RL3L`za.9aeHu|;/nxDO[FE9G,{?Tm8VMb!#sJ3VZlTV:M,g1@SRv:' );
define( 'AUTH_SALT',        'ntpU0@4>9ePLi|RjBVXI~-2jcF#>[w;)A~7f@8(;mJ+ Z$8E}+j*|k+wYlA.2PCS' );
define( 'SECURE_AUTH_SALT', '1,Q>8vz!|U61E2Yq(X75$RS0{S6pY@DE=q1tHA:M.{LpS/*P%9)pGl-fFUWOU>5S' );
define( 'LOGGED_IN_SALT',   'wE8DE%!:.AeUp5GXBDDJ2!eOe**;+jJbeDOtg69e2GR(`m^ o{?6[nm5]sfBOr$~' );
define( 'NONCE_SALT',       'N]vU2oUv!Pj]{tg@q0p&B4SP`G.U7J_T,98?yRq$Bv@xW.n0!y5=um6y,?1{k<,X' );

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
