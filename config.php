<?php
/**
 * Created by PhpStorm.
 * User: your name
 * Date: todays date
 * Time: todays time
 */

ob_start();
session_start();
//=========== database connection variables ====================
define('DB_SERVER', "localhost"); // database host name eg. localhost or 127.0.0.1
define('DB_USER', "root"); // database user name eg. root
define('DB_DATABASE', "chruch"); //database name
define('DB_PASSWORD', ""); //database user password
define('DB_TYPE', 'mysql'); //database drive eg. mysql, pgsql, mongodb etc




//========== site details described here ========================
define('SITE_TITLE', 'codelabsecom.com');
define('SITE_TAG_LINE', 'give your tag line of your project here');

//contact ifnormation
define('SITE_CONTACT', 'your number');
//email information
define('SITE_EMAIL_INFO', 'your mail id');
//url information
define('BASE_URL', 'http://localhost/demo/');

// included main class
require_once 'app/Main.php';

/**
 * @param $class
 */
function myautoload($class) {
    require_once 'app/' . $class.'.php';
}
spl_autoload_register('myautoload');