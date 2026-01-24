<?php
if(isset($_POST['btnSubmit'])){
    include 'db.php';
    $pro_name = $_POST['pro_name'];
    $quantity = $_POST['quantity'];
    $price = $_POST['price'];
    $total = $quantity * $price;
    $image = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];
    $path = "upload/".$image;
    move_uploaded_file($tmp_name, $path);
    $sql = "INSERT INTO tbl_product (product_name, qty, price, total, image) VALUES ('$pro_name', '$quantity', '$price', '$total', '$path')";
    $execute = mysqli_query($conn, $sql);
    if($execute){
        header("Location: table.php");
    }
}
?>