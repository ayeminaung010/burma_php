<?php
    // die(var_dump($_POST));
    try{
        $pdo = new PDO("mysql:dbname=school;host=localhost",'root','kali');
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $statement = $pdo->prepare("
            UPDATE `students` SET `name` = :name , `email` = :email, `gender` = :gender, `age` = :age, `dob` = :dob WHERE `id` = :id;
        ");
        $statement->bindParam(':id' , $_POST['id']);
        $statement->bindParam(':name' , $_POST['name']);
        $statement->bindParam(':email' , $_POST['email']);
        $statement->bindParam(':gender' , $_POST['gender']);
        $statement->bindParam(':dob' , $_POST['dob']);
        $statement->bindParam(':age' , $_POST['age']);

        if($statement->execute()){
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