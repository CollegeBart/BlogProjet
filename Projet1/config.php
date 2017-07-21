<?php
ob_start();
session_start();



define('DBADMIN', 'localhost');
define('DBUSER', 'root');
define('DBPASSWORD', '');
define('DBNAME', '');

$database = new PDO("mysql:host=".DBADMIN.";oirt-8889;dbname=".DBNAME, DBUSER,DBPASSWORD);
$database->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


function __loaderauto($class) {

    $class = strtolower($class);

    $classpath = $class . 'php';
    if( file_exists($classpath)) 
    {
        require_once $classpath;
    }

    $classpath = $class .'.php';
    if ( file_exists($classpath)) 
    {
        require_once $classpath;
    }

    $classpath = $class .'.php';
    if(file_exists($classpath))
    {
        require_once $classpath;
    }

}


$user = new User($database);

?>
