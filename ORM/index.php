<?php

    use App\Utli\Database;
    require_once __DIR__ . "/vendor/autoload.php";

    $db = new Database();
    $students = $db->index();
    // dd($students);
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
                <a href="create.php" class='btn btn-primary my-5'>Create New Students</a>
                <h5>Student Lists</h5>
                <?php if($students): ?>
                    <?php foreach($students as $student): ?>
                        <?php 
                            echo "<p><a href='show.php?id={$student->id}' class='text-decoration-none'>{$student->id} - {$student-> name} </a></p>";
                        ?>
                    <?php endforeach; ?>
                <?php else: ?>
                    <p>There is no Students</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>