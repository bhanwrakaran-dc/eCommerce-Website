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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'UP#Y0Jq<purTT9km]&JRinBPq:3,o~d58+K+$?99%(: IUj!SqID%e6y%CF~~M#!' );
define( 'SECURE_AUTH_KEY',   '}_r-g)Ol&_a]Y~CP9v?<xuA0,xP/,X7j9eX*TfDgj!<<9K&kd^S-J^YcM/_S&_+(' );
define( 'LOGGED_IN_KEY',     '4I!Sy,<AS~iTw(7#kxs2)V~zI=wz>?u1T+:My30xt~g5?Vo>U,!LakMAC~`68lM&' );
define( 'NONCE_KEY',         'Grg3_$D-}v~UNZFPD[ChD_!6HTP,]*ro[Ji Khk4#JgA&_{6]nr]l.t*aO|E,zvk' );
define( 'AUTH_SALT',         '$/S]%F/.q6n<AcG-~R?tynm>=3*yWbS@v3g1I~hrjS>R:EwHid9jBN=fs(O{bp!;' );
define( 'SECURE_AUTH_SALT',  'PJOdh|.W{Ov*Jzcn,=^=k=mg1T[(D[}dZLCBgmw+SD<[t(b6;2kyMJ9Q x?s |v5' );
define( 'LOGGED_IN_SALT',    '+#2TR9kTr-2<Z(Lfg=(8 +R</8sR#^uy4@60Zh%)9s=R6LVLIBA%w !mnviK.&vy' );
define( 'NONCE_SALT',        'K-{~Rh/rA4gDxBVWU2CNlvTk6s})d2=:73V-K;^_;I$}{&zRG5X/7 Dez2wzmGL5' );
define( 'WP_CACHE_KEY_SALT', ';ABGd+w{AHB;|g(s8r9h?FF:JuN8RfS+.l5<QtHENS6hk?o[JwPJM`d,;=_?<m37' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
