<?php
session_start();
require_once '../system/core/functions.php';
use \system\core\Router;

$qStr = ($_SERVER['QUERY_STRING']);

define("ROOT", dirname(__DIR__));
define("LAYOUT", 'default');
spl_autoload_register(function ($class){
    $class = '../' . str_replace('\\', '/', $class) . '.php';
    if(file_exists($class)){
        include $class;
    }
});

Router::add(['^single/index/(?P<id>[0-9]+)/?$'=> ['controller' => 'Single', 'action' => 'index']]);
Router::add(['^contact/index/(?P<id>[0-9]+)/?$'=> ['controller' => 'Contact', 'action' => 'index']]);

Router::add(['^admin$' => ['controller' => 'Main', 'action' => 'index', 'prefix' => 'admin\\']]);
Router::add(['^admin/(?P<controller>[a-z0-9-]+)/?(?P<action>[a-z0-9-]+)?$'=> ['prefix' => 'admin\\']]);


Router::add(['^$' => ['controller' => 'Main', 'action' => 'index']]);
Router::add(['^(?P<controller>[a-z0-9-]+)/?(?P<action>[a-z0-9-]+)?$'=> []]);

Router::dispatch($qStr);




