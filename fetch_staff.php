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
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==0)
        echo "0";
    else{
        $row=mysqli_fetch_assoc($result);
        echo '<div class="col-md-3 col-12">
        <span>'.$row['name'].'</span>
    </div>
    <div class="col-md-2 col-12">
        <h5>'.$row['staff_id'].'</h5>
    </div>
    <div class="col-md-3 col-12">
        <p style="font-style: italic;">'.$row['designation'].'</p>
    </div>
    <div class="col-md-2 col-12 mb-4">
        <img src="stf_img/'.$row['img_path'].'" alt="NO IMAGE" style="height:150px;width:150px;">
    </div>
    ';
    }
?>