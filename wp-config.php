<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'event_management' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'T&,?rXW@Q)@/3W{=lD,5nqPo[h,*QMOux/5>jx1erC6.f;R&&lHt!qBTJDbgp5<i' );
define( 'SECURE_AUTH_KEY',  'f*1[,/9K#C*%#)EXg+bU7Ihb<I^+Nq3~UJe;*$y,28^wG}XTbLN{|G+jK[2`Z}? ' );
define( 'LOGGED_IN_KEY',    '7oFa);p)@!U} N8a~U&x@%|:P71@TS?9,(U?n*}9yZ+S#byyu!`N8{YkDCUK^)Ta' );
define( 'NONCE_KEY',        '$mpU-7!rzL`Cv%0I*%cLK=cm,>TeG>l7Io)W56/!MMOv1JK~p!Ng91WxQ6[r!FBd' );
define( 'AUTH_SALT',        '_?%0Y@XlN({<)t1Y/udRJCJ&ncZ?F1pli:142[70iC]G+^tdv(HFDdp[Of0`FB4m' );
define( 'SECURE_AUTH_SALT', 'at)qa@6c<kRCA9WX;O|]Eog&pc&Xedl1CubjHhQA21mPHVX}eyk)pfP4|> 2|:wP' );
define( 'LOGGED_IN_SALT',   'x99ReX7*Pj9h<%L,^+>]!wWU=dhi@FggBQ/Ofwq.qtY_c?vvtd2r9B Nh?$szAJ#' );
define( 'NONCE_SALT',       '/Q/;SwL]ufn+.~9UMLDRAz{fcvE,c/m-Crp4cAEJL2eG)hwtYJ47X_Jrj=0I@[X&' );

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
