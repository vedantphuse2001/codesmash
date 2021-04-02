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
define( 'DB_NAME', 'word2' );

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
define( 'AUTH_KEY',         '(v{XU.z<>dJrtH}6!(#Tc:N>4=!8guD{D-?lk|6J1|P6j;t#y~qW5]p?!o&fBei6' );
define( 'SECURE_AUTH_KEY',  '6$0$s-?IX:nf]cub:t@4?UN][FQh_v<&_t]bA~0wnC`?KUgig<7hoYd{[gx 3D]t' );
define( 'LOGGED_IN_KEY',    'vQhBn&},3^k%aIgg6Fhw93rbH$8awd_K8} K]UB>|Ik#4-$V#hzZ|$r^!kOg&N:M' );
define( 'NONCE_KEY',        'nfZ~<6EqFlSqrq!C=u&T6Z|P5xH/o$2^g#k0woCwz_:Eg)AgeYp#{3Rn04EbnMuA' );
define( 'AUTH_SALT',        'UGZU}|Jl#YOe%2dBM32l{p)Cjxe!-/Yunw!`6u:wZ_8F=9T{CJ~JSz&O;4r(+%_B' );
define( 'SECURE_AUTH_SALT', 'emL9b;|I`lS{zK9c9ghs)4@j?,n7Lv^Cx4 b^bRX]}Gk@#wud*BO4g3GutaPAa|J' );
define( 'LOGGED_IN_SALT',   '3@I5C24B=4]qoT/OR2eoG/1Ox.<*H^r?Dp|3BVX<HB Jd`y)[sJR[I;:QG|5A=zw' );
define( 'NONCE_SALT',       '[?c4{~UJ<MVz#3gj!iLROQ}R3J_y=;3E$Uc_EdJdxei:| NHySMH]8pM3r>cBAD%' );

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
