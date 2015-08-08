<?php
/*
* Control error reporting here
*
* Debug Mode: error_reporting( E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING | E_RECOVERABLE_ERROR );
* Production Mode: error_reporting(0);     // DO NOT show any possible warning, errrors, errors parse, user error, etc..
* Maintenance Mode: error_reporting(0);    // DO NOT show any possible warning, errrors, errors parse, user error, etc.. 
*
*/
//error_reporting(0);
error_reporting( E_CORE_ERROR | E_CORE_WARNING | E_COMPILE_ERROR | E_ERROR | E_WARNING | E_PARSE | E_USER_ERROR | E_USER_WARNING | E_RECOVERABLE_ERROR );



/*
* Absolute Path ( cuidado ao usar - isso retorna ex.: /home/public/app/folder/ ou c:/app/dir/ )
*
*/
if (DIRECTORY_SEPARATOR=='/')
{
    $absolute_path = dirname(__FILE__).'/';
    define( "ABSPATH", dirname(__FILE__).'/' );
}
else
{
    $absolute_path = str_replace('\\', '/', dirname(__FILE__)).'/';
}



/* 
* System defines it has the same effect as constants
*/
define( "HTTP",             "http://" );
define( "HTTPS",            "https://" );
define( "SERVER_NAME",      $_SERVER['SERVER_NAME'] );
define( "SERVER_IP",        $_SERVER['SERVER_ADDR'] );

define("ROOTDIR",           $_SERVER['DOCUMENT_ROOT']);
define("DIRROOT",           "/kinthai.com.br/Delivery" );
define("DIR",               "/kinthai.com.br/Delivery" );
define("CONF",              $_SERVER['DOCUMENT_ROOT'] . DIRROOT . "/login/src/config");
define("CLASSES",           $_SERVER['DOCUMENT_ROOT'] . DIRROOT . "/login/src/classes");
define("DAO",               $_SERVER['DOCUMENT_ROOT'] . DIRROOT . "/login/src/dao");
define("UTIL",              $_SERVER['DOCUMENT_ROOT'] . DIRROOT . "/login/src/util");
define("ELEMENTS",          $_SERVER['DOCUMENT_ROOT'] . DIRROOT . "/login/view/elements");
define("CSS",               $_SERVER['DOCUMENT_ROOT'] . DIRROOT . "/login/view/css");
define("IMG",               $_SERVER['DOCUMENT_ROOT'] . DIRROOT . "/login/view/images");
define("STATIC_VERSION",    "1.001");
?>