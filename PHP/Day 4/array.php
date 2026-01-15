<?php
    // $user = ['A', 'B', 11, 12, 5, true];
    // foreach($user as $users) {
    //     echo $users. '<br>';
    // }

    $user = [
        [
            'id' => 1,
            'name' => 'Veasna',
            'gender' => 'Male',
        ],

        [
            'id' => 2,
            'name' => 'Rachana',
            'gender' => 'Female',
        ],

        [
            'id' => 3,
            'name'=> 'ChanPha',
            'gender' => 'Male',
        ],
    ];
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
    <table class="table text-center table-bordered table-striped mt-5 w-50 mx-auto">
        <tr class="table-primary">
            <th>ID</th>
            <th>Name</th>
            <th>Gender</th>
        </tr>
        <?php foreach($user as $users) : ?>
            <tr>
                <td><?php echo $users['id'] ?></td>
                <td><?php echo $users['name'] ?></td>
                <td><?php echo $users['gender'] ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>
