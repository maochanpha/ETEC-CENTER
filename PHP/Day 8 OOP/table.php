<?php
class Person{
    private $id;
    private $name;
    private $gender;

    public function data($id, $name, $gender){
        $this->id = $id;
        $this->name = $name;
        $this->gender = $gender;
    }
    public function getID(){
        return $this->id;
    }
    public function getName(){
        return $this->name;
    }
    public function getGender(){
        return $this->gender;
    }
}

$id = "";
$name = "";
$gender = "";

if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['gender'])){
    $person = new Person();
    $person->data($_POST['id'], $_POST['name'], $_POST['gender']);  
    $id = $person->getID();
    $name = $person->getName();
    $gender = $person->getGender();
}

if(isset($_POST['delete'])){
    $id = "";
    $name = "";
    $gender = "";
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

    <div class="container mt-4 p-5 shadow">
        <button type="button" class="btn btn-outline-dark float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">+ Add Person</button>
        <table class="table table-hover text-center mt-4">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><?php echo $id; ?></td>
                    <td><?php echo $name; ?></td>
                    <td><?php echo $gender; ?></td>
                    <td>
                        <form method="post" style="display: inline;">
                            <button type="submit" name="delete" class="btn btn-outline-danger">Delete</button>
                        </form>
                        <button class="btn btn-outline-warning" name="edit">Edit</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1"
        aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">

                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                    <button type="button" class="btn-close"
                        data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="" method="post">
                    <div class="modal-body">

                        <div class="mb-2">
                            <label for="id" class="form-label">ID</label>
                            <input type="text" name="id" id="id" class="form-control" placeholder="enter ur id...">
                        </div>
                        <div class="mb-2">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" name="name" id="name" class="form-control"
                                placeholder="enter ur name...">
                        </div>
                        <div class="mb-2">
                            <label for="gender" class="form-label">Gender</label>
                            <select name="gender" id="gender" class="form-select">
                                <option value="" disabled selected>---other---</option>
                                <option value="Male">Male</option>
                                <option value="Female">Female</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary"
                            data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

