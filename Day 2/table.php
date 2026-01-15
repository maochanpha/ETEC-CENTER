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
    <?php
    $id = 1;
    $name = "Phaa";
    $gender = "Male";

    ?>
    <div class="container">
        <table class="table table-center table-hover">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Gender</th>
                <th>Action</th>
            </tr>
            <tr>
                <td><?php echo $id?></td>
                <td><?php echo $name?></td>
                <td><?php echo $gender?></td>
                <td>
                    <button class="bg-danger rounded border-0 text-white">Delete</button>
                    <button class="bg-primary rounded border-0 text-white">Edit</button>
                </td>
            </tr>
        </table>
    </div>
</body>
</html>