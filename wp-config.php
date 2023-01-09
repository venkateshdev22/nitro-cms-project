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
define( 'DB_NAME', 'nitro-cms' );

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
define( 'AUTH_KEY',         'AiEaC*=nLi;L=8ws{fC{7>:*4((K2hYxDGlWt3Z=(<#?D;:#,5]MCRZHlYmM):gy' );
define( 'SECURE_AUTH_KEY',  '9Gh):u2AS^*,N*AO**VAc#)-<-n,yixmN!cM57o%StF9Bmjs>BfT UGh<2.anQ$3' );
define( 'LOGGED_IN_KEY',    '+h!|uZ6ek_eSe/49&G]yx@&L^&f{..4#bVU~D.Q$ ~.I-Ic`SNW9u`Pw7EP]CG@[' );
define( 'NONCE_KEY',        'gEm?GtwEWAy.69R%|>Ie>]iLq]^nvW$}(B%M3/zUFU,vfqcW)aWwR OTGj8bc/t7' );
define( 'AUTH_SALT',        '/H2cKS7^W0g_t[4sT=lQ02X 20q|5IrrV`dt)/GWj>YFdzZ9P:%v]+aN;N[~iPd,' );
define( 'SECURE_AUTH_SALT', '6,IoM}<:j4LS|1>q8m4C`(p)>9(#%ps5igk*%}kL?}a$F(($Q:ybR2V6P-w$oU(|' );
define( 'LOGGED_IN_SALT',   'nw=`b6j]w^Qp/ZnMrr#K@:|]>l9(=^l16u({2Z73{b5dZ&0u`W<ehh{nLfDI,<&i' );
define( 'NONCE_SALT',       'NGNm/ju,wEbU$7Mz%LH2DRBr GD9{Lb3O-364Ib~hxCssB#ZK6zw)]+&0BxmkvbK' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'nitro_';

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
