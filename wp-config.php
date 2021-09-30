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
define( 'DB_NAME', 'digpaisa_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'Ib^V-)~L<h!5h$*AKoSX}bN4A$h1|=4hF+Ieq:OhOI(0FLjzr7Cy3gA26I0U2HAI' );
define( 'SECURE_AUTH_KEY',  ',6(P#Hk?-QqA]@Hrb@g}W`(]OA)n_B`Qt~iB(1cT|:2lvRN#g>npW[X9aV}+/~CQ' );
define( 'LOGGED_IN_KEY',    '?p1r4>[]_RPbwV@5:lER!ZjBQj^ggrp&SPr!>q`}pRKJ:3evjqK~(,KIvl[.;LNz' );
define( 'NONCE_KEY',        '}qMj02_y?_cLlZc_Rip;?Ot3/-!qpPY7`:?!>P qq4Ie]| @sh3f*WfQSLOZK3Dc' );
define( 'AUTH_SALT',        'Ou~vQ= ^B$JmQA6c:zZ[lz~;>|3OA5k??t=!u(dxk0q75-hn!#%hR~m?:@@6c+p`' );
define( 'SECURE_AUTH_SALT', 'DGty*r46n(p@HV(rLRhEle16ec#fJQ_v>+dj~(<DFq/Ec6R#ou[>Qmeb#T]v]{D<' );
define( 'LOGGED_IN_SALT',   'zGt_4rgj3+C-CzE!hs./8On-$)LHf4N^R*tiqkB:080qWfQb|F424F]7iq:TaC>T' );
define( 'NONCE_SALT',       'Qh+$&jj=4vUS91%SsqGi;NOg,p{-8hk89on-T?IiP.**}-EJZI2hJ?!b|lyJkM21' );

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
