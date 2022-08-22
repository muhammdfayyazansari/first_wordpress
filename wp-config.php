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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'U]GKpl,}i^7o3%,(S96Y/,Pj_3OL[K=7A<)Nzbrm8zp~<^Vn0Co[.a~Zb79d<p1c' );
define( 'SECURE_AUTH_KEY',  'mSBu`&oy{5dpKAmO=e5doJD@m$_B?xywWmu#{cdy>eC FP7t6@>3d>eL6 k5Q.~R' );
define( 'LOGGED_IN_KEY',    'g)(v?Zh]+xY(dq:dBcA&1g89e+QP~a%La+hgpw0YX|-!1L(_gBjiXS)1jkgd!;|8' );
define( 'NONCE_KEY',        'rLnLXb MVc28<]GW&O!<V(4~bh[9NI|+Y3,xr~+-0%ovId6JTiE~U^pM?hZB&PFG' );
define( 'AUTH_SALT',        'zPp@0IDjz9|I2v%8^]yq>L5%edIJB3%]5[BQGw=}t8!u&9CQ}jgS!7apC&G3|YfE' );
define( 'SECURE_AUTH_SALT', 'C!?WobcPV(vk-C!N-o~)#~e%uA+KG_mwb1xt){;)ss#|y 1vycn-*K0/#zXKZQb ' );
define( 'LOGGED_IN_SALT',   '+r$B>u(qF^]#V$R6qeGFTlX9k[eAf(@2pMU!bhYWBp=kf.;n4{6n+n<!I0BPg.wk' );
define( 'NONCE_SALT',       'Y_PZ-Q+GHosQ$.s0CurD&$6(DQ!7Hv$%(7V2+trM;u-/p>aiPS<d~D+DZfd (,[o' );

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
