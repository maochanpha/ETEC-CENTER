<?php
if(isset($_POST['btnDelete'])){
    include 'db.php';
    $id = $_POST['id'];
    $delete = "DELETE FROM tbl_student WHERE id= $id";
    $execute = mysqli_query($conn, $delete);
    if($execute){
        header("Location: table.php");
    }
}
?>