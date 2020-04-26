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
define( 'DB_NAME', 'corryscreations_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '0n8nIK8h6Jd^' );

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
define( 'AUTH_KEY',         'si UWhvH$k2Geh.Iq+is(`?{@m/wp&-3AN[&Xt[%jMJf.ls!;1PD?D4H2If&jz[`' );
define( 'SECURE_AUTH_KEY',  '1g.g~]0__4/CvCqMw|1}{/@[KeL_Swl*Hr=0!*?GG&<HUwKzKN]&bUDef1mF>F8I' );
define( 'LOGGED_IN_KEY',    '66T<(r}p`r#Z==W{otsa3eVTy0n&#8XPEavd8)Soe `~jj7GU1X^~+ege6IWt(%{' );
define( 'NONCE_KEY',        'npW!:u|2dI]{>yPZl;0.Xm#.A(QNrpQHC|CvT@6&}T:[:3<#r9`)<.bf,xg1XyP9' );
define( 'AUTH_SALT',        '$/dymw/p[37M .g.,#Tr$T^v9j`EBP-9E0p?q8@*?q~/vRZ!BDv`Fd Fd[5ajSSL' );
define( 'SECURE_AUTH_SALT', 'y$1/YF ~)9hodbEVGt6zjvt&s93K1jmZ>7Vklx~aS}qF(5ImQkJB[kZDzY==Jh):' );
define( 'LOGGED_IN_SALT',   '[%zsmPLYgksk>^3!yMs(.umHqTXu):Yh}imW*sv(o%-BKgi@(.~U1wp;?g=Ac3&m' );
define( 'NONCE_SALT',       'TPT[2ctg/Bn{UqW8ye}S~{-sESE:WYNnix<v;^{=ZO+- gbTZ@JYzYet/?/A2zW+' );

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
