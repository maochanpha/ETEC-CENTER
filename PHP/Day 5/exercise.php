<?php
$username = "";
$gender = "";
$email = "";

    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div class="shadow mb-4 w-50 mt-5 mx-auto p-4">
        <div class="container mb-4 ">
            <form method="post" class="">
                <label for="name" class="m-2 p-2">Username:</label>
                <input type="text" id="name" class="form-control mb-3 w-75" name="username" placeholder="Enter your name">

                <label for="gender" class="m-2 p-2">Gender:</label>
                <select name="gender" id="gender" class="form-select mb-4 w-75">
                    <option value="" selected disabled>Select your gender</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>

                <label for="email" class="m-2 p-2">Email:</label>
                <input type="email" id="email" class="form-control mb-3 w-75" name="email" placeholder="Enter your email">

                <div class="text-center">
                    <button class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>

    <table class="table table-bordered w-50 mx-auto text-center table-hover">
            <tr class="table-primary">
                <th>Username</th>
                <th>Gender</th>
                <th>Email</th>
            </tr>
            <tr>
                
                <td><?= $username ?></td>
                <td><?= $gender ?></td>
                <td><?= $email ?></td>
            </tr>
    </table>
</body>
</html>