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
define('DB_NAME', 'heroku_781bcaf30998d4f');

/** MySQL database username */
define('DB_USER', 'b2fa80798c4de1');

/** MySQL database password */
define('DB_PASSWORD', 'bb92642d');

/** MySQL hostname */
define('DB_HOST', 'us-cdbr-iron-east-01.cleardb.net');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'x9)5K0rE21LtI+6l8Jwi)*LUXOUU=Rr9k1|M9?hlVs*xu:4&bn8HxlzrLe&_fd(E');
define('SECURE_AUTH_KEY',  'T6%6w#j.vO%!r7H>=uS;Ah?kEVP{7,</WZ_,n8Z]ZR{.34D]CJiaR?bg_/t8e.,u');
define('LOGGED_IN_KEY',    'n_91{?TA6JMm/>.K}@WB {C+=^Et:Hla9>(5,>$Ku(|tD755Y*^c>Pc++^VI;57S');
define('NONCE_KEY',        'y@bK]Y:aa(xopeu1@+U!4ts&C[?IA`7kl0&db}&3,|:kQe_~.o8+87Fw}#O1+h4u');
define('AUTH_SALT',        '[HW7d:7>#]s|HPp=GcvX%%?9p`RTxrn#Q#CD/9Tk5~tW{r8B{}&+U=:_(x-19ou/');
define('SECURE_AUTH_SALT', 'v5Ib66DbK/a<l>]f`]zYdCF`$u{`tN!LUvr+e*b+U#6k<|%^=Ftsi&_-VZ[A)fV/');
define('LOGGED_IN_SALT',   '2R`c)a7%;zfp7&L#y~mf%H%~j`fbmI5?+E$(:&{jiM(xYWO(JoirS$Sf0yN|.lIp');
define('NONCE_SALT',       ')@7mNT7)4@RxGk;ln/-PG+w[9 mC?Y]j195KR*H&a[5@YJ%f~<;Naf5nVMtCV1o)');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
