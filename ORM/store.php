<?php

    use App\Utli\Database;
    require_once __DIR__ . "/vendor/autoload.php";

    $db = new Database();
    $db->store($_POST);

?>