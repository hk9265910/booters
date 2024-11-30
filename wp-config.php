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
define( 'DB_NAME', 'booters' );

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
define( 'AUTH_KEY',         'S%Bw{|5=,~^sp`S@{EJcPpCMg_~_NUsoMLb{NBkTF_M3+&&jR/HtJje=A2+Um ,*' );
define( 'SECURE_AUTH_KEY',  'g`I%y+]hpVZG3Qf~+dFCHbEy$mN3kF~$rAj%ynPNW9b)Od,#>b,.DaV9foVcZ~@X' );
define( 'LOGGED_IN_KEY',    'TU+GVahV{B4T_SPe*9I*z!M2 !j#v>*HO p8UH_1<-EmSO+]w bL^Ep7p`<Ru:?}' );
define( 'NONCE_KEY',        'W[`xPt4iqLxsF?1s>Gz+rVuK@{oazH|eCg9q!iA->i6a1Z$PU2=vraR:$65RlkK)' );
define( 'AUTH_SALT',        '@8x_(B3=i(sSx|f`n!m}q:LD,`Iqf<H(~--YY@;*(J>aDj1Veuxg6v ;[-MZu2:$' );
define( 'SECURE_AUTH_SALT', 'a.szM@7{dXZ}#7Twr%Fp4eOTh>4~y>3-iw._xiBWKX^l/9zT8Yu>T;4@2)!JI#k-' );
define( 'LOGGED_IN_SALT',   'SNo{ndIRzzSbI;w,+x@[-N&.)DN8C0^d3:%!d&zF?ZEDyW_)T#r^5dB.2aLr3;cO' );
define( 'NONCE_SALT',       'sJ,<U@l*+KPEB |e6*L-0HoQP20PcMC5/!qywd])Du>UZ^2:5%_(_P:x?@N~DdjL' );

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
