<?php
    try{
        $pdo = new PDO("mysql:dbname=school;host=localhost",'root','kali');
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $statement = $pdo->prepare("select * from students where id = :id");
        $statement->bindParam(':id',$_GET['id']);

        if($statement->execute()){
            $student =  $statement->fetch(PDO::FETCH_OBJ);
        }else{
            echo 'something wrong';
        }
    }catch(PDOException $e){
        var_dump($e);
    }catch(Exception $e){
        echo $e->getMessage();
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Lists</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-center">
            <div class="col-8">
                <?php if($student): ?>
                    <?php 
                        echo "<p>{$student->id} - {$student-> name} - {$student->age} - {$student->dob}</p>";
                    ?>
                <?php else: ?>
                    <?php echo 'Student Not Found'; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>