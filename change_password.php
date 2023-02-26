<?php 
    include "includes/dbconn.php";
?>
<?php
    session_start();
    $new_p=$_POST['new_p'];
    $old_p=$_POST['old_p'];
    $p1=$_SESSION['t_pass'];
    if($old_p==$p1){
        $id=$_SESSION['t_id'];
        $query="UPDATE teacher SET password='$new_p' WHERE teacher_id='$id'";
        if(mysqli_query($conn,$query)){
            $_SESSION['t_pass']=$new_p;
            echo 1;
        }
        else
            echo -1;
    }
    else
        echo 0;
?>