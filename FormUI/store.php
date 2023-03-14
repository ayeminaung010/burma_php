<?php

    // die(var_dump($_POST));
    try{
        $pdo = new PDO("mysql:dbname=school;host=localhost",'root','kali');
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $result = $pdo->prepare("
        INSERT INTO `students` (`name`,`email`,`gender`,`dob`,`age`)
        VALUES 
        (:name, :email ,:gender, :dob, :age)

        ");
        
        $result->bindParam(':name', $_POST['name']);
        $result->bindParam(':email', $_POST['email']);
        $result->bindParam(':gender', $_POST['gender']);
        $result->bindParam(':dob', $_POST['dob']);
        $result->bindParam(':age', $_POST['age']);
        
        if($result->execute()){
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