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
define( 'AUTH_KEY',         '@IdBYOM?Dr{996O3RQ-Z:+zlT$K|C0emum9ZD=FK$)I0F7ypTs`gL6>oq)4v6pEl' );
define( 'SECURE_AUTH_KEY',  '#rg%X|sJDR-TH`B/88*_#l~LfB?BDlHcha|aeqeG=*4N^%zkgtX!<!mg*40p:jS8' );
define( 'LOGGED_IN_KEY',    'oA&EpBzw0A#+X-5A&d]#byS^<.p8@l&*W[poCY+P~R-Z:[PkN9<;sPvXhJ|_]}YM' );
define( 'NONCE_KEY',        'ojvkTv5M(S-QM8@i]}[9NtKnINe{!Kid$Lm8r;kBFeF^JV!Z,ppFpqoRV>gl@Vpk' );
define( 'AUTH_SALT',        '+-+rkd-~$JR4b`>ad,~GrYdxGOqH9R*Eo%{+RPNmsYZ!`nOI#=%ixRUY-.W4j>$Q' );
define( 'SECURE_AUTH_SALT', '/=5ISCU sl{-P_n%O1&%Lm.FZzJ+&]ze~C;6]I]0:muzJ%JKUjU4TP_3SW1#N2J,' );
define( 'LOGGED_IN_SALT',   '=(ovWnyF:!Uaz+o3zJlSS.JiaUYAN(vv7HkZ0[|I,.&.hF+Y5{-V=U;Kd!)*V~B}' );
define( 'NONCE_SALT',       '>;|ZPC59O;Z,y|L1>Y4]e~3pAf/F1h)I<CWL~hPYx%.L=_kI%L]3->==f*=t_L^D' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_ft_server_';

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
