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
define( 'DB_NAME', 'sddatabase' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '~wE~W YX|YsuC9][I}0aKKj&_lA-vx-zH&S@ M;OrSCrC3Z*};P/UB.JBJ_T-dkl' );
define( 'SECURE_AUTH_KEY',  'wY}e$ecNF;4k{W(Mo?[S}^nBci@YO~NDJYSm?.MO%w$4q, jM-gDj(P5[7!}6ffJ' );
define( 'LOGGED_IN_KEY',    'pVM`5`c`^G,/^Wgam#?@7)3Np-Y`@4_R;ZM6XJP!12wm$0ixz?c[#d[C<[,gO@-e' );
define( 'NONCE_KEY',        'iR*Zh4lscWmIhbqRXb[Xp3 -fj%4wP^Rnry{h]TR)>M|n20)}j_RannJp+<#2(H#' );
define( 'AUTH_SALT',        ';GSTO,H}S;D^6yORnKh B5sz*Qw1jyopQ]^eAV{(_i[W|~nbV!e~uz{UX_#s!0.R' );
define( 'SECURE_AUTH_SALT', '^t$Z*HGS;9{3%>|&#A&ip taXJK:-ey1mf[~Ul8. #%WWj>&mR:OxkskLj=x51*6' );
define( 'LOGGED_IN_SALT',   'hf-Lu;qz~5ye_G_Ze6L=Utq:=xhq=gZDTrVN.VV4&XBTqkCVEPsWFd6.5#6VIz^ ' );
define( 'NONCE_SALT',       'Zy}Hepw9U72Ss(UnXZpnni96ou{J^|ho7fh0lgNpZ]a7K@s^*3c<i>lHh#N<b+Qf' );

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
