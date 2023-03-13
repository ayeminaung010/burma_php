<?php
    try{
        $pdo = new PDO("mysql:dbname=school;host=localhost",'root','kali');
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $statement = $pdo->query('select * from students');
        $students =  $statement->fetchAll(PDO::FETCH_CLASS);
        var_dump($students);
        
    }catch(PDOException $e){
        var_dump($e);
    }catch(Exception $e){
        echo $e->getMessage();
    }



?>