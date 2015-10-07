<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress720');

/** MySQL database username */
define('DB_USER', 'wordpressuser973');

/** MySQL database password */
define('DB_PASSWORD', 'u7j-tFPRka!#');

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
define('AUTH_KEY',         '>[f8@c?W@T8}Y52G!b+V+FW>og:45TGIQn%rd],`EGz>(-E<AK6G:p=ZE|liRJc%');
define('SECURE_AUTH_KEY',  'zSD,q|Ca5 <0-axDI{)?Gr._|hp|32d:V.f+ror4pLlk%zze[.Z~p>m]C|1F|@GV');
define('LOGGED_IN_KEY',    'o|-;;VH6tXpS]&Q/%Jek@B>6`-/#:y4%i**&7Vfe6+L4m[k!O3DJ)`ilE4HS|gAN');
define('NONCE_KEY',        '@X88+(.uld`:z5df[kV`d-g=Nm3!v-vhW3Xy+:P=SqY,YU+78I9c(OIzH0+0LLGv');
define('AUTH_SALT',        'SZ(XdY%OW}c/=@{=[+70QV,`INj}u/bzemg+U-p-TDPF(IHA<-ck.<M+~e1W+xfa');
define('SECURE_AUTH_SALT', '!>2V)SaQc50sj:B~/r.x>~+u_qK]-w&X>@3z,~mHU?PgyL#v3RJk,#eHE-J{l H@');
define('LOGGED_IN_SALT',   '--08%),mr-|{Vb_]zsuFAJ~HtS7YM7m#luW+rAhW/pc5&ucfXfT4N+yc*{OGw-}O');
define('NONCE_SALT',       '@x1i08vdYc7mA@mY=2o&RN??/eMCfDGca&IO+Ue:fiV/FaVgV~}R[.DB o,Re.;?');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
