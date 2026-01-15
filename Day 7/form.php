<?php
$error = '';


if(isset($_POST['btnSubmit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $repeat_password = $_POST['repeat_password'];
    
    if($password !== $repeat_password){
        $error = "<p class='text-danger'>Error: Password Does not match</p>";
    }else{
        $error = "<p class='text-success'>Registration successful!</p>";

    }
}
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
        <div class="container mb-4">
        <form action="" method="post">
            <label for="" class="m-2 p-2">Email:</label>
            <input type="email" name="email" placeholder="Enter Your Email" class="form-control">

            <label for="" class="m-2 p-2">Password:</label>
            <input type="password" name="password" placeholder="Enter Your Password" class="form-control">

            <label for="" class="m-2 p-2">Repeat Password:</label>
            <input type="password" name="repeat_password" placeholder="Repeat Your Password" class="form-control">

            <div class="mt-4">
            <p>By creating an account, you agree to our <a href="">Term & Privacy</a></p>
            </div>
            <div class="text-center mt-4">
                <button name="btnSubmit" class="btn btn-success w-100">Register</button><br>
                <p class="mt-4">Already have an account? <a href="">Login</a></p>
            </div>
        </form>
    </div>
</div>
    <h3 class="text-center"><?php echo $error; ?></h3>
        <table class="table text-center table-hover w-50 mx-auto mt-4">
            <tr class="table-dark">
                <th>Email</th>
                <th>Password</th>
                <th>Repeat Password</th>
            </tr>
            <tr>
                <td><?php echo $email; ?></td>
                <td><?php echo $password; ?></td>
                <td><?php echo $repeat_password; ?></td>
            </tr>
</table>
</body>
</html>