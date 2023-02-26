<?php 
    include "includes/dbconn.php";
    session_start();
    $user_id=$_SESSION['id'];
    //print_r($_FILES);
    if(isset($_POST['upload'])){

        $filename=$_FILES["uploadfile"]["name"];
        $new_name=$filename.$_SESSION['id'].'.jpg';
        rename($filename,$new_name);
        $filename=$new_name;
        $tempname=$_FILES["uploadfile"]["tmp_name"];
        $folder="./stf_img/".$filename;
        $query1="SELECT * FROM admin WHERE admin_id='$user_id'";
        $result=mysqli_query($conn,$query1);
        $result=mysqli_fetch_assoc($result);
        $present_img=$result['img_path'];
        $file_to_delete = "stf_img/$present_img";
        unlink($file_to_delete);
        $query="UPDATE admin SET img_path='$filename' WHERE admin_id='$user_id'";
        $tname=$_SESSION['name'];
        $query1="UPDATE staff SET img_path='$filename' WHERE name LIKE '$tname'";
        mysqli_query($conn,$query1);
        mysqli_query($conn,$query);
        if (move_uploaded_file($tempname, $folder)) {
            $_SESSION['img']=$filename;
            header('Location:profile.php');
        }else {
            echo "<h3>  Failed to upload image!</h3>";
        }
    }
?>