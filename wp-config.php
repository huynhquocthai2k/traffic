<?php
define( 'WP_CACHE', true ); // Added by WP Rocket
  
 define('WP_SITEURL', 'https://hqt.agency');  
 define('WP_HOME', 'https://hqt.agency');  
 
define('WP_AUTO_UPDATE_CORE', 'minor');

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

// ** MySQL settings ** //

/** The name of the database for WordPress */

define( 'DB_NAME', 'hqt02539_wrxb5e' );
/** MySQL database username */

define( 'DB_USER', 'hqt02539_qwu6z8' );
/** MySQL database password */

define( 'DB_PASSWORD', 'GDXFIZB86@t165PLm' );
/** MySQL hostname */

define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */

define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */

define( 'DB_COLLATE', '' );

/**

 * Authentication Unique Keys and Salts.

 *

 * Change these to different unique phrases!

 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}

 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.

 *

 * @since 2.6.0

 */

define('AUTH_KEY', '3&CALpiGECUfM5%79up|R84ebF5LjV_9v;WuBSbPzC%TxX8*75Pu5~8_9*:lg%+3');

define('SECURE_AUTH_KEY', '3E[FIoAYM_6HG0aG;3b/2O@gfj0Y0*VH7L3&1-t&5kK8~y3399B(HE*mV6&uH6&3');

define('LOGGED_IN_KEY', '0(518Y@FiKH4(E_@6R8b5O@(FoO0[EZ1*H[Hx&/p+!(6VC9Yg5WH*3B#X73nR)J7');

define('NONCE_KEY', ']4+]]O#4mP%;&0KE-17Wa]+87Q!/rm#&u53iOr!9PDHIZxA2R#xn!SvGm40w/|2k');

define('AUTH_SALT', '@bb!qR7&w1g_~qk*)622j9/Qv1-91+Z6[ZkJAv2B08O4N/to2fd(qi5ESde9[16m');

define('SECURE_AUTH_SALT', '-lP7!9!Ow0%1h2;v[@8*_0A_:#4izom5DfajV+7d6*6IWcJo74g:#16i+|9P63*m');

define('LOGGED_IN_SALT', 's6/tB+008*TSv!L+Dvsn287ST~XxhYQ_)2%S3dk&4y3o@p)~((M)gcZAh0+eae(K');

define('NONCE_SALT', '[i5V04|(qr50~jjSMz|4Gl5[(iO*oN-6#*4O#Xe2#45r164-S!q%n3|H[i:!ng/;');

/**

 * WordPress Database Table prefix.

 *

 * You can have multiple installations in one database if you give each

 * a unique prefix. Only numbers, letters, and underscores please!

 */

$table_prefix = 'ClavQAt_';

define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */

if ( ! defined( 'ABSPATH' ) )

	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */

require_once ABSPATH . 'wp-settings.php';

