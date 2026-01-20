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
                <div class="container mt-4 shadow p-5 rounded-3">
                    <button type="button" class="btn btn-outline-dark float-end" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Add New Product
                    </button>        
            <table class="table table-hover text-center">
                        <thead>
                            <tr class="table-hover">
                                <th>ID</th>
                                <th>Name</th>
                                <th>Quantity</th>
                                <th>Price</th>
                                <th>Total</th>
                                <th>Image</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Add Product</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="insert.php" method="POST" enctype="multipart/form-data">
          <div class="mb-3">
            <label class="col-form-label">Product Name:</label>
            <input type="text" class="form-control" id="pro_name" name="pro_name">
          </div>
          <div class="mb-3">
            <label class="col-form-label">Quantity:</label>
            <input type="number" class="form-control" id="quantity" name="quantity">
          </div>
          <div class="mb-3">
            <label class="col-form-label">Price:</label>
            <input type="number" class="form-control" id="price" name="price">
          </div>
          <div class="mb-3">
            <label class="form-label">Image:</label><br>
            <img src="https://i.pinimg.com/736x/f6/dc/7e/f6dc7eb253892a7f33fad027e153e041.jpg" width="110px" height="113px" alt="image" id="image" class="m-2">
            <input type="file" id="file" name="image">
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" name="btnSubmit" id="btnSubmit" class="btn btn-primary">Save</button>
            <button type="submit" name="btnUpdate" id="btnUpdate" class="btn btn-warning">Update</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
                    <?php 
                    include 'db.php';
                    $select = "SELECT * FROM tbl_product";
                    $execute = mysqli_query($conn, $select);
                    while($row = mysqli_fetch_array($execute)){
                        echo "<tr>";
                        echo "<td>".$row['id']."</td>";
                        echo "<td>".$row['product_name']."</td>";
                        echo "<td>".$row['qty']."</td>";
                        echo "<td>".$row['price']."</td>";
                        $total = $row['qty'] * $row['price'];
                        echo "<td>".$total."</td>";
                        echo "<td><img src='upload/".$row['image']."' width='80px' height='80px'/></td>";
                        echo "<td>
                            <button class='btn btn-outline-warning btn-sm edit-btn' 
                                data-id='".$row['id']."' 
                                data-name='".$row['product_name']."' 
                                data-qty='".$row['qty']."' 
                                data-price='".$row['price']."' 
                                data-image='".$row['image']."' 
                                data-bs-toggle='modal' 
                                data-bs-target='#exampleModal'>
                                Edit
                            </button>
                            <a href='delete.php?id=".$row['id']."' class='btn btn-outline-danger btn-sm' onclick='return confirm(\"Are you sure you want to delete this product?\")'>Delete</a>
                        </td>";
                        echo "</tr>";
                    }
                    ?>

            </tbody>
        </table>
     </div>
</body>
    </html>
<script>
$(document).ready(function(){
    $('#file').hide();

    $('#image').click(function(){
        $('#file').click();
    });

    $('#file').change(function(){
        let file = this.files[0];
        if(file){
            let image = URL.createObjectURL(file);
            $('#image').attr('src', image);
        }
    });

    $('[data-bs-target="#exampleModal"]').not('.edit-btn').click(function(){
        $('form')[0].reset();
        $('#image').attr('src', 'https://i.pinimg.com/736x/f6/dc/7e/f6dc7eb253892a7f33fad027e153e041.jpg');

        $('#btnSubmit').show();
        $('#btnUpdate').hide();

        $('form').attr('action', 'insert.php');
    });

    $('.edit-btn').click(function(){
        let id = $(this).data('id');
        let name = $(this).data('name');
        let qty = $(this).data('qty');
        let price = $(this).data('price');
        let image = $(this).data('image');

        $('#pro_name').val(name);
        $('#quantity').val(qty);
        $('#price').val(price);
        $('#image').attr('src', 'upload/' + image);

        $('#btnSubmit').hide(); 
        $('#btnUpdate').show();

        $('form').attr('action', 'update.php?id=' + id);
    });

    $('#exampleModal').on('hidden.bs.modal', function () {
        $('form')[0].reset();
        $('#image').attr('src', 'https://i.pinimg.com/736x/f6/dc/7e/f6dc7eb253892a7f33fad027e153e041.jpg');
        $('#btnSubmit').show();
        $('#btnUpdate').hide();
        $('form').attr('action', 'insert.php');
    });

    $('#btnUpdate').hide();
});

</script>