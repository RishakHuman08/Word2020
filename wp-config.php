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
define( 'DB_NAME', 'emp_db' );

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
define( 'AUTH_KEY',         'n]2.+u+,FUqyj}y5O{NIpA8eW^Mg{E@an,@f22aS2Q] `?.Yp|ba(4n!b$H795fA' );
define( 'SECURE_AUTH_KEY',  'gLvf(X4L H!Poc5<V=icRoO.y% f!,=%(Cc>u.hkD59=ANi{#BX9_#eL>PU^Vp/s' );
define( 'LOGGED_IN_KEY',    '(ERAUT[pr(3vm#>094~KM$=_p)=2[j1)cB7F#=v$fS_edgw%+L7#fYaZNst_>ctU' );
define( 'NONCE_KEY',        '-vU3;]Wdy6f)gAszdP#DZr/{V-hXvpM 1=@+hxCzI&?[XZ^?oxO(o{Yoa=o9v>xW' );
define( 'AUTH_SALT',        '^LH:jUr~<gaIX>~[.8#WGXG1}|05o2!a/m_@G#z1QvVpa@sADAZx=ybO3!7Uv*zR' );
define( 'SECURE_AUTH_SALT', 'zAH]=*vkxY]LN;wB7fXeCYp5JCV-g#2KLT6oM|7O^L{*}.6$0WrZ.O69+*z2eL<^' );
define( 'LOGGED_IN_SALT',   '/P{#oYE-bK}A(NT.Z2e#Ky$.bn^`tY[+a?8T.fs,@Pg6:-,pWaHuv@JdF#}03k?i' );
define( 'NONCE_SALT',       'E=(ra*PFA3}^oQf#bKFqZ|axVJs]M/hbrD4fnX}*_bKUd|/%*V8MU^n/N34*Z[K|' );

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
