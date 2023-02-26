<?php
    include "includes/dbconn.php";
?>
<?php 
    $notice_id=$_POST['notice_no'];
    $query1="SELECT * FROM notice WHERE notice_no LIKE '$notice_id'";
    $result2=mysqli_query($conn,$query1);
    $row=mysqli_fetch_assoc($result2);
    $name=$row['path'];
    echo $name;
    $file_to_delete = "notices/$name";
    unlink($file_to_delete);
    $query="DELETE FROM notice WHERE notice_no LIKE '$notice_id'";
    mysqli_query($conn,$query);
    
    header('Location:profile.php');
?>