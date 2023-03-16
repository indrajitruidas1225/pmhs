<?php 
    include "includes/dbconn.php";
    session_start();
    $title=$_POST['title'];
    $number=$_POST['u_id'];
    $str=$_POST['m_description'];
    $description = str_replace("'", '', $str);
    $date=date('y-m-d');
    if(isset($_POST['upload'])){
        $filename=$_FILES["uploadfile"]["name"];
        $tempname=$_FILES["uploadfile"]["tmp_name"];
        $folder="./material/".$filename;
        $current_teacher=$_SESSION['t_id'];
        $query="INSERT INTO study_material (title,unique_id,path,date,t_id,description) VALUES ('$title','$number','$filename','$date','$current_teacher','$description')";
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