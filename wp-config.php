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
define( 'DB_NAME', 'ghoul' );

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
define( 'AUTH_KEY',         ' H0>ucrKMaPM<ko@t9T@D!(FK)32 &r#f}kOF1{s`<*]V) IYn^60yFZsqz^r66L' );
define( 'SECURE_AUTH_KEY',  'LpWaMh d(H%vzu><RrArV:M&GkQV@#DSSpP_b?}lJ2`vA(Pfu.Yyt|Rr)*)j`~p(' );
define( 'LOGGED_IN_KEY',    'Kl2{y,5Ou#{>UP?1`D*]=<d];t? Q*%Sm?&L?lhra& qsmO-y*0N%QGj[7ud&pWK' );
define( 'NONCE_KEY',        '#tk553p`pO%>m1u$+5@}|7o.65Af eUd~]NiC]wr!Z@j?t;pUXfkY~WBa4D_}sgS' );
define( 'AUTH_SALT',        't:RC=;N-oK9YfK6>Q5pHAx`n8g?d1.FhMgE3jBC+T2<H*1*dP}HLOW0K9}IEVzX@' );
define( 'SECURE_AUTH_SALT', 'LfBhSKv}YKrIQk`j$JdI8xFSO/0WJhH+BbDal$U}IBk(O7Tc`>-p4[{%6m7Up~CO' );
define( 'LOGGED_IN_SALT',   'y$]O-21-oyvRB^}UFy4n&VWmY,+!X5smw@<Cb ` 5%&o}.V!{7)K-h. ]OuGLu%H' );
define( 'NONCE_SALT',       'vO:?9sbc8Zi#p3sCs3krX8cyiQFNfHLNT-Z5k%YNU)xzS%Pt] X#F,Cyavu-7Ne;' );

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
