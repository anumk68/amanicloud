<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'hafprice' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'UjhIm>`1~oySD#F>L?e^<ZHt7MqYcWlwgSrioZI_#RF_[L`TGc]oLSbqIOTQYb*J' );
define( 'SECURE_AUTH_KEY',  'T>3 JVm/|WZ4+P,7<2+n`n-p5P*H3L]F9d8<:th-PE.>6uKn%[5ErBiv$QPD}a{T' );
define( 'LOGGED_IN_KEY',    'N!9X5n:qHs>!?EfzOJ;QG|3xA$WY-|Lf6/cIp/&MQH@A7s*]h3aY:qtXFiC_}}fl' );
define( 'NONCE_KEY',        'oT9BJ?+q]iw~akU$EAfC&(ay9mc+5D7Nj5jt[945lp*U+(l K gHgOY},_F# 8[u' );
define( 'AUTH_SALT',        'z&zn*A|1t4.oWCk.bVl/yaI]Fs?e{Rkcgq*U [tOV$NX<LLl~uI0c;<bW|91f>hb' );
define( 'SECURE_AUTH_SALT', '3z,m25y6I9,{tcXD}D7QwM2K^B}MY4>/go_=}M+ Qp3>+,+#w!g{:uu|`,qcP]#,' );
define( 'LOGGED_IN_SALT',   '7lrMm$T;GbNk{4~~{rOnW{c>kywT=7[4.rm!:f:67]Q7)Y163YL.qTu|-DR]ZM&o' );
define( 'NONCE_SALT',       'f-5Cp=@hu6*2VB01Lzp&P N:C!)|o]+.T2TWq7w2axb/JP)*ql[P~ClzXROc9_v$' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
