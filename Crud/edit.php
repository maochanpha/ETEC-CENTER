<?php 
if(isset($_GET['id'])){
    include 'db.php';
    $id = $_GET['id'];
    $edit = "SELECT * FROM tbl_employee WHERE id= $id";
    $execute = mysqli_query($conn, $edit);
    $row = mysqli_fetch_array($execute);
    if(isset($_POST['btnupdate'])){
        $name = $_POST['name'];
        $gender = $_POST['gender'];
        $email = $_POST['email'];
        $position = $_POST['position'];
        $salary = $_POST['salary'];
        $update = "UPDATE tbl_employee SET name='$name', gender='$gender', email='$email', position='$position', salary='$salary' WHERE id=$id";
        $execute_update = mysqli_query($conn, $update);
        if($execute_update){
            header("Location: table.php");
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Edit Employee</title>
</head>
<body class="p-2">
    <a href="table.php"><i class="fa-solid fa-left-long fs-2"></i></a>
    <div class="container mt-4 p-4 shadow w-50">
        <form action="edit.php?id=<?php echo $id; ?>" method="post">
            <h1 class="text-center">Edit Employee</h1>
            <input type="hidden" name="id" value="<?= $row['id'] ?>">
            <div class="mb-2">
                <label for="" class="m-2">Employee Name:</label>
                <input type="text" name="name" class="form-control" placeholder='Enter Your Name' value="<?php echo $row['name']; ?>">

                <label for="" class="m-2">Gender</label>
                <select name="gender" id="gender" class="form-select">
                    <option value="" disabled>-----Other-----</option>
                    <option value="male" <?php if($row['gender'] == 'male') echo 'selected'; ?>>Male</option>
                    <option value="female" <?php if($row['gender'] == 'female') echo 'selected'; ?>>Female</option>
                </select>

                <label for="" class="m-2">Email:</label>
                <input type="text" name="email" class="form-control" placeholder='Enter Your Email' value="<?php echo $row['email']; ?>">

                <label for="" class="m-2">Position:</label>
                <select name="position" id="position" class="form-select">
                    <option value="" disabled>---Select Position---</option>
                    <option value="manager" <?php if($row['position'] == 'manager') echo 'selected'; ?>>Manager</option>
                    <option value="supervisor" <?php if($row['position'] == 'supervisor') echo 'selected'; ?>>Supervisor</option>
                    <option value="back-end" <?php if($row['position'] == 'back-end') echo 'selected'; ?>>Backend</option>
                    <option value="frontend" <?php if($row['position'] == 'frontend') echo 'selected'; ?>>Frontend</option>
                    <option value="design" <?php if($row['position'] == 'design') echo 'selected'; ?>>Designer</option>
                </select>
                <label for="" class="m-2">Salary:</label>
                <input type="number" name="salary"  class="form-control" placeholder='Enter Your Salary' value="<?php echo $row['salary']; ?>">
            </div>

            <div class="text-center mt-4">
                <button class="btn btn-success" type="submit" name="btnupdate">Update</button>
            </div>
        </form>
    </div>
</body>
</html>