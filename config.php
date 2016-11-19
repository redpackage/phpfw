<?php
//HOST
$host = 'http://' . $_SERVER['HTTP_HOST'] . '/';
// HTTP
define('HTTP_SERVER', $host);
//HTTPS
define('HTTPS_SERVER', $host);
// DIR
define('BASE_PATH', str_replace('\\', '/', realpath(dirname(__FILE__) . '/')) . "/");
define('DIR_APPLICATION', BASE_PATH . '/catalog/');
define('DIR_SYSTEM', BASE_PATH . '/system/');
define('DIR_COMMON', BASE_PATH . '/common/');
// DB
//define('DB_DRIVER', 'mysqli');
//define('DB_HOSTNAME', '42.51.129.72');
//define('DB_USERNAME', 'family');
//define('DB_PASSWORD', 'ggg640400640400640400~!@#');
//define('DB_DATABASE', 'tmall');
//define('DB_PORT', '3306');
//define('DB_PREFIX', 'mcc_');
//// DB_DQD
//define('DB_DRIVER_DQD', 'mysqli');
//define('DB_HOSTNAME_DQD', '42.51.129.72');
//define('DB_USERNAME_DQD', 'family');
//define('DB_PASSWORD_DQD', 'ggg640400640400640400~!@#');
//define('DB_DATABASE_DQD', 'duiquduo');
//define('DB_PORT_DQD', '3306');
//define('DB_PREFIX_DQD', 'duiquduo_');
