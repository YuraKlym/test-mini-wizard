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
define( 'DB_NAME', 'wizard' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '+2H<2,,~ax&*VN85WJKAWC5>.sL?m4DhM`oh{S,}=tL)@RKI0$V.7&+a@)H`zPm2' );
define( 'SECURE_AUTH_KEY',  'he?#AENE1+$) AQ?|CUtl_,c[!}&vilvfUnC&?*2YmL8;V_Q>v$$#8lIedI_bQRb' );
define( 'LOGGED_IN_KEY',    '+mE^]/IT+@ds)+6bhxs0$oY~5W2k9YSvh:!GE<@EOC}gf6M7jD#{GG/U7lcya=4e' );
define( 'NONCE_KEY',        'FFD?Ke+AEhpB#M_OP,u [o!}gr0Qcoa>b;YBeK#B&6<oG>RrL%%4WN (|@fX$R4k' );
define( 'AUTH_SALT',        '/1GcMq%%>&j*+H0SRSJb;Mz*bIpbfs%`AT4My&k/`liaH?MMGUUd&6nr;p=hqEi;' );
define( 'SECURE_AUTH_SALT', 'gB?JOX1|ZH02JNixI=Y.F{,4W1C=Zba^pdg5hz).ea2`!Q-N2N$E~r<*?RtWm^*l' );
define( 'LOGGED_IN_SALT',   'O}zK<pqk|._;eamDpH#+M(`&^c3 .{?I]K*+esDNoYRq%_o)ln.i`!O_qguwA}oJ' );
define( 'NONCE_SALT',       'Ub,wwfWk@} <#(T9.f4FM1|^%o;D(7UWJF>`8<4b>Q@j+<]_K6-@Kdvr83(B}B<y' );

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
