<?php
  error_reporting(E_ALL | E_STRICT) ; ini_set('display_errors', true);
  date_default_timezone_set("Europe/London");



// Use an autoloader
require 'config.php';
require 'util/Auth.php';




// Also spl autoload_register (Take a look at it if you like)


 function __autoload($class){
require LIBS . $class.".php" ; 
; 

 }





$bootstrap = new Bootstrap();
//optional path settings
//$bootstrap->setControllerPath() ;
//$bootstrap->setModelPath('') ;
//$bootstrap->setDefaultFile('') ;
//$bootstrap->setErrorFile('') ;
$bootstrap->init();

?>