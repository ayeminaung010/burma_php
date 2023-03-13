<?php
    // phpinfo();
    try{
        $pdo = new PDO("mysql:dbname=school;host=localhost" ,'root','kali');
        var_dump($pdo);
    }catch(PDOException $e){
        var_dump($e);
    }catch(Exception $e){
        // var_dump($e);
        echo $e->getMessage();
    }





?>