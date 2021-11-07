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
define( 'DB_NAME', 'cacaosv' );

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
define( 'AUTH_KEY',         'a_]v%2r+k9U4SUR~6b`(Qmt=Qa`;M9u9,s09JWhXlc>lGk^7MdU<Q3n8;g|Opq3M' );
define( 'SECURE_AUTH_KEY',  '=uKa+:4K m)pB<nV^iRMm/F`1XacBkxZuR^@p;!sF0CQd&dx]ma(G`Ih+cqX!{JN' );
define( 'LOGGED_IN_KEY',    'U<Zxk}qe0FzS $D2t#KDl*[:xa3uV{%! 7rLY~S@+}Xe3vLA^jIdVp`p]s4h!Z3.' );
define( 'NONCE_KEY',        ')d0rF2PEGi<a9!2M9GqU%IxhDmn axQo_.[#*N?J}0bxw5c*5`rNqMDt.vM-AgKV' );
define( 'AUTH_SALT',        '*_tae_zsT.0xZ3N4[KDw}UuK{DbR4n_L%FrN?Xy?UG)L2:xBHPYc$&Eogq/+*V/.' );
define( 'SECURE_AUTH_SALT', 'ZHIE~}EWV,5#_JCyH&Og.+TI7PFjum/Q8?W9rCBz>p&x`jumQ(X;j&k;3%a(kg%#' );
define( 'LOGGED_IN_SALT',   '0$IlsopySDceJ#tZPbf-,dw3w/x[Miv&r/#&c}RD*zS1.lyNzW#1EJs[(tS~39;N' );
define( 'NONCE_SALT',       '6HyN4t6x.?yYfR?`w){%q@QVwe-2u|{D6|`7U%l_CY-ZPjmo4oU^J%GQQh[BP?;:' );

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
