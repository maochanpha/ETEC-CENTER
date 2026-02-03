<?php
require 'db.php';

$id = $_POST['id'];
$sql = "DELETE FROM tbl_student WHERE id = '$id'";
mysqli_query($conn, $sql);
?>