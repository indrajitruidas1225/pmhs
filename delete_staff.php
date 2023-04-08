<?php
    include "includes/dbconn.php";
    session_start();
    if(!isset($_SESSION['id'])){
        echo 'No Log in Found';
        exit;
    }
?>
<?php 
    $staff_id=$_POST['staff_id'];
    $query="SELECT * FROM staff WHERE staff_id='$staff_id'";
    $query1="SELECT * FROM teacher WHERE teacher_id='$staff_id'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($result);
    $name=$row['name'];
    $img=$row['img_path'];
    $file_to_delete = "stf_img/$img";
    $result1=mysqli_query($conn,$query1);
    if(mysqli_num_rows($result1)!=0){
        $q1="DELETE FROM teacher WHERE teacher_id='$staff_id'";
        $q2="DELETE FROM staff WHERE staff_id='$staff_id'";
        if(mysqli_query($conn,$q1) && mysqli_query($conn,$q2)){
            unlink($file_to_delete);
            echo $name;
        }
        else{
            echo '0';
        }
    }
    else{
        $q2="DELETE FROM staff WHERE staff_id='$staff_id'";
        if(mysqli_query($conn,$q2)){
            echo $name;
        }
        else{
            echo '0';
        }
    }
?>