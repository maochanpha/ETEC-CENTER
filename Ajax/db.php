<?php
try{
    $conn = mysqli_connect("localhost", "root", "", "db_php");
}catch(Exception $e){
    echo "Connection failed: " . $e->getMessage();
};
?>