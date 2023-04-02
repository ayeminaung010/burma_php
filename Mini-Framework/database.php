<?php
    use Illuminate\Database\Capsule\Manager as DB;

    $db = new DB;

    $db->addConnection([
        'driver' => 'mysql',
        'host' => 'localhost',
        'database' => 'school',
        'username' => 'root',
        'password' => 'kali',
        'charset' => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix' => '',
    ]);

    $db->setAsGlobal();

    $db->bootEloquent();

?>