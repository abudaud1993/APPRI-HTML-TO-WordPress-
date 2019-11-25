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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'appri' );

/** MySQL database username */
define( 'DB_USER', 'appri' );

/** MySQL database password */
define( 'DB_PASSWORD', 'appri' );

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
define( 'AUTH_KEY',         'iaff|Ro]_=i6.C3%Zt0~#2gTa?upPK%OAQ<vq <cTr>;J5-V50GNTz{u7eZ]x9K|' );
define( 'SECURE_AUTH_KEY',  '{biaO_kf;4j9#{-C.s1G!XW#efq<53,#hdn@v3k{DBO}jPMHvG:Hj}a*cK ZKql(' );
define( 'LOGGED_IN_KEY',    '0pq<c.)Pw8k~1_<B+og9uvw|];}q>2?5k`Veujvyzbki(I+T^S38F?AmISW}.`Bm' );
define( 'NONCE_KEY',        '~>$Kz}VJ[i4HC?gb#GMx~UO?)qxfc$K7u9:/;=6JVId6&<S}jtvU$>.1b*O~V!)N' );
define( 'AUTH_SALT',        'K28jC*mg Upz:TtawM* _BL`^4p1){-yXg5wBK8vn@TYtv>9K7`/s#_Gl$(M*IF ' );
define( 'SECURE_AUTH_SALT', 'tcW^N6e@E$!2iw5h,/UDvAInC}gMBECDA.ZIG47SEBQ4{SlT9l8iBXs8kfE^|o<-' );
define( 'LOGGED_IN_SALT',   't4~$0AFkF58$o: pgW#NW<]Yb2wn]?Bu`}wH+%$.Z2$%&T-(69Ot>zL:0!yxArXD' );
define( 'NONCE_SALT',       'Kj}~dO4m#NOV>M|b^&T,6k*U{-iO5~9UH|Y=houJAV3_6*O3ypL&F/UE#>/*RKT<' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
