
<?php
define('URL','http://127.0.0.1/tradesman/');
// always provide a trailing slash(/) AFTER a path
define("LIBS", "libs/");

define('DB_TYPE','mysql');
define('DB_HOST','localhost');
define('DB_NAME','tradesman');
define('DB_USER','root');
define('DB_PASS','mysqlmysql');
define('ENVIRONMENT','development');

//putenv('APP_ENV=testing');


// the sitewide hash key, do not change this because it is used for passwords


//this is for other hash keys
define("HASH_KEY_SITE_WIDE_GENERAL_KEY","245r9usoifsodjfhou98249248u") ;

// this is for database passwords only
define("HASH_KEY_SITE_WIDE_PASSWORDS_KEY","245r9usoifsodjfhou98249248u") ;
