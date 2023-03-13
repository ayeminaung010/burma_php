<?php
    try{
        $pdo = new PDO("mysql:dbname=school;host=localhost",'root','kali');
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $result = $pdo->query("
            DELETE FROM `students` WHERE `id` = 3;
        ");
        if($result){
            echo 'data delete success';
        }else{
            echo 'Something Wrong';
        }
        
    }catch(PDOException $e){
        var_dump($e);
    }catch(Exception $e){
        echo $e->getMessage();
    }



?>