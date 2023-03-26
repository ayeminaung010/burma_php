<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create New Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-8">

                <h1>Create New Student</h1>
                <form action="store.php" method="POST">
                    <div class="form-group my-2">
                        <label for="name">Name</label>
                        <input type="text" name='name' class='form-control' placeholder='Enter Name'>
                    </div>
                    <div class="form-group my-2">
                        <label for="email">Email</label>
                        <input type="email"  name='email' class='form-control' placeholder='Enter Email'>
                    </div>
                    <div class="form-group my-2">
                        <label for="gender">Gender</label>
                        <select name="gender" class=' form-control' id="">
                            <option value="" disabled selected>Gender</option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div class="form-group my-2">
                        <label for="name">Date of birth</label>
                        <input type="date" name='dob' class='form-control' >
                    </div>
                    <div class="form-group my-2">
                        <label for="name">Age</label>
                        <input type="number" name='age' class='form-control' placeholder='Enter Age'>
                    </div>
                    <div class="form-group my-2">
                        <button type='submit' class=' btn btn-primary'>Create</button>
                    </div>

                </form>

            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</html>