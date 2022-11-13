<?php
use app\core\Router;
use app\lib\Db;

define('ROOT', dirname(__FILE__));
require_once ROOT.'/app/lib/debug.php';

spl_autoload_register(function($class){
    $path = str_replace('\\', '/', $class.'.php');
    if(file_exists($path)){
        require_once $path;
    }
});

$rote = new Router();
$rote->run();

?>