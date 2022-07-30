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
define( 'DB_NAME', 'wesrom_db' );

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
define( 'AUTH_KEY',         '^rqR6Al0rm,q0z#%)NthT~xa;l8>ARlQ=tI !0_cXa tT,Gd,l)KV[kIp>E rdni' );
define( 'SECURE_AUTH_KEY',  'R^7~-)$Z`KVyU|$l^}D{(c`V!J JJ$n)poCQ7@XF!/3|3I(KtO:w/-#UjQNAU-Pg' );
define( 'LOGGED_IN_KEY',    ':A?Oq.9P6_GeIpDMFmL8k!Pl*8}7#f*Ns{xb!FNRcI4^3<<S(ddusrZ`&|cDXl,%' );
define( 'NONCE_KEY',        'Nzl8VG|Afc~ Kw&_woJE%ndU%QfA#+XoD!Ca(N`{M.zwC7!+?z[;c/*C^ovc/;Q0' );
define( 'AUTH_SALT',        'Qr}hBY1hXUbR!I}D4~^9}L7D}`e[caKOO_Gp/A8AC_9)p)wrcE|c[,&<s0<kwv-7' );
define( 'SECURE_AUTH_SALT', 'E|(K_;f0e^oeYp1}uI2J.8R1gAS%Lr^.<u0ZweU%otq(IXI[|pwk0ul![ar9`0+M' );
define( 'LOGGED_IN_SALT',   'PRr-~J p&|d*%@QjQ8&:1X2V3o3zgkGaQb</wTeq**S_ymLv:80X^n*~.G1B20T ' );
define( 'NONCE_SALT',       'dKqd&R=CwYwR!:K`6-IA.,5LtS5xNO_tlf3t,0cj@bl^-B/kpfIcKngo.42OyL$[' );

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
