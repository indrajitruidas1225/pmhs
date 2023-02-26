<?php
    include "includes/dbconn.php";
    $id=$_POST['id'];
    $query="SELECT * FROM study_material WHERE unique_id LIKE '$id'";
    $result=mysqli_query($conn,$query); //runs the query

    $num_row=mysqli_num_rows($result);//number of rows of that data
    if($num_row==0)
        echo 0;
    else {
        $query="SELECT * FROM study_material WHERE unique_id LIKE '$id'";
        $result=mysqli_query($conn,$query); //runs the query
        
        while($row=mysqli_fetch_assoc($result)){
            $id1=$row['t_id'];
            $query2="SELECT * FROM teacher WHERE teacher_id LIKE '$id1'";
            $result2=mysqli_query($conn,$query2);
            $row2=mysqli_fetch_assoc($result2);
            echo '
            <div class="card mt-2 mb-2">
            <div class="row ml-1 mt-1 mb-1">
                <div class="col-md-2 ">
                    <span>'.$row['unique_id'].'</span>
                </div>
                <div class="col-md-4 ">
                    <h5>'.$row['title'].'</h5>
                </div>
                <div class="col-md-3 ">
                    <p>'.$row['date'].'</p>
                </div>
                <div class="col-md-2 mt-1">
                <a href="material/'.$row['path'].'" download>Download</a>
                </div>
                <div class="col-md-1 mt-1">
                    <span>Material By</span>
                    <p><b>
                    '.$row2['name'].'
                    <img src="stf_img/'.$row2['img_path'].'" style="height:60px;width:60px;border-radius:100%;">
                    <b></p>
                    
                </div>
            </div>
        </div>
            ';
        }
    }
?>