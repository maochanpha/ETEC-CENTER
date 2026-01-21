<?php
if (isset($_POST['btnUpdate'])) {
include 'db.php';
    $id = $_GET['id'];
    $name = $_POST['pro_name'];
    $qty = $_POST['quantity'];
    $price = $_POST['price'];

    if (!empty($_FILES['image']['name'])) {
        $image = $_FILES['image']['name'];
        $tmp = $_FILES['image']['tmp_name'];
        $path = "upload/" . $image;

        move_uploaded_file($tmp, $path); 
        $sql = "UPDATE tbl_product SET product_name='$name', qty='$qty', price='$price', image='$image' WHERE id='$id'";
    } else 
    {
        $sql = "UPDATE tbl_product SET product_name='$name', qty='$qty', price='$price' WHERE id='$id'";
    }

    if (mysqli_query($conn, $sql)) {
        header("Location: table.php");
    } else {
        echo "Update failed: " . mysqli_error($conn);
    }
}
?>
