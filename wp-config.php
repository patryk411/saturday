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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'saturdaybd' );

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
define( 'AUTH_KEY',         'vlor$KQ`.@rlQ|UTQY(ST+b(Z/-EG>7B C|5?;W.=$PQYt}/gK;jeKi.p,3UalzM' );
define( 'SECURE_AUTH_KEY',  ';I|[latQdxdL.L:+Q<k;&1w6N5,@yu})}W+nrH! ISUje-27D%~Ff~gTv@;N$u=8' );
define( 'LOGGED_IN_KEY',    '+A45Q;-@;ItZi7}OM)Rs9 ]iUUYn@58ltM`_!-mVJ2XN61@28[r],xZ&#3P,.P3>' );
define( 'NONCE_KEY',        '&TacKv@#7Bo5wpA3[tK KHQ#RE&E[5Vp,dN}3mP;@!X&9Icbd=q9VETZ[z%_vQ>b' );
define( 'AUTH_SALT',        'Q)VgRWODyLg!&We:j:jb|TOX}T<$Z~qu}R]tY6UfA(l2<[5>.3?Q9X,wI<%TT.K;' );
define( 'SECURE_AUTH_SALT', '6WZg=*@>F[0M$II<|Cvpbb$lU(kn002hU?IA`pWSC!T]e<4kn,p8%JUM.YhStIQb' );
define( 'LOGGED_IN_SALT',   '*eT4~W/|cm}z:_z((ieX^!3fS,==B7M423P{xU^1)<PBR>IP$zRdhNjC/Ahg~}*4' );
define( 'NONCE_SALT',       '[jB;:A {})BWX>j0KP~F+af_t!skPTArcR_e.3504uS+0(,+aE4@3Czw9pTRdM3Q' );

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
