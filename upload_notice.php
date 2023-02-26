<?php 
    include "includes/dbconn.php";
    session_start();
    // $user_id=$_SESSION['user_id'];
    //print_r($_FILES);
    $title=$_POST['title'];
    $number=$_POST['number'];
    $date=date('y-m-d');
    if(isset($_POST['upload'])){
        $filename=$_FILES["uploadfile"]["name"];
        $tempname=$_FILES["uploadfile"]["tmp_name"];
        $folder="./notices/".$filename;
        $query="INSERT INTO notice (name,notice_no,path,date) VALUES ('$title','$number','$filename','$date')";
        mysqli_query($conn,$query);
        if (move_uploaded_file($tempname, $folder)) {
            //echo "<h3>  Image uploaded successfully!</h3>";
            header('Location:profile.php?result=success');
        }else {
            //echo "<h3>  Failed to upload image!</h3>";
            header('Location:profile.php?result=failed');
        }
    }
?>