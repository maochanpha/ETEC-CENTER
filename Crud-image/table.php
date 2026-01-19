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
        <a href="form.php" class="btn btn-dark float-end mb-2">Add Product</a>
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
                            <a href='edit.php?id=".$row['id']."' class='btn btn-outline-warning btn-sm'>Edit</a>
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
        $('#file').hide()
        $('#image').click(function(){
            $('#file').click()
        })
        $('#file').change(function(){
            let file = this.files[0]
            if(file){
                let image=URL.createObjectURL(file)
                $('#image').attr('src',image)
            }
        })
    })
</script>