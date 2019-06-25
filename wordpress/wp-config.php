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
define( 'DB_NAME', 'consultoria' );

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
define( 'AUTH_KEY',         '7+RN*<)M08!wE,`!UWT/-JBm(@J~!y;HqKXH5`RZ*H*:>J4V,m!~^(y1)~r5JmT)' );
define( 'SECURE_AUTH_KEY',  'dM[U9Jrz*OzY^?6U9jGE^H*hSzRlTYYD*dY.R 6<y.z8r;z@T9#PB73%wX&HYLu}' );
define( 'LOGGED_IN_KEY',    'q[p1:dnFh(F-*Q!rgf8_t#m J:!mE*~>N cMj>WWUF^Z:b}32X}4pLUu4fwaxy~J' );
define( 'NONCE_KEY',        '@}7zfRY+$v%F=y#RfV6C<Tw)[r]P[!Ibfn6$Jr]Wrp{]}&A{<)oA{|f:+0s.B ZG' );
define( 'AUTH_SALT',        ']Lm~J:(D>nzWKB2hwJg?Oc_30Iaqi60N$<$NHa7$45`SP`Du]Zrq`{U<x?**f7F0' );
define( 'SECURE_AUTH_SALT', 'JY)G)BAB<EF[Ck-Q@+hQJ5}3m5RMi<@Iow}5HY]1Kem3+E^Y{/}M<v>BYnx7oC(<' );
define( 'LOGGED_IN_SALT',   '*K#}n>-B-ryDeNNadxyZ/xk^ilZYNv]OzX]ZbnH t!o@?V%_a$D[kQQ/X9sx$84P' );
define( 'NONCE_SALT',       'b<%U q{N6R{2mxCi-,:3*hj@/qT=9uXq[T;|vdsIZ?|.;k8_S1Rx,xh4AT_UPB>r' );

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
