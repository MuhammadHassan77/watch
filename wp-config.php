<?php
# Database Configuration
define( 'DB_NAME', 'wp_mwnn' );
define( 'DB_USER', 'mwnn' );
define( 'DB_PASSWORD', 'SGvGx3i3KWTSiBteCNwF' );
define( 'DB_HOST', '127.0.0.1' );
define( 'DB_HOST_SLAVE', '127.0.0.1' );
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', 'utf8_unicode_ci');
$table_prefix = 'wp_';

# Security Salts, Keys, Etc
define('AUTH_KEY',         'PAB%g/4zKL~L&}?&z!{G~jsnl~:w3&h))$v#7$(vE4I>k&u*Ocit8piOz[fW4`AK');
define('SECURE_AUTH_KEY',  '1)+6]mQ$$<9=zaF[%>WGjPm=mkh`05@5Q>&!v#8#[a Rg&8h(Y!+|Ngm[ 0cXN13');
define('LOGGED_IN_KEY',    'LdZTgOrx@6 O7;7uLxQOH<<KJUv-t;-(R15M:<v{`AiEo/r/xI;v|Rn~-BSZ?-|*');
define('NONCE_KEY',        'zy+wPZYvy8uW/R<qj;[ATChS:YG}T:sKNWEA,j!E)0]VWs0Cry<z }OW[h!HZ>jc');
define('AUTH_SALT',        'X iz+uK]3= &ooXw7iFh:F+i<[BQK^Wa=dC{|zq4~pLfvHK-3XIn;bb#<e/ `V}b');
define('SECURE_AUTH_SALT', '-Xj!F+/:}>^f4L?M6$s/PX5l6d]|S34Ij9/K`6-KToO@9-~/Vs52)_ZJ<Yrwv7;X');
define('LOGGED_IN_SALT',   'S=j0+sTmj[9^)<b^b(<s|}+WNd AzqQO39pQ`fo2bL=q^aN9!D][11WPG&!Ox2es');
define('NONCE_SALT',       '7-1pmq&?$lf$ma]L{4QD]*%R:cgIgLUJa*f_NbBajj0+`HpQe0.vG`z)bHHAb&.]');


# Localized Language Stuff

define( 'WP_CACHE', TRUE );

define( 'WP_AUTO_UPDATE_CORE', false );

define( 'PWP_NAME', 'mwnn' );

define( 'FS_METHOD', 'direct' );

define( 'FS_CHMOD_DIR', 0775 );

define( 'FS_CHMOD_FILE', 0664 );

umask(0002);

define( 'WPE_APIKEY', '2aaa0c58bd31faf7077a0482ad1962d3f50aab2b' );

define( 'WPE_CLUSTER_ID', '100778' );

define( 'WPE_CLUSTER_TYPE', 'pod' );

define( 'WPE_ISP', true );

define( 'WPE_BPOD', false );

define( 'WPE_RO_FILESYSTEM', false );

define( 'WPE_LARGEFS_BUCKET', 'largefs.wpengine' );

define( 'WPE_SFTP_PORT', 2222 );

define( 'WPE_SFTP_ENDPOINT', '' );

define( 'WPE_LBMASTER_IP', '' );

define( 'WPE_CDN_DISABLE_ALLOWED', true );

define( 'DISALLOW_FILE_MODS', FALSE );

define( 'DISALLOW_FILE_EDIT', FALSE );

define( 'DISABLE_WP_CRON', false );

define( 'WPE_FORCE_SSL_LOGIN', false );

define( 'FORCE_SSL_LOGIN', false );

/*SSLSTART*/ if ( isset($_SERVER['HTTP_X_WPE_SSL']) && $_SERVER['HTTP_X_WPE_SSL'] ) $_SERVER['HTTPS'] = 'on'; /*SSLEND*/

define( 'WPE_EXTERNAL_URL', false );

define( 'WP_POST_REVISIONS', FALSE );

define( 'WPE_WHITELABEL', 'wpengine' );

define( 'WP_TURN_OFF_ADMIN_BAR', false );

define( 'WPE_BETA_TESTER', false );

$wpe_cdn_uris=array ( );

$wpe_no_cdn_uris=array ( );

$wpe_content_regexs=array ( );

$wpe_all_domains=array ( 0 => 'mwnn.wpengine.com', );

$wpe_varnish_servers=array ( 0 => 'pod-100778', );

$wpe_special_ips=array ( 0 => '104.196.201.1', );

$wpe_netdna_domains=array ( );

$wpe_netdna_domains_secure=array ( );

$wpe_netdna_push_domains=array ( );

$wpe_domain_mappings=array ( );

$memcached_servers=array ( 'default' =>  array ( 0 => 'unix:///tmp/memcached.sock', ), );
define('WPLANG','');

# WP Engine ID


# WP Engine Settings






# That's It. Pencils down
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');
require_once(ABSPATH . 'wp-settings.php');
