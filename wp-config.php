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
define( 'DB_NAME', 'hlc_db' );

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
define( 'AUTH_KEY',         '{7~x}~=pq)BQXj5vsglaud^3u:HAZ6&nWur*?NVzSov4o|Y4Gbl)p4~Gen=!/6/2' );
define( 'SECURE_AUTH_KEY',  'NiNDzcvKE<KYEO2@bn^Z-IOBy.W7SVA> &.G;@G5~#|:*,.=pN~|8q)%)vGJm{N;' );
define( 'LOGGED_IN_KEY',    'zi(V_oTh*6%futN2[Go^QMpdHwJ#B/ZPiDDClH@FWcWq<-GXKUcr+LNS}>T*CY$#' );
define( 'NONCE_KEY',        '[S-ti=N!;3rHga:bb~Qq.N]sX]]j&<_66/:@QQta7XY(VUiPy])(`,qT4Z]i_pRu' );
define( 'AUTH_SALT',        'D8kN8M-i%Yt>TJ{vBP%Vg[aIFU~}aI*k.Cz,yqh+3s?C6lcl$v[8.hdbljB_50}g' );
define( 'SECURE_AUTH_SALT', '}w~<w,TI+vB1,>Fb&/z0+,-erqxRS,bTY*w$g[B#&$Q#MWQ]zV$Xl1#9a|`,K~OY' );
define( 'LOGGED_IN_SALT',   '-);6q;::h~ XcEK+-AFmvXbsoip7j.>hbAMwQt9[U>k)0d<-|?c5(C<?%W^PxmfL' );
define( 'NONCE_SALT',       '2[Gs/i}nebtB<;#tuc&!LCk|aE~8+|2Dbs>+M`]:WKA?kK$*oF9E)(ApKN?QyUGQ' );

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
