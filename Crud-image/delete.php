<?php
if(isset($_GET['id'])){
    include 'db.php';
    $id = $_GET['id'];
    $delete = "DELETE FROM tbl_product WHERE id= $id";
    $execute = mysqli_query($conn, $delete);
    if($execute){
        header("Location: table.php");
    }
}
?>