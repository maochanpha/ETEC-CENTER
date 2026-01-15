<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body class="p-2">
    <a href="table.php"><i class="fa-solid fa-left-long fs-2"></i></a>
    <div class="container mt-4 p-4 shadow w-50">
        <form action="insert.php" method="post">
            <h1 class="text-center">Form</h1>
            <div class="mb-2">
                <label for="" class="m-2">Employee Name:</label>
                <input type="text" name="name" class="form-control" placeholder='Enter Your Name'>

                <label for="" class="m-2">Gender</label>
                <select name="gender" id="gender" class="form-select">
                    <option value="" disabled selected>-----Other-----</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>

                <label for="" class="m-2">Email:</label>
                <input type="text" name="email" class="form-control" placeholder='Enter Your Email'>

                <label for="" class="m-2">Position:</label>
                <select name="position" id="position" class="form-select">
                    <option value="" disabled selected>---Select Position---</option>
                    <option value="manager">Manager</option>
                    <option value="supervisor">Supervisor</option>
                    <option value="back-end">Backend</option>
                    <option value="frontend">Frontend</option>
                    <option value="design">Designer</option>
                </select>
                <label for="" class="m-2">Salary:</label>
                <input type="number" name="salary"  class="form-control" placeholder='Enter Your Salary'>
            </div>

            <div class="text-center mt-4">
                <button class="btn btn-success" type="submit" name="btnsubmit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>