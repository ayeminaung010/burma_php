<?php

require_once __DIR__ . "/vendor/autoload.php";

require_once __DIR__ . "/database.php";

use App\Controllers\StudentController;

function notFound()
{
    echo "404 not found";
}


$routes = [
    "/index" => [StudentController::class,"index"],
    "/create" => [StudentController::class,"create"],
    "/show" => [StudentController::class,"show"],
];

$route = $_SERVER['PATH_INFO'];

if(array_key_exists($route,$routes)){
    $controller = $routes[$route][0];
    $method = $routes[$route][1];
}else{
    return notfound();
}

$name = new $controller();
$name->$method();



?>