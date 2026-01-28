<?php
include 'db.php';
if(isset($_POST['submit'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $profile = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $path = "upload/".$profile;
    move_uploaded_file($tmp_name, $path);
    $execute = "INSERT INTO tbl_student (name, gender, profile) VALUES ('$name', '$gender', '$path')";
    mysqli_query($conn, $execute);
    if($execute){
        header("location: table.php");
    }
}