<?php
define( 'YOURLS_DB_USER',   getenv('DB_USER') );
define( 'YOURLS_DB_PASS',   getenv('DB_PASSWORD') );
define( 'YOURLS_DB_NAME',   getenv('DB_NAME') );
define( 'YOURLS_DB_HOST',   getenv('DB_HOST') . ':' . getenv('DB_PORT') );
define( 'YOURLS_DB_PREFIX', 'yourls_' );

define( 'YOURLS_SITE',      getenv('YOURLS_SITE') );
define( 'YOURLS_LANG',      '' );
define( 'YOURLS_UNIQUE_URLS', true );
define( 'YOURLS_PRIVATE',   true );
define( 'YOURLS_COOKIEKEY', getenv('YOURLS_COOKIEKEY') );

$yourls_user_passwords = [
    getenv('ADMIN_USER') => getenv('ADMIN_PASS'),
];

define( 'YOURLS_URL_CONVERT', 36 );
define( 'YOURLS_DEBUG', false );

/**
* Reserved keywords (so that generated URLs won't match them)
* Define here negative, unwanted or potentially misleading keywords.
*/
$yourls_reserved_URL = [
    'porn',
    'faggot',
    'sex',
    'nigger',
    'fuck',
    'cunt',
    'dick',
];

/*
 ** Personal settings would go after here.
 */
