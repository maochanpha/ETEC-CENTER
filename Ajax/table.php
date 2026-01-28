<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <title>Document</title>
</head>

<body>
  <div class="container mt-5 p-4 rounded-3 shadow">
    <button type="button" id="add" class="btn btn-dark float-end mb-2" data-bs-toggle="modal" data-bs-target="#exampleModal">+Add New Student</button>
    <table class="table table-hover text-center">
      <thead>
        <tr>
          <th>ID</th>
          <th>Username</th>
          <th>Gender</th>
          <th>Profile</th>
          <th>Actions</th>
        </tr>
      </thead>
      <tbody>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add New Students</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <form id="form" action="insert.php" method="POST" enctype="multipart/form-data">
                  <input type="hidden" id="id" name="id">
                  <div class="mb-3">
                    <label for="recipient-name" class="col-form-label">Username:</label>
                    <input type="text" class="form-control" id="name" name="name">
                  </div>
                  <div class="mb-3">
                    <label for="message-text" class="col-form-label">Gender</label>
                    <select name="gender" id="gender" class="form-select">
                      <option value="">Select Gender</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                  </div>
                  <div>
                    <label for="profile" class="col-form-label">Profile</label>
                    <input type="file" class="form-control" id="file" name="file">
                  </div>
                  <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" id="save" name="submit" class="btn btn-primary">Save</button>
              </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <?php
        include 'db.php';
        $select = "SELECT * FROM tbl_student";
        $result = $conn->query($select);
        while ($row = mysqli_fetch_assoc($result)) {
          echo '
      <tr>
          <td>' . $row['id'] . '</td>
          <td>' . $row['name'] . '</td>
          <td>' . $row['gender'] . '</td>
          <td>
              <img src="' . $row['profile'] . '" alt="" width="50px" height="50px" class="">
          </td>
          <td>
              <div class="d-flex justify-content-center gap-2">
                <form action="delete.php" method="post">
                <input type="hidden" name="id" value="' . $row['id'] . '">
                <button name="btnDelete" class="btn btn-outline-danger" onclick="return confirm(\'Are you sure?\')">Delete</button>
                </form>
                <button id="edit" class="btn btn-outline-warning" data-bs-toggle="modal" data-bs-target="#exampleModal">Edit</button>
                </div>
          </td>
      </tr>
  ';
        }
        ?>
      </tbody>
    </table>
  </div>
</body>

</html>