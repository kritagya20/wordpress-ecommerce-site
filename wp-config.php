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
define( 'DB_NAME', 'wp3' );

/** Database username */
define( 'DB_USER', 'kritagya' );

/** Database password */
define( 'DB_PASSWORD', 'Kritagya@2002' );

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
define( 'AUTH_KEY',         '%Q)kbrwbsd,z0W-g@>0Y<M,jun,?hkoI;`At+^$5L-Td9I4.@km8~yn1~3Wg=t_e' );
define( 'SECURE_AUTH_KEY',  'rs2^:q~5(D!,#DU;SbaN7/4q56* `!4MWdp&l*jt=&Q&Tc-z6rq/QgYB})P`kGx$' );
define( 'LOGGED_IN_KEY',    '4tWgQ5p5:`wP~,{oxNZb_Zgmj%1>Z6z>2./2bfwd.JYoO%@6z~#qi/5>b{?|_8)j' );
define( 'NONCE_KEY',        '20$;Ev2DiNYH!=<KN&~Y4.+1 HpWr(:#gc.j*V>p@U*o7Yum<0;!]5Xrf%;kghso' );
define( 'AUTH_SALT',        'D]waLPt|(-%5{#&nwS2wu|e87sHC-]sSl@iqH!=z%g+A@Kd1<eJtS2+tqr7D$gA!' );
define( 'SECURE_AUTH_SALT', ' 4g_U+6)=t[6+7~(?L,PH#qKJ_xgBzFzwI^!23EZpN~/95_nm0`Rd9Sch9.cd==8' );
define( 'LOGGED_IN_SALT',   'AZx)5;B=b$LDu0XR6%S&,WW)llJjd{h}1HP{YQaxTs>88HfCi7(! $5Tp74k3k4*' );
define( 'NONCE_SALT',       'eUX.*Oo27]rw<QCNP1O{oSA-!cUSjEnlvU[alG-0EfV/Mh`Tfs~(b1>=+VDjs3_.' );

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
