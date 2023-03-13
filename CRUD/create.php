<?php
    try{
        $pdo = new PDO("mysql:dbname=school;host=localhost",'root','kali');
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $result = $pdo->query("
        INSERT INTO `students` (`name`,`email`,`gender`,`dob`,`age`)
        VALUES 
        ('ayeminaung','ayeminaung@gmail.com','male','2002-06-16',21)

        ");
        // var_dump
        if($result){
            echo 'data new added..';
        }else{
            echo 'Something Wrong';
        }
        
    }catch(PDOException $e){
        var_dump($e);
    }catch(Exception $e){
        echo $e->getMessage();
    }



?>