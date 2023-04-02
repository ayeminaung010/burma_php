<?php

    require_once __DIR__ . "/vendor/autoload.php";

    require_once __DIR__ . "/database.php";
    require_once __DIR__ . "/routes.php";

    use Symfony\Component\HttpFoundation\Request;
    
    $request = Request::createFromGlobals();

?>