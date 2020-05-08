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
define( 'DB_NAME', 'siscovid_web' );

/** MySQL database username */
define( 'DB_USER', 'siscovid_u_user' );

/** MySQL database password */
define( 'DB_PASSWORD', ';D9v@=O*8%-e' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         ')_r|+RV}V]S@BY&b+@z[rWDjT_LGhktAv!t(o~+E4-vesj5]ERXD+8Vq-v!NBKYL');
define('SECURE_AUTH_KEY',  'RoEy5jk%L06KO]##$TDQRr/^|2aE$ukE;rJ-kdumA1t2aa@ [doynFp8#-|PkK+.');
define('LOGGED_IN_KEY',    ']|T_;*X)`0ixhCyu A` @J=.Pq4n|*a;T5R#==I;Fno-)5oZu4ek9o.@Egy^||}|');
define('NONCE_KEY',        'p-R( |F}viPeajMCPJ5`fn@e&-*P)4%0E][{n(A79&QY##;w}Td~8.wn!(epSN1+');
define('AUTH_SALT',        '@bO|>k@?S@UR*J5[-Yknln%E]K#Fw701.:}H]bsP3[M,@M+GhfRg8Gb5A+ggPm|j');
define('SECURE_AUTH_SALT', 'jHoE^&uoi+-##8!}]s++Kw/`-OePr+-Uy[5RmKEke,-E&umf}8Z<(&lgIQ=MD:f3');
define('LOGGED_IN_SALT',   'k^&zP/+[,|+/VhmL}s0oi60h(5A=dU*=<n_L-?lt)uMyqH=T+kk8AD$O[*gHIQ9+');
define('NONCE_SALT',       '>fK7Hm{{YB279.Y33+!=M*cB|+<+^n6.}js{.dbq_Iy.p0I]c*y]BF[] O?F.>gA');

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
