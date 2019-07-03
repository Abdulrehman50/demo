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
define( 'DB_NAME', 'bakes' );

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
define( 'AUTH_KEY',         'W7OHu,9:84=TL@/E~0{zc(fMW;e&jJQ@@i/x)UckRtZt9Z1Gz~dRC<O4l0xhdK+1' );
define( 'SECURE_AUTH_KEY',  '$Cd5CO.[7oGYsH/nQw]}0U!gP{8k1q*i/+C zaf6+-:VX901&PRCKF.gZ!~?Rlj4' );
define( 'LOGGED_IN_KEY',    'y`_|)b T2>B(]srZKFw0*,SS{q38+di&-NGjnhZ7[l+9d_?<R0v^4rVN2LPP #P?' );
define( 'NONCE_KEY',        'oO1@vK>V_tjd-rjT|#h*i^.pTfpN78fR41Z~&=ONs]kAyK@r#> =HZ|FEjcHmZ8&' );
define( 'AUTH_SALT',        'iPD|at>#*-+O3=9ko-_]|H/3*xBhru(x?8QF9>;t5?iJT]1euwN~l>fO-?Lf/CZ<' );
define( 'SECURE_AUTH_SALT', 'nQu|9idadkV#_8*[VAZGME;`560 e4kL=k)<QpWI6bk$C7:*04& Sr;Q0dKKM&0.' );
define( 'LOGGED_IN_SALT',   'W9ad8Yl$x9dJ%QX-.<>nO-5zgS!Q$0{KCu[KQ$v7 {Ge{SgN?e*ZUzK2+zg2J7QR' );
define( 'NONCE_SALT',       'HWi~+pym0!w[APX(N0V@@V5e+/faEXf}y(,>0CzBF.~14u9CGkt&!Ejz(o_+{8Zn' );

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
