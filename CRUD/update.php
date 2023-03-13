<?php
    try{
        $pdo = new PDO("mysql:dbname=school;host=localhost",'root','kali');
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $statement = $pdo->query("
            UPDATE `students` SET `gender` = 'female', `age` = 10 WHERE `id` = 3;
        ");
        var_dump($statement);
        if($statement){
            echo 'data updated..';
        }else{
            echo 'Something Wrong';
        }
    }catch(PDOException $e){
        var_dump($e);
    }catch(Exception $e){
        echo $e->getMessage();
    }



?>