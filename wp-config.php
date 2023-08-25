<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'chepkwony' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', 'admin' );

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
define( 'AUTH_KEY',         'VpmALE6%M.d2#S1?=mz;UH6-,gb vQLl4I*YqNx|g<OTvz9v+B[kE]Alw& <GNY(' );
define( 'SECURE_AUTH_KEY',  't-zf{%JmYvMx{}J#, :ME6[%N4N13@5XP66e[Bq,gIxKmIGQ,AtBruI_(eMo+)rD' );
define( 'LOGGED_IN_KEY',    'Vh>BD~c/5NJFz_CkwN)9/-(p*{7<^abjbYCVo?o0d@qW]89UnQ4FiE+kvL7(ge7m' );
define( 'NONCE_KEY',        '+7=mE!e%a-jS:[I}G!-]q%?g]j:V0sl)Na{4Q+m3+1%dxmRFyYGGtp`o02`;w:~m' );
define( 'AUTH_SALT',        'i39I?n<[8?W5&CSE[yO={WT;Cj1a!K8!dE[9|y`sVX4EI`~HfZO@B*cE4@vHAo^g' );
define( 'SECURE_AUTH_SALT', 'hw>rLWI:wHBHyls_WTI)pCe;w`sGRl<RY`I8yNI%/mU7EJs{MO7DG1KC8=#NH|q9' );
define( 'LOGGED_IN_SALT',   '+lCR{DZtB8L;iQ!gs!nKf#DYFp2n=c2U$f02lA?)r)m$.Y`g%!0q]BdjZ-.XMZQu' );
define( 'NONCE_SALT',       'U8wl:J~pMZ0Da]&*NJol#RYr-}y6B(Wbp9NxbQkOA4&I;j}]oy}4A,K7gr/f=.1I' );

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
