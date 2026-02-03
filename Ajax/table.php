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
                <label for="name" class="col-form-label">Username:</label>
                <input type="text" class="form-control" id="name" name="name">
              </div>
              <div class="mb-3">
                <label for="gender" class="col-form-label">Gender</label>
                <select name="gender" id="gender" class="form-select">
                  <option value="">Select Gender</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
              </div>
              <div>
                <label for="profile" class="col-form-label">Profile</label>
                <img src="https://i.pinimg.com/736x/9d/16/4e/9d164e4e074d11ce4de0a508914537a8.jpg" alt="" width="110px" height="110px" id="image" class="m-2">
                <input type="file" class="form-control" id="file" name="file">
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id="update" name="update" class="btn btn-warning">Update</button>
                <button type="button" id="save" name="submit" data-bs-dismiss="modal" class="btn btn-primary">Save</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
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
              <img src="' . $row['profile'] . '" alt="" width="50px">
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
<script>
  $(document).ready(function() {
    // $('#file').hide()
    // $('#image').click(function() {
    //   $('#file').click()
    // })
    // $('#file').change(function() {
    //   let file = this.files[0]
    //   if (file) {
    //     let image = URL.createObjectURL(file)
    //     $('#image').attr('src', image)
    //   }
    // })
    // $('#add').click(function() {
    //   $('#save').show()
    //   $('#update').hide()
    //   $('#exampleModalLabel').text('Add New Students')
    //   $('#form').attr('action', 'insert.php')
    //   $('#form').trigger('reset')
    // })

    $('#save').click(function() {
      const name = $('#name').val()
      const gender = $('#gender').val()
      const profile = $('#file')[0].files[0]
      const imgurl = URL.createObjectURL(profile)

      let formdata = new FormData()
      formdata.append('file', profile)
      formdata.append('name', name)
      formdata.append('gender', gender)
      $.ajax({
        url: 'insert.php',
        method: 'POST',
        data: formdata,
        contentType: false,
        processData: false,
        success: function(response) {
          $('#form').trigger('reset');
          $('tbody').append(`      
          <tr>
          <td>${response}</td>
          <td>${name}</td>
          <td>${gender}</td>
          <td>
              <img src="${imgurl}" width="50px">
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
      </tr>`)
        }
      })
    })

    // $(document).on('click', '#edit', function() {
    //   $('#save').hide()
    //   $('#update').show()
    //   $('#exampleModalLabel').text('Edit Students')
    //   $('#form').attr('action', 'update.php')

    //   const row = $(this).closest('tr');
    //   const id = row.find('td:eq(0)').text().trim()
    //   const name = row.find('td:eq(1)').text().trim()
    //   const gender = row.find('td:eq(2)').text().trim()
    //   $('#image').attr('src', row.find('img').attr('src'));

    //   $('#id').val(id)
    //   $('#name').val(name)
    //   $('#gender').val(gender)
    //   $('#profile').attr('src', profile)
    // })
  })
</script>

</html>