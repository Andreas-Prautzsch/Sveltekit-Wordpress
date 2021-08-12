<?php

// handle ssl
if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false) {
	$_SERVER['HTTPS'] = 'on';
}

// db settings
define('DB_NAME', getenv('WORDPRESS_DB_NAME'));
define('DB_USER', getenv('WORDPRESS_DB_USER'));
define('DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD'));
define('DB_HOST', getenv('WORDPRESS_DB_HOST'));
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// disable plugin editor
define('DISALLOW_FILE_EDIT', false);

// enable / disable plugin installation / theme updates
define('DISALLOW_FILE_MODS', false);

// authentication keys and salts
define('AUTH_KEY',         ')tT>xh s|)yO_=cD,6mqY!6_s.*uZib!.Z11RpNYs%$mk@|xz7U+I+qUMX.Zed&*');
define('SECURE_AUTH_KEY',  'zcBYdo<L9`,Ra2%It;TEp,xQ~JdGMO@&G I3>|xCXMNMT,[Zwqd10hTe0OVB1zx%');
define('LOGGED_IN_KEY',    'Jvk_VHiG_;XdEGL}@TKhdBWy1/eg `?2MoQAp.i9i2a&O}S!,)Xe*uh`t}e%qOs5');
define('NONCE_KEY',        '}lEU(A5M?0B$*=B}( knt@-&Ba[o =V7KfU/]qV[Vue**l0x-Tnp78*$_3YOQ<$|');
define('AUTH_SALT',        '&iM%%9--^+HSQ]FjCKlihd47*zRf<&(QljtY,%ZF|p3!ZtgKuq#`X;(}N+RI-/4j');
define('SECURE_AUTH_SALT', 'y}1+RmZ/sA)&*k4]cd059K+oJ(voT!J]HqanO!& S`@wrH3<xEW[/9xntcGHXd6o');
define('LOGGED_IN_SALT',   'S!p6E-(d&%]&8iM!3jzQJ!3$|~nPU0XNVHi5p5-?VnJ_4X2<MZI*~5DL,2Vr5d[_');
define('NONCE_SALT',       'm?Pxz0q%!M}Qn+]!cp*js%ZH0k>~f)B12V0plN-Z?qqKfsG7j^FFY%8g4/}N!Uyg');

$table_prefix = 'wp_';

define( 'WP_DEBUG', true );
define( 'WP_POST_REVISIONS', 10 );

if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

require_once( ABSPATH . 'wp-settings.php' );