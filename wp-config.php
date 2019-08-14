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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_child_theme' );

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
define( 'AUTH_KEY',         'bku1Vj)dLf9FRCq@ 6-1|W1Xo 1lxa@?E) ~#hIi*NU3RdwOiP;B?x&?$-vCiL-}' );
define( 'SECURE_AUTH_KEY',  'hNBQo8wArh0tb%.~ayr{Cx:PGH5TAMF|W^%ZwYo$E<`U=1v2Zrkv}JI-*,x1w(<`' );
define( 'LOGGED_IN_KEY',    'zK#Byv*+?:8R62]8Cwr?:DNOG89ArM{]PzWo9_Kg7?:c^Gq<?8hABs~tfBK38WBS' );
define( 'NONCE_KEY',        'piS%&qBtEdUW}k-uPNmx<ti:-4x|iDUAND:axW~:y_l.Q<UyEsgsIPjXmPAlK:}f' );
define( 'AUTH_SALT',        '7kro37**`_6Xqi6F~)onm.teOL*b3w(IETujMO(c3rD|1nh^qYy}uO|:.QD:Do;X' );
define( 'SECURE_AUTH_SALT', ')g.Iwh_.eUE7Qi]UrkVAWgR`9D H,t,!O}qADMYb`KUkhshOT*< ,oh~&mOQ/+w^' );
define( 'LOGGED_IN_SALT',   '#7mugNjGIXmgrqN`QR>w$`GVtxLY4/]</E+Bz/qN~GMofNu$l]x9,K>-d2>/~af$' );
define( 'NONCE_SALT',       'M!v]&?O/lHs}+gl4/a1v7GCgo>TRu!< dUsd.Bl-3Nu_#N}hxTD*N0n._s$2*W8b' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
