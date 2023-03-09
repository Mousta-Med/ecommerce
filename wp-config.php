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
define( 'DB_NAME', 'ecommerce' );

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
define( 'AUTH_KEY',         'j8~!ZA3G){=.0l6Gz#::g&yjQ0D?plG^4xn$y.z<B6qzNS0S~:%#S#l/?]FnBCQQ' );
define( 'SECURE_AUTH_KEY',  '|i0^g.1X`]tZ<@Gc0NFw|ws$~D~fxCa4O5Qjv9y/RNMhv^G9c)EJ.>F:lVZ-9Ytw' );
define( 'LOGGED_IN_KEY',    '+lFXQ2q3ob]bCT~i4}+yAW1Ri*F3-U+-L!4#x59q9FR$I$i*!^][03er~0qg G&O' );
define( 'NONCE_KEY',        'oSIozs3@A)q%j#zP?1{;B.m)-XL+Tf?ngq0>K;J[PjMKOS_IhIpTAwKH8zU1:a[=' );
define( 'AUTH_SALT',        'h0]`&(d$[*X#V+cMi4HiiWWJ.xECq2{6UuZv{}60+7bIwy0_[eQ3{Ct@>kX4{>rX' );
define( 'SECURE_AUTH_SALT', 'jBH`C4amXv=J9h>z+jMBDbj1+v0Z{>qL-IR5[jO*=V122R2m-[O9mOFPo{BZrlM7' );
define( 'LOGGED_IN_SALT',   '=GY}drZP?Re_x)`1h*$sE`}y{1Atj`.-a8J$&[z8W!KC95v^r:9;K7QAw:%kuZIy' );
define( 'NONCE_SALT',       ',c+&9k<DYuf>^.WX?Pjf!*=A70vx^*ze*J~Es-%;<Ncc.5uzc>.6JN4K{p?x$5^/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ec_';

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
