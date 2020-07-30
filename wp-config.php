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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_mor' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '76(Lu0WAb;:X-eVO^LVA$KdL;l[-67.;)Yy8zL14c9`C]#uvlO_UmC9+LK;Sid 2' );
define( 'SECURE_AUTH_KEY',  'J9`Des!DF@*UH5$,7*h7M=f5Djqj%L*lO;wW.B-oRJ-5_vy<>kpv~rY%xe7$Ng_3' );
define( 'LOGGED_IN_KEY',    'YJo6>)B!>xD*6,bL::$vQR7X,k/N>/_rcB74WZ>uWyDAw9J~,-Dqi<y?T76jD(lr' );
define( 'NONCE_KEY',        ';tH124K2) ZP7T<z(1S!k*{A,[2=wl]dw&e0ZPvBr$l*1L& U{!vl^%-+_KFF?-9' );
define( 'AUTH_SALT',        '*F}nGOOv^_D4IBx=nX yEs>IeDWCZ/n{oYY-9m[,XjKl0O7E$)q;vl:St[ 9{$^r' );
define( 'SECURE_AUTH_SALT', 'T@Gu3Q/NZfyV74*a,g^p0A(VdFsLvC|fSu^7[)xGl`v/%bi`UJ9y=mM8bvOHP/a%' );
define( 'LOGGED_IN_SALT',   'K832_ISv.%X .n,yw>gbYZ,s|+9=5Pz`AP6y45$c!a7CU^ -SYJQe@=Ed5/Qce<}' );
define( 'NONCE_SALT',       '>u)d:hQ@iRO@O hRUQN;(QmPacno-hdl=Vh-xqC[]KH_]OGY2.ck2_`J[AjnA*oy' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_mor';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
