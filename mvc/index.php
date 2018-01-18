<?php
define('APP_PATH', __DIR__);
require_once 'libs/functions.php';
$dbConnection = getDBConnection();

//$dbConnection2 = getDBConnection();

//var_dump($dbConnection === $dbConnection2);
/**
 * Bootstrap file Web App
 */

// initialization
// i.e. DB connection, session, config, language files

$controller = filter_input(INPUT_GET, 'controller', FILTER_SANITIZE_URL);
$action = filter_input(INPUT_GET, 'action', FILTER_SANITIZE_URL);

if($controller === NULL){
    $controller = 'Pages';
}

if($action === NULL){
    $action = 'home';
}


// I) create instance of controller 
$className = ucfirst($controller) . 'Controller';

$controllerFile = 'controllers/' . $className . '.php';

if(file_exists($controllerFile)){
    require_once $controllerFile;
} else {
    throw new Exception('Controller file does not exist');
}

if(class_exists($className)){
    $controllerObject = new $className();
} else {
    throw new Exception('Class "'. $className .'" does not exist');
}

if(method_exists($controllerObject, $action)){
    $controllerObject->{$action}();
} else{
    throw new Exception('Action "'. $action .'" does not exist');
}






