<?php
if(isset($_POST['btnSubmit'])){
    $username = $_POST['username'];
    $gender = $_POST['gender'];
    $email = $_POST['email'];
};

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
    <div class="container mt-4 p-3 shadow">
        <table class="table text-center table-hover mt-4">
            <thead class="table-dark">
            <tr>
                <th>Username</th>
                <th>Gender</th>
                <th>Email</th>
            </thead>
            <tr>
                <td><?= $username ?></td>
                <td><?= $gender ?></td>
                <td><?= $email ?></td>
            </tr>
    </table>
    </div>
</body>
</html>