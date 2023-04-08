<?php
session_start();
if(!isset($_SESSION['id']) && !isset($_SESSION['t_id'])){
    echo 'No Log in Found';
    exit;
}
include "includes/dbconn.php";
?>

<?php
    $id=$_SESSION['t_id'];
    $query="SELECT password FROM teacher WHERE teacher_id='$id'";
    $result=mysqli_query($conn,$query);
    $row=mysqli_fetch_assoc($result);
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    if($row['password']!=$pass){
        header('Location:edit_details.php?q=-1');
    }
    else{
        $query="UPDATE staff SET doj='$name' WHERE staff_id='$id'";
        $query1="UPDATE teacher SET doj='$name' WHERE teacher_id='$id'";
        if(mysqli_query($conn,$query) && mysqli_query($conn,$query1)){
            header('Location:edit_details.php?q=1');
        }
        else{
            header('Location:edit_details.php?q=0');
        }
    }
?>