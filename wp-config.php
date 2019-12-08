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
define( 'DB_NAME', 'cpd_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '=4o[9n`x+<4ttJ85)bgBL0OzZy~G[{Vy%RMPt|Ie@`V?{>Q^yOw~u}V+3Uk1:P8 ' );
define( 'SECURE_AUTH_KEY',  '3Q? {RDBl(&7a uN:ksvc0{t}qU7*2;7_uSvfSCu27~iB<V1GR3UH 5_Ix?0A?Yg' );
define( 'LOGGED_IN_KEY',    'JGA;mhH&RK/Vql+T4{/0spAn&,nVugki%X:SXS`R]}J7OJj(}5[J@L%83O{F54O0' );
define( 'NONCE_KEY',        'dHVWH$&Il];7QZ*8{$uYL2{;^1NUlCE/]~~;UGUcXT3E@p+/$:8!0S? 5O;mohT^' );
define( 'AUTH_SALT',        '0<L4iZd&:NK:`!:KFf/w1qS$|GNQW,M0fYZ!E5QtK,AF.oB*6mH4y@BBD({38e5%' );
define( 'SECURE_AUTH_SALT', 'x)SX?Xq0Kf/WFHGIiY(B*C |I6I5AN8f}}llzu&.g1`3FY&(x$^5:dr*6@eEO/#e' );
define( 'LOGGED_IN_SALT',   'R/M0-Z; v17,!oV_kSs/S&GUlJM?%Cm5iJNtfb(bV(2$q/~U=8F11ehh$ULo^x~z' );
define( 'NONCE_SALT',       '+6Hk`?QW;Bj(_Cq^P t7z,j(H~_cm$k*(>UYM^vOfna_FV>7H8B{7cb_)<w9N.S&' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cpd_';

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
