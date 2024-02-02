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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          '1h>*mrY`zq*mF.r0Nyw9HIhEUH|l9#Wl?%}x#oc&uQ4m0~zFA CPAtXc^5j1#g^K' );
define( 'SECURE_AUTH_KEY',   'dG}>us}EkOl!5SJ%rJyc:=&KWd=)*[%XbEQB:BnVDzd5o5k,ivCPKq>/S{)?e2$]' );
define( 'LOGGED_IN_KEY',     '@Qe&jL!eV<}n/+>_!KS63=oNS+iwZ}^o!OpkZ{7/#ER?E^5NV:SgeL/0oX9guv)1' );
define( 'NONCE_KEY',         'cK4o}0dy-[vCIMd* *#EE-bSO!U9RA|X-#(1{1:fT+5yEQ]]jTv=-[Q+U3D)z$:C' );
define( 'AUTH_SALT',         '1ygVV(fiC/5E=36YV(,aE#<uk!E?eSnMN+/BLH!LAv.q-mI]-*%%V8WKQ.<imhB6' );
define( 'SECURE_AUTH_SALT',  'bhJHxAyNh]Jn(y-KN) Q},?9ttGK:i~jq.2sU[e n{_5i1kw(=jqdoHd)f%5YqYX' );
define( 'LOGGED_IN_SALT',    'j5uZBZ_t@@%%vt[R/4%B<qTK$kx*I3gGK3VjFmhykp4UYeZ.k9({Xu~hoY!e<R4-' );
define( 'NONCE_SALT',        'Ck{IOPxB{(a5rSzmf*J?L7X6yJynlL5&+D&SU:` prE+%$9?`KRo#Cm5aBHn8hyz' );
define( 'WP_CACHE_KEY_SALT', 'E^n/~+Wr1+b,4)+(w6^DH^C~g(}d&nS-i)oeG[3]2Z+&fO[`2uJM;TTR$N6Fjd3Z' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
