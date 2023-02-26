<?php 
    include "includes/navbar.php";
    include "includes/dbconn.php";
?>
<div class="container mt-4" style="border-style:inset">
<div style='background-color:#6B5B95;' class="mt-3"><marquee><h3 style='font-family:Times' class='mt-2 mb-2 ml-2 text-white'>PMHS Staff Profile</h3></marquee></div>
<div class="row">
<?php
    // $query="SELECT * FROM staff s JOIN teacher t ON s.name=t.name";
    // $result=mysqli_query($conn,$query);
    // //$result=mysqli_fetch_assoc($result);
    // while($row=mysqli_fetch_assoc($result)){
    //     $t_id=$row['teacher_id'];
    //     $t_name=$row['name'];
    //     $query2="UPDATE staff SET staff_id='$t_id' WHERE staff.name='$t_name'";
    //     mysqli_query($conn,$query2);
    // }
    $id=$_GET['id'];
    $query="SELECT * FROM staff WHERE staff_id LIKE '$id'";
    $result=mysqli_query($conn,$query);
    //$result=mysqli_fetch_assoc($result);
    while($row=mysqli_fetch_assoc($result)){
        echo '
        <div class="col-12 col-md-5 mt-3" style="text-align:center">
        <img src="stf_img/'.$row['img_path'].'" style="height:200px;width:200px;">
    </div>
    <div class="col-12 col-md-4 mt-3">
        <h5><b>Name: </b>'.$row['name'].'</h5>
        <h5><b>Designation: </b>'.$row['designation'].'</h5>
        <p><b>Qualifications: </b>'.$row['qualifications'].'</p>
        <h5><b>Specialization: </b>'.$row['specialization'].'</h4>
        <h5><b>Date of Joining: </b>'.$row['doj'].'</h4>
    </div>
    <div class="col-12 col-md-3 mt-3 mb-5">
    <div class="card border-success">
        <h4 class="mt-1 ml-3 mr -1">Contact information</h4>
        <span class="ml-2 mb-1">&#9742; '.$row['mobile'].'</span>
        <span class="ml-2 mb-1">&#x1F4E7; '.$row['email'].'</span>
    </div>
</div>'
    ;
    }
?>


    
</div>
</div>