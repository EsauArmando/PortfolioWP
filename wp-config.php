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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', '02_portafolio' );

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
define( 'AUTH_KEY',         'H_#wz/$d02ri_)b5tqiC51~0)j*uGEt>!KPP7xXz|^,2P-bI%%2!{V<~660Z( +p' );
define( 'SECURE_AUTH_KEY',  'nZFnx2l??Vg Gx:~{]a^J%Cr0x15C]uP%D`%nu_qA>!9sLABwrL^L~8#9AIj~|S#' );
define( 'LOGGED_IN_KEY',    'y1_^x<G7{o3pnnss%S:Tr/M)VclZ^:~sHFcGRvnbgid.64H5RkAH[-?_K>=;dM!3' );
define( 'NONCE_KEY',        'o8)a<3P.C}sv%,2Kn$rYxQoan3Kw:|.cC5>UdM,]|(fb&]*JkaVKZC>=G6<%Yz:U' );
define( 'AUTH_SALT',        '#.|<cz0y1qdeM~(bUkyTu](HN>-Uj>,foF$H?U^b)M&a,Vm|Ul0qRv]_mWq,C*H_' );
define( 'SECURE_AUTH_SALT', 'bIFb;}E<y^g+4r^|p79K3B@F_P]][7cB7};x{q;Er}*c!]Ts,eH8{RgsR)/xlpaj' );
define( 'LOGGED_IN_SALT',   '&01sQ+ei9%fz$I52&a*QGzFQd2/R2=G_ivp{-%e_@!:a#fQRZ~rmU#uWPT.8ay!>' );
define( 'NONCE_SALT',       'gK[m}&hK]m_w;_$xfl!h-6utX3vsR^&cpVe0<pOC2c69a=6@pePU@u&`UnSZ|e;^' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
