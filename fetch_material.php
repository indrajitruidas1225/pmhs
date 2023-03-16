
</style>
<?php
    include "includes/dbconn.php";
    $id=$_POST['id'];
    $query="SELECT * FROM study_material WHERE unique_id LIKE '$id'";
    $result=mysqli_query($conn,$query); //runs the query

    $num_row=mysqli_num_rows($result);//number of rows of that data
    if($num_row==0)
        echo "<span style='color:red' class='mt-3 mb-3'>No such material found !</span>";
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
                    <span>'.$row['unique_id'].'(Material ID)</span>
                    <hr></hr>
                </div>
                
                <div class="col-md-2 ">
                    <h5>'.$row['title'].'</h5>
                </div>
                <div class="col-md-2 ">
                    <p>'.$row['date'].'</p>
                </div>
                <div class="col-md-2 ">
                    <a href="read_description.php?id='.$row['unique_id'].'">Read Description</a>
                </div>
                
                <div class="col-md-2 mt-1">
                <a href="material/'.$row['path'].'" download>Download</a>
                </div>
                <div class="col-md-2 mt-1">
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