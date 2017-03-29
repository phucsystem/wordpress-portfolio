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
define('DB_NAME', 'portfolio');

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
define('AUTH_KEY',         'ZYPKK`)%uNxIl<-u0UmQsxX8qr)=}tP,Vx:uE;7/*&#+rv514{0!6+[;9ZeV[y^#');
define('SECURE_AUTH_KEY',  'r>_&$ri=q;#_gr=Y#fNs&,}5MpWNc72X55+Em/t7.7J1|ojQb%W5&y|`{oY-&cG@');
define('LOGGED_IN_KEY',    'MhE] j># X|Y2%>m4?*uu|Gw8qB(qwy.obFr1/SF).u-4*[[Mdm;^d1rvTsv&)G#');
define('NONCE_KEY',        'v0`7NS+HXz#cP8*B=N~s1Fh)SBp*BUq@91oCnh@Hn0:zu%iV3iq$#Jb>5{vM$dmi');
define('AUTH_SALT',        '{&mPO%1_|f8zr*{4IZ2*z5}~@^fvu{;|!t$s~@b{sx1QRC=Bk>r;h|c2+f8CrSpZ');
define('SECURE_AUTH_SALT', 'dxCB-7oHCv]6cNBje5aj>M8uUy]5@P/n|3aS6?7G}R.AAV76ls!Ic,lCoK_%,qud');
define('LOGGED_IN_SALT',   'ud<B>_puB/7zYwnlv(e4pRL<S.[TJ>t[z8`oNgQ15$!A|Yq[KjMx`i.>^eV&rfv;');
define('NONCE_SALT',       'IUqo`^Aq(-{tyic8gb:jtE*=RiJ|Pg~J=:X1YF^mpWa+&aRb;b+RWy(*2saLEvi]');

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
