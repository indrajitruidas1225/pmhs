<?php 
    include "includes/dbconn.php";
?>
<?php
    session_start();
    $new_p=$_POST['new_p'];
    $old_p=$_POST['old_p'];
    $p1=$_SESSION['pass'];
    if($old_p==$p1){
        $id=$_SESSION['id'];
        $query="UPDATE admin SET password='$new_p' WHERE admin_id='$id'";
        if(mysqli_query($conn,$query)){
            $_SESSION['pass']=$new_p;
            echo 1;
        }
        else
            echo -1;
    }
    else
        echo 0;
?>