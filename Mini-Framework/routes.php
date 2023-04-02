<?php
    use App\Controllers\StudentController;

    $routes = [
        "/" => [StudentController::class,"index"],
        "/index" => [StudentController::class,"index"],
        "/create" => [StudentController::class,"create"],
        "/show" => [StudentController::class,"show"],
        "/store" => [StudentController::class,"store"],
        "/edit" => [StudentController::class,"edit"],
        "/update" => [StudentController::class,"update"],
        "/destroy" => [StudentController::class,"destroy"],
    ];

    if(array_key_exists("PATH_INFO",$_SERVER)){
        $route = $_SERVER['PATH_INFO'];
    }else{
        $route = "/index";
    }

    if(array_key_exists($route,$routes)){
        $controller = $routes[$route][0];
        $method = $routes[$route][1];
    }else{
        return notfound();
    }

    $name = new $controller();
    $name->$method();

?>