<?php 
    include "includes/dbconn.php";
    $id=$_POST['m_id'];
    $query="SELECT * FROM study_material WHERE unique_id LIKE '$id'";
    $result=mysqli_query($conn,$query);
    while($row=mysqli_fetch_assoc($result)){
        $t_id=$row['t_id'];
        $query1="SELECT * FROM teacher WHERE teacher_id like '$t_id'";
        $result1=mysqli_query($conn,$query1);
        $row1=mysqli_fetch_assoc($result1);
        echo "
        <div style='background-color:#6B5B95;' class='mt-2 mb-2  text-white'>
    <div class='row'>
        <div class='col-md-4 col-12 text-white mt-2 ml-2'>
            <h5 style='font-family:Times'>".$row['title']."</h5>
            <hr></hr>
        </div>
        <div class='col-md-5 col-4 text-white mt-2 ml-2'>
            <h5 style='font-family:Times'>".$row1['name']."</h5>
            
        </div>
        <div class='col-md-2 col-4 ml-4'>
        <img src='stf_img/".$row1['img_path']."' style='height:60px;width:60px;border-radius:100%'>
        </div>
    </div>
</div>
<div style='border-style:groove;' class='p-1'>
<p>".$row['description']." </p>
</div>
        ";
    }

?>
