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
                    <h1>Create New Student</h1>
                <form action="update.php" method="POST">
                    <input type="hidden" name="id" value="<?php echo $student->id; ?>">
                    <div class="form-group my-2">
                        <label for="name">Name</label>
                        <input type="text" name='name' value="<?php echo $student->name; ?>" class='form-control' placeholder='Enter Name'>
                    </div>
                    <div class="form-group my-2">
                        <label for="email">Email</label>
                        <input type="email"  name='email' value="<?php echo $student->email; ?>" class='form-control' placeholder='Enter Email'>
                    </div>
                    <div class="form-group my-2">
                        <label for="gender">Gender </label>
                        <select name="gender" class=' form-control' id="">
                            <option value="" disabled>Gender</option>
                            <option value="male" <?php if($student->gender === "male") {echo "selected";} ?>  >Male</option>
                            <option value="female" <?php if($student->gender === "female") {echo "selected";}?> >Female</option>
                        </select>
                    </div>
                    <div class="form-group my-2">
                        <label for="name">Date of birth</label>
                        <input type="date" value="<?php echo $student->dob; ?>" name='dob' class='form-control' >
                    </div>
                    <div class="form-group my-2">
                        <label for="name">Age</label>
                        <input type="number" value="<?php echo $student->age; ?>" name='age' class='form-control' placeholder='Enter Age'>
                    </div>
                    <div class="form-group my-2">
                        <button type='submit' class=' btn btn-primary'>Save</button>
                    </div>

                </form>

                <?php else: ?>
                    <?php echo 'Student Not Found'; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>