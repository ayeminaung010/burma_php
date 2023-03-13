<?php
    try{
        $pdo = new PDO("mysql:dbname=school;host=localhost",'root','kali');
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $statement = $pdo->query('select * from students where id = 3');
        $student =  $statement->fetch(PDO::FETCH_CLASS);
        if($student){
            var_dump($student);
        }else{
            echo 'something wrong';
        }
    }catch(PDOException $e){
        var_dump($e);
    }catch(Exception $e){
        echo $e->getMessage();
    }



?>