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
define( 'DB_NAME', 'mspeaks_ypsolution' );

/** MySQL database username */
define( 'DB_USER', 'mspeaks_ypuser' );

/** MySQL database password */
define( 'DB_PASSWORD', ')L*q[L*Q*FZ#' );

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
define( 'AUTH_KEY',         '](kqRvVaQ:,u0baL8pb?+Cvv=)6it/|I&@I h.3;(H:IC[(Qgf|>/1veeKxVM>SJ' );
define( 'SECURE_AUTH_KEY',  'v4zRw|9pi_Z!&$EgrT2%kY0}DATZKGZP1D2a|:`;C<7rV0vtP3VT3q|#Vsmo)E]h' );
define( 'LOGGED_IN_KEY',    'gK2sfp[NE2]2c&C_1sem>9.,/JY(j]?_H6DxQz%AdJE&027Bv`ZKt*kA:T39lf@/' );
define( 'NONCE_KEY',        'L>?Q)kMa0+odzw--e%[zECA]kp;!`u q|M8#yo3Tv/+(7em%ln&bZE^f<!}VM}7p' );
define( 'AUTH_SALT',        '=2H|)dBNJ&EA&w!HW&yrc4)dMhZ2%7IBQE;~>=@I2y<1a,M+kfdr!]}2DHm51J^/' );
define( 'SECURE_AUTH_SALT', '=V!>!Mp2j4-7*J}yX:l;YjLS$0#dMVqU.[:Q|y.v9i]QHK0MPC!K-Pwvz3:.u#CU' );
define( 'LOGGED_IN_SALT',   'Sf8Czh,Qt%PJ[jQN(6F5*VMC2]n#Iu,YK^>iZjAQR%ykX9};4DY;*+^-/q^s Pd4' );
define( 'NONCE_SALT',       'L2njK:2J{utSNW8CI(|/K@_ow_rs,gJ7X:o ;(8bN^2aE;B}9SB*8w9NKMg[%OfW' );

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
