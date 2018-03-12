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
define('DB_NAME', 'admin_bostoneyelids');

/** MySQL database username */
define('DB_USER', 'admin_be');

/** MySQL database password */
define('DB_PASSWORD', 'Cherry2000!');

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
define('AUTH_KEY',         '[N)~jJ76Z3bc+9F(&aiCS).=4oJ#x}9M4mFaA.r]dW;~yV]7CF5e_]U?P21T*$k^');
define('SECURE_AUTH_KEY',  'QX@q1[[:~HK2L`9``f}/kAo6Rc*%zse&wQ2h(AJr[UM<lJlv8*;]oouqU}{{K#|H');
define('LOGGED_IN_KEY',    'n0;{TN=DMot|q44BmTHo`ioL>N|u8L+V?qc{tKk8Q.7VWKp5Ht.huA,[OD.;:*sh');
define('NONCE_KEY',        'pjug%FMQ]vP`$*mJsz xCO<^-U:cVlVTfeqZF&hKS0vs?.L.CcF^zh@(^0|v@6O3');
define('AUTH_SALT',        'F$!<N:50Dg$W`z$V/]s77>w ,]DM(X:3{g%EwZp;.[Qhq~;Sl[x>Qm]V?{hZ)^MT');
define('SECURE_AUTH_SALT', '!`h@/Rg9QrD!I[yDh=6RSgoHYe#,Lahfns5<qJdXk,ZXuj( *^jFl+]1$Q*6+^GR');
define('LOGGED_IN_SALT',   'QwA9/uQ7dgwW7J/Fds$q,w6s9So.*=B&cc~V^zHP]j2@R#O`S24nK##;n,:rx]mC');
define('NONCE_SALT',       'EVd,@=(hN6%<=u!6;L4tB@>@93]|1$b`9L&f/XtPf2E4xRn)/6z*]m`N@g$xXZ_e');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'bostoneyelids.skylerdesign.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
define('SUNRISE', 'ON');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
