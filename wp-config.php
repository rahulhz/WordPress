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
define( 'DB_NAME', 'udemy_wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'v?#$;3pFhgz`6vlwlpDoJA)T|z@ T?=@lj7qY9lZHv%O=.+;X%0f$AHO)IK#ai^c' );
define( 'SECURE_AUTH_KEY',  '7YMSmrYD.$EjAY 6~E e@yCg:^m(8EaPmY@&;4kT*I(kq|Uz.][[VpSaJKp}C0W.' );
define( 'LOGGED_IN_KEY',    'fr?pfB2yaMO^gbz1JNCoRn|#sghRi.pvS#0;jn>[LzIf5P;IgH|8o!d/*7Lfu0Oi' );
define( 'NONCE_KEY',        '@KbznJSnYo_, 1Lj)w}^WGT824>>Hq4g7YkXcUhJW0Y+@|jJmyVy2lz&s,*=lv,@' );
define( 'AUTH_SALT',        ' 5)Rxh}v{$i*Jk.Wak9X,!8sZ9R<-*iQFy?ScxR.Y8D2s;zkZJY:Wf8ndV$};<Q^' );
define( 'SECURE_AUTH_SALT', '<hWL`Iac`{^Aw>Qmr}PS^kwY`T~`b3A}I4N|0dH)?R;9Q7{9-^d(grR[ge?aSxEd' );
define( 'LOGGED_IN_SALT',   '&5xT~r$q&#Km+Y? }j$9C<$@}8kh(PE;oes`olHPu_-@B;E5Ift=I0N$ /x*Z1J#' );
define( 'NONCE_SALT',       'P*G:2zgvRzoS=d~_NCfx^<S%CQDOsqnuPHPblJ&~6RVnqU-EWrQ~c~i*gKG/r;)/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
