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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */
define('WP_MEMORY_LIMIT','2048M');
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpresources' );

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
define( 'AUTH_KEY',         'zbk>R&(|w}C3.k`]U;4z.|n}IblP8:^mBH@1/[ZW3dGv+%1KCB(/u#*=fJ%-xM)$' );
define( 'SECURE_AUTH_KEY',  'yisPs$.D3Q}PDt.yFZkXG09K:I`d4 PCE0HcOY)Hjj%C 0/_E)+O/HBx&9_q6~+E' );
define( 'LOGGED_IN_KEY',    'QW+}VAslila_H/5G9oYNAq3O+%;t@qXgx>gV!7X5BfC{`E(6Akd)ztJa(G&jUflX' );
define( 'NONCE_KEY',        '0$rPS1-}{[^aT+&[]7o5h^T>>W.kn1j>9)uUq3r:%bu5k<YQ{7//K`3VUZxUIv=i' );
define( 'AUTH_SALT',        '9[Rrtb|az@WO==U1n@(f /jekO]]YHIEf|l{ieutdc{HHQQP(HR3!&WNE8bF/69*' );
define( 'SECURE_AUTH_SALT', '$e4Eo[dzN7:,#>S{5BqV17=K|vR{Z+)@Dr%*1j43LE#N#i$5u6wf^(K{(#RcI:nx' );
define( 'LOGGED_IN_SALT',   '(N_P)(~<RUim2]61Slikt;e2?j_:b)[r~Pn:|6iA6@y{ZMa53h!/-8(%L}EwUE/`' );
define( 'NONCE_SALT',       '?u[`KX$}`xp?K,kJ{fi[0cP)M7~ETaCCP^hT.KdE%$`Pwv(X<QHI]&ZY+Lt8wVir' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
