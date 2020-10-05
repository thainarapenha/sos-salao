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
define( 'DB_NAME', 'bd-sos-salao' );

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
define( 'AUTH_KEY',         'WHL/LfE?^?5PRO3.+/cZVz:603B+(s]S&,!Ocw.e0&,Eiqhzs;pBnrcwnPTA)T3y' );
define( 'SECURE_AUTH_KEY',  '=&HM=tk`mE@V&?Phxs,Zn$>44HJ/n012]t(z3<{vOlRm),B;ufbz_@6?Nu;kK%0Q' );
define( 'LOGGED_IN_KEY',    '^@Y.O-lvoW#Q!<lR4|IiBdb&4R#vumMBmeLQbM4N*+s1D^<f49zA-@YJBx%F~}uE' );
define( 'NONCE_KEY',        '.:v6O>7uqn4_&*C(KG+22OEGIL9Z-s8bOka]D>(xfmeijI7 4U--nV;H_ohq~o#A' );
define( 'AUTH_SALT',        'bHxl9IO@E}hI7KcB7L0%GMbmJwXBh:(jz%_3FQb25cD]NWb[e_?,:7f)Jpu}`1z:' );
define( 'SECURE_AUTH_SALT', 'kQK-BPpxj2(n/GLYk>%lLKDsio2%M;Y;Tr,xoR[Q(%;,!MF`o^_U,%/aoKW=g7)J' );
define( 'LOGGED_IN_SALT',   'Iz2hr;bEfq`GO]Aqs}0t!Opaw8Z:XF}iOJ+%%(7PwK.9OZQB=?yuh_7UL`0E&x<2' );
define( 'NONCE_SALT',       'jem^J?R/`q-Z]9c/z9_S%tVgSRy0j7FLaA7_fzX=sOWFK>@d(S3}7%i +%eAf6c>' );

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
