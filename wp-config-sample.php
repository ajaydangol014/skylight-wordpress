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
define('DB_NAME', 'core_wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'm|4o)Lu1i#[#hie5ulEdbE#0=+@Z1(xFDSSObE{ud?v@MG ym+^,En.-9A~R~[%S');
define('SECURE_AUTH_KEY', '$veg6le|/Ub?NX*Dhfdyc[&b6WNWwc5^*|}i47,0(HsZ/}T$g o#%2HXeeIBG2+u');
define('LOGGED_IN_KEY', 'u$RyMLq7dZ.KG}Z@q@Q#Dx:=^-3r,RdA~U])<NGIf~{^[Lba_-!O|z#6Q>+p3$%{');
define('NONCE_KEY', 'Dz-uSK]!oW+}[g+z0G4V6fx FO#}bzr<:=EAY8X<}fE,GB)W]#BY-&`&db/RN5MQ');
define('AUTH_SALT', 'Z*xlCk2l_. -BS+g$$>|L8;AbB|WD2#cF/xNxS~c=[Az!l-7+>YY=2aeD`rNZcob');
define('SECURE_AUTH_SALT', '|5KDe?RO_9?rWv>f+*%ri-Ha0-&#2cvlI;%{YF@e.cb@dL_=2GY XX]7IzmG19a ');
define('LOGGED_IN_SALT', '95W>N+[w0z! v+q3enRR+2l1Ej:5Cc1Qe<[Tp#x|r@%m6La%{bSTaroZ++M<h:o&');
define('NONCE_SALT', '*+4:zIMf^Y!?OO{Q|nQG4=O$ny=&|e0#:(U?8V_bLT6z-aS||CaK=9M[ z|h9I/^');

/**#@-*/

//add support for revision
//Backup data incase if data is being erased or changed
define('WP_POST_REVISIONS', true);
define('WP_POST_REVISIONS', 5);

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (!defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
