<?php
require 'db.php';
if ($_SERVER['REQUEST_METHOD']=='POST') {
    if (!is_dir('profile')) {
        mkdir('profile', 0777, true);
    }
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $file = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $path = "upload/" .time(). '_' .$file;
    move_uploaded_file($tmp_name, $path);
    $insert = "INSERT INTO tbl_student (name, gender, profile) VALUES ('$name', '$gender', '$path')";
    $ex = $conn->query($insert);
    if ($ex) {
        echo "Success";
    }
}
