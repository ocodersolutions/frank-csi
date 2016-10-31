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
define('DB_NAME', 'frank-csi');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '[BE*C/YjwJYJHA4}hw;(R#c@-i`aXPptq+|x^XnyO$+%tm-nY1gU&RRHyf#q((N0');
define('SECURE_AUTH_KEY',  ':7-;/57Br),q[n1~KGth+WR3b_B5+3YU=9wBf}uNVb5{dQD%7s,,7=$TV@+>`&Sg');
define('LOGGED_IN_KEY',    'a#;U_iZAv{n_v[I#QXs_ZS<gQAr[.z1>A~t_l9.G,H?K[E_mwCQicsUq3&NC)2ti');
define('NONCE_KEY',        ')#TPlx,8BEqI_Yieqd(=Qq5q,+ou&QEW;b+m2*MWp4xZ5hrC]-v%;%4dV$>qke#r');
define('AUTH_SALT',        'L1_LR{ SN}0X7x6&olG7[uL4/:7@_Z7]*^HI_Q(c)tzv@rA dF+$K+73w3Epd?Lt');
define('SECURE_AUTH_SALT', 'ha;/5]U@NCMnNtRI&1._h@}FvoTcMd9 Sjb&g:T$-6Y`g^`cAe=n{|n3q<n|(#?!');
define('LOGGED_IN_SALT',   'D~qm^^cd>/b%SV4;G2*r3ADPq~K[f96wU !}kCw;QC7v;}yrAK^$b~Z{f2[U.5kD');
define('NONCE_SALT',       ',6FX{>3VWH]i7=:z]@VtL7Mp>OAp1ZO Layj93+:BBq`(a~ILlU%X*Otp?9s}!2(');

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
