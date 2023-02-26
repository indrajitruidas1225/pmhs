<?php 
    include "includes/dbconn.php";
    session_start();
    // $user_id=$_SESSION['user_id'];
    //print_r($_FILES);
    $title=$_POST['title'];
    $number=$_POST['u_id'];
    
    $date=date('y-m-d');
    if(isset($_POST['upload'])){
        $filename=$_FILES["uploadfile"]["name"];
        $tempname=$_FILES["uploadfile"]["tmp_name"];
        $folder="./material/".$filename;
        $current_teacher=$_SESSION['t_id'];
        $query="INSERT INTO study_material (title,unique_id,path,date,t_id) VALUES ('$title','$number','$filename','$date','$current_teacher')";
        mysqli_query($conn,$query);
        if (move_uploaded_file($tempname, $folder)) {
            //echo "<h3>  Image uploaded successfully!</h3>";
            header('Location:profile1.php?result=m_success');
        }else {
            //echo "<h3>  Failed to upload image!</h3>";
            header('Location:profile1.php?result=m_failed');
        }
    }
?>