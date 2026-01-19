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
        <h2 class="text-center mb-4">Add New Product</h2>
        <form action="insert.php" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="pro_name" class="form-label">Product Name:</label>
                <input type="text" class="form-control" id="pro_name" name="pro_name" required>
            </div>
            <div class="mb-3">
                <label for="quantity" class="form-label">Quantity:</label>
                <input type="number" class="form-control" id="quantity" name="quantity" required>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Price:</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>
            <div class="mb-3">
                <label for="image" class="form-label">Image:</label><br>
                <img id="image" src="https://i.pinimg.com/736x/5a/f1/c8/5af1c88274c1482732ee11bd122847d2.jpg" alt="" width="110px" height="113px" class="">
                <input type="file" id="file" name="image" class="form-control mt-2" required>
            </div>
            <button type="submit" name="btnSubmit" class="btn btn-primary">Submit</button>
        </form>
    </div>
<script>
    $(document).ready(function(){
        $('#file').hide()
        $('#image').click(function(){
            $('#file').click()
        })
        $('#file').change(function(){
            let file = this.files[0]
            if (file){
                let reader = new FileReader()
                reader.onload = function(event){
                    $('#image').attr('src', event.target.result)
                }
                reader.readAsDataURL(file)
            }
        })
    })  
</script>
</body>
</html>