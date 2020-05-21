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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'vR_%EtpTC6]?K]EGO4*Z{UhTIT+~KF2v0ar0^EXi.0Q#|S[D@>Hh3EPhTz=W507<' );
define( 'SECURE_AUTH_KEY',  '!3;I]% r=ye$gG^lB}HY8-+U[!WFcV5NzFe/j|#=fUfz,-9+(NFD76j2#Ngx8P:S' );
define( 'LOGGED_IN_KEY',    'la!fkWTV>^5}]4u99G>,nT`!+#.)GhX,wwke7=Z*|+#g7=01P{<%!LT)al*,h!>~' );
define( 'NONCE_KEY',        'Yp$B_f1P2yDZ@|vP[h]W4m@lHjKi.aODQ8^R,*dI8yE/Bt*NYGMXwl8OD<///|76' );
define( 'AUTH_SALT',        'Ls=*p[7@M=CTA=X@<mq(![C/yS&=nLJ&yf-3E.sjkNE^M|}r #b0iu??b#R ~*8y' );
define( 'SECURE_AUTH_SALT', 'A!)a<ml1vY{|d^P_z}@%tyd|e-3grz!uwf<y.p-WG0}cD6DNRERh@MArYlTk|xBW' );
define( 'LOGGED_IN_SALT',   'd>QxsZ4L|pL7zL6Wz3{/oVN {@dK3N;d]3evTkX6zW^yhWBF?srl~g!udTX4~[]f' );
define( 'NONCE_SALT',       'k(,]37,P0C]:T|k*XE#pu@e&JfoF)71pLaQq_iPS*c7IQF9=+N^c&@ei!hC=/U27' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ftserver';

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