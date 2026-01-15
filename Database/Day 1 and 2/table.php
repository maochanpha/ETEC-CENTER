<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container mt-4 p-4 shadow">
        <a href="form.php" class="btn btn-success float-end mb-2">+Add Employee</a>
        <table class="table table-hover text-center">
            <thead class="table-dark">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Position</th>
                    <th>Salary</th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php 
                include 'db.php';
                $select = "SELECT * FROM tbl_employee";
                $execute = mysqli_query($conn, $select);
                while($row = mysqli_fetch_array($execute)){
                echo "<tbody>";
                echo "<td>".$row['id']."</td>";
                echo "<td>".$row['name']."</td>";
                echo "<td>".$row['gender']."</td>";
                echo "<td>".$row['email']."</td>";
                echo "<td>".$row['position']."</td>";
                echo "<td>".$row['salary']."</td>";
                echo "<td>
                    <a href='edit.php?id=".$row['id']."' class='btn btn-outline-warning btn-sm'>Edit</a>
                    <a href='delete.php?id=".$row['id']."' class='btn btn-outline-danger btn-sm' onclick='return confirm(\"Are you sure you want to delete this employee?\")'>Delete</a>
                </td>";
                }
            ?>
            </tbody>
        </table>
    </div>
</body>
</html>