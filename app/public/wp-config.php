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
define( 'AUTH_KEY',          'Os4;do[eeoEeF ,<`px57*nwTbYjCWmtS6[LK=tiqel-QoI&>,,g6YI4T. Vf<r3' );
define( 'SECURE_AUTH_KEY',   'A~4,/8>3_0JVXy//}/uyJ~XFj.EMXE^zkaYqH}M+L g4%FOD@*j*e,=q!:jZI8w|' );
define( 'LOGGED_IN_KEY',     '@j4(8vSosu$;[N]4ijc=<M#sfe-gxwgbB(oWr]!PFJX<q|{!nhj[n[@:M2) ~A@}' );
define( 'NONCE_KEY',         'l 3?t[1OaJsNio+v]V%82psT#y;#zH>od v4`eyCW/o2#b@<}qz4xC-M]gVow~4m' );
define( 'AUTH_SALT',         'V6+R6ybi)|[=yE9![r>Uemmc,Bpw4n^1g7=t_6v=VCpR<80qf`Sp{8t0Pk0UYTr:' );
define( 'SECURE_AUTH_SALT',  'a:%|jSUPx0saCS0JQ`h{^rrPId*Q{Xtr?5=?/KPFH>Sy}d30(E9DKK@eKXsoeMQa' );
define( 'LOGGED_IN_SALT',    'UFlO}]@,5fr_)?8pDlgwhjN^Ctte[}ipa?Ax({2?~Q;DRJh|7~.=uu^nEE@7WPZM' );
define( 'NONCE_SALT',        'B7w*/>,x)vTuBjCRk2Zs#,+t./`~}smzR$[WY,c;s7T<!1{tYTO|O]?g.l7h(2Fo' );
define( 'WP_CACHE_KEY_SALT', '@Usy>c&&7+ikV=LV~7Q.`D9!xg3YY_jp7sgjfwvx<;}idQa6M-;L@|6Zu~1C(,KF' );


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
