<?php
include 'db.php';
    if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name= $_POST['name'];
    $gender= $_POST['gender'];
    if(!empty($_FILES['file']['name'])){
        $file=$_FILES['file']['name'];
        $tmp_name=$_FILES['file']['tmp_name'];
        $path= 'upload/'.$file;
        move_uploaded_file($tmp_name, $path);
        $update= "UPDATE tbl_student SET name='$name', gender='$gender', profile='$path' WHERE id=$id";
    }else{
        $update= "UPDATE tbl_student SET name='$name', gender='$gender', profile='$path' WHERE id=$id";
    }
    $rs=$conn->query($update);
    if($rs){
            echo '<script>window.location.href="table.php"</script>';
    }
}
?>