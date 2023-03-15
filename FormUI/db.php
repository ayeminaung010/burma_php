<?php

class DB
{
    protected $pdo;
    public function  __construct()
    {
        try{
            $this->pdo = new PDO("mysql:dbname=school;host=localhost",'root','kali');
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        }catch(PDOException $e){
            var_dump($e);
        }catch(Exception $e){
            echo $e->getMessage();
        }
    }

    public function index(){
        
        $statement = $this->pdo->query('select * from students');
        
        if($statement){
            $students =  $statement->fetchAll(PDO::FETCH_CLASS);
            return $students;
        }
    }

    public function store(){
    
        $result = $this->pdo->prepare("
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
            header('location: index.php');
        }else{
            echo 'Something Wrong';
        }
    }

    public function show($id){
        
        $statement = $this->pdo->prepare("select * from students where id = :id");
        $statement->bindParam(':id',$id);

        if($statement->execute()){
            $student =  $statement->fetch(PDO::FETCH_OBJ);
            return $student;

        }else{
            echo 'something wrong';
        }
    }

    public function update(){
    
        $statement = $this->pdo->prepare("
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
            header('location: index.php');
        }else{
            echo 'Something Wrong';
        }
    }


    public function destroy(){
    
        $statement = $this->pdo->prepare("DELETE FROM `students` WHERE `id` = :id");
        $statement->bindParam(':id',$_GET['id']);

        if($statement->execute()){
            header('location: index.php');
        }else{
            echo 'something wrong';
        }
    }
}


?>