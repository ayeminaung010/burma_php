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
                <h3> Student Detail
                </h5>
                <?php if($student): ?>
                    <p>ID - <?php echo $student->id; ?></p>
                    <p>Name - <?php echo $student->name; ?></p>
                    <p>Email - <?php echo $student->email; ?></p>
                    <p>Gender - <?php echo $student->gender; ?></p>
                    <p>Date of Birth - <?php echo $student->dob; ?></p>
                    <p>Age - <?php echo $student->age; ?></p>
                    <a href="index" class='btn btn-primary'>Home</a>
                    <a href="edit?id=<?php echo $student->id; ?>" class='btn btn-secondary'>Edit</a>
                    <a href="destroy?id=<?php echo $student->id; ?>" class='btn btn-danger'>Delete</a>
                <?php else: ?>
                    <?php echo 'Student Not Found'; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>
</html>