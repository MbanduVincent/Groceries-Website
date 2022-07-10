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
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'gretsa' );

/** Database username */
define( 'DB_USER', 'VincentMbandu' );

/** Database password */
define( 'DB_PASSWORD', 'vmg@761991' );

/** Database hostname */
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
define( 'AUTH_KEY',         '/NOF#fnRYj(JL.NPZZ7;6Yx1Pkjd0PP 0nM[MsW&dnD}YZ?qQJ,kBErOPeVY#v?>' );
define( 'SECURE_AUTH_KEY',  'EI)uU~Z$:YPH?_<uPPGRB(c^jpZv@!pjLJfVB/6#@cEAk>]Rc>8^?PH>U4:z3 X<' );
define( 'LOGGED_IN_KEY',    '1ds(tNj`nK8!MGm&{4h%{KU8p/noWD`H6Mz[M{Beo/Lk_GwbP1>)[`|7OsckFw(!' );
define( 'NONCE_KEY',        ']V8BrD2t/r@1]K@PZ cO.[~OGiP%^9k.NP1SvmjA%$x E>wYt6_+?B(){!HUQNP?' );
define( 'AUTH_SALT',        '+;QP8LKm 4Xa) e9I ~]t)EAPqL(uVP~i@pIg(yKs;S=o$t/4-MShPW[P|B7|=xD' );
define( 'SECURE_AUTH_SALT', 'p~& ?|4v.b^9p.}aAQ7=gd8mN^FCCa}V!1:ux .E)jSE2vlx;F&I,ZcEzg,]I_]Y' );
define( 'LOGGED_IN_SALT',   '_%D+,Nu>LCypfapr29fPb|uO+|Ryk_otQ/{QxFR<wxFkuBT7G.D{v]%uR5J#cB9r' );
define( 'NONCE_SALT',       '$Ht#3qqO2-mjQv6M/la3LAGL-vnP8K>2Vh$cntB,uxa>U?^[Xw~K&B~;>/]gxz:7' );

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
