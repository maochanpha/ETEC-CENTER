<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="container mt-4 p-5 shadow rounded-3 w-50">
        <form action="move_file.php" method="post" enctype="multipart/form-data">
            <img src="https://i.pinimg.com/736x/9d/16/4e/9d164e4e074d11ce4de0a508914537a8.jpg?fbclid=IwY2xjawPVdXJleHRuA2FlbQIxMABicmlkETFXYmcycFZFb21qcGREWUpac3J0YwZhcHBfaWQQMjIyMDM5MTc4ODIwMDg5MgABHkZ8tgNaMNKCm9tD4Zox1q7xr6qulb5nL2GHyJo2ZUR_B6Gi6H1XFbWz7QT3_aem_F_OZYKqUK8x13vh9MRYGxw" 
            id="image" alt=""
            width="200px" height="200px" class="rounded-circle">
            <input type="file" id="file" name="file" class="form-control"><br><br>
            <button class="btn btn-primary" name="btnSubmit">Submit</button>
        </form>
    </div>
</body>
</html>

<script>
    $(document).ready(function(){
        $('#file').hide();
        $('#image').click(function(){
            $('#file').click();
        })
        $('#file').change(function(){
            const file = this.files[0];
            if(file){
                const image =URL.createObjectURL(file)
                $('#image').attr('src', image);
            }
        })
    })
</script>