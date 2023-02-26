<?php
    include "includes/dbconn.php";
?>
<?php 
    $id=$_POST['material_id'];
    $query1="SELECT * FROM study_material WHERE unique_id LIKE '$id'";
    $result2=mysqli_query($conn,$query1);
    $row=mysqli_fetch_assoc($result2);
    $name=$row['path'];
    // echo $name;
    $file_to_delete = "material/$name";
    unlink($file_to_delete);
    $query="DELETE FROM study_material WHERE unique_id LIKE '$id'";
    mysqli_query($conn,$query);
    
    header('Location:profile1.php');
?>