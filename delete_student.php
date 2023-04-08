<?php
include "includes/dbconn.php";
session_start();
if(!isset($_SESSION['id'])){
    echo 'No Log in Found';
    exit;
}?>

<?php
    $id=$_POST['student_id'];
    $query="SELECT img_path from student WHERE id='$id'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($result);
    $filename=$row['img_path'];
    $file_to_delete = "student_img/$filename";
    unlink($file_to_delete);
    $query1="DELETE FROM student WHERE id='$id'";
    if(mysqli_query($conn,$query1)){
        header('Location:student_update.php?q=d_success');
    }
    else{
        header('Location:student_update.php?q=d_failed');
    }
?>