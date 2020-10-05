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
define( 'DB_NAME', 'bd_thainara' );

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
define( 'AUTH_KEY',         '=;*q%xgO *v@_NHc1RZ3HimCFNeE&+S;.!,1^U8}s@So45MI*0@%`}UXOdKW/T:t' );
define( 'SECURE_AUTH_KEY',  'Oj]=5nQXlGK@yB5.H[^jv?=jV.Z3Az.VjR}UHAjg/5M~UzPL)xh6qNE9Ia9]{yEo' );
define( 'LOGGED_IN_KEY',    'XMjZdb-,/rM6w;Fk{P{%P-z&%d?iE_!^TGq>!5cd&f40l`D3VW)A$3U71`Sw$v<K' );
define( 'NONCE_KEY',        '&&|.9|+Ib|y/}|g+<i4r*4-xcul&=QiB$HL>75 fk;^u*D2s)sbwl%uCo7,@hT-p' );
define( 'AUTH_SALT',        'DeOaD1NS/{s>@%@p-e&PsyL.74+/YK+lr?Kw[0GIQWeuejp;fOE1Od71E:D$LHe,' );
define( 'SECURE_AUTH_SALT', 'jF7gn-u~q$eHvzFj8#gK_,!3(p+FoU>Omk=q?l7$D3o;U>9M cptq-yN1<<`mZ@G' );
define( 'LOGGED_IN_SALT',   'c1qhY&wkA!m@)l-VZ]0DeVU|kWr4ziZVe`7$pNL0R`f>Zo2`=+mM~8tjG~^tgjCG' );
define( 'NONCE_SALT',       'Hi*q`rY*6x6y}YaVcpgDB8.Wax=ZPK3|5CM~8m?I2*12L9&bz-UP9Dk{}2q=)&i&' );

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
