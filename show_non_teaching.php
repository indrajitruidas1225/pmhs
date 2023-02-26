<?php
include "includes/navbar.php";
include "includes/dbconn.php";
?>


<div class="container">
<div style='background-color:#6B5B95;' class="mt-3"><marquee><h3 style='font-family:Times' class='mt-2 mb-2 ml-2 text-white'>Our Non-Teaching Staffs</h3></marquee></div>
    <div class="row">
        <?php
        $query = "SELECT * FROM staff WHERE designation like 'Clerk' or designation like 'Group D' or designation like 'Librarian'";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['name'];
            $desig = $row['designation'];
            // $qualifi = $row['qualifications'];
            $img = $row['img_path'];
            if(strlen($img)>20)
            echo '
            <div class="col-6 col-md-3 mt-3 mb-2">
            <div class="card h-100">
            <img src="'.$img.'" class="card-img-top" style="width:100%;height:200px;" alt="No Image">
                <div class="card-body">
                    <h5>'.$name.'</h5>
                    <p>'.$desig.'</p>
                    
                </div>
            </div>
        </div>
            ';
            else
            echo '<div class="col-6 col-md-3 mt-3 mb-2">
            <div class="card h-100">
            <img src="stf_img/'.$img.'" class="card-img-top" style="width:100%;height:200px;"alt="No Image">
                <div class="card-body">
                    <h5>'.$name.'</h5>
                    <p>'.$desig.'</p>
                    
                </div>
                <a href="non_teaching_profile.php?id='.$row['staff_id'].'" class="btn btn-sm btn-info">See Profile</a>
            </div>
            
        </div>
            ';
        }
        ?>
    </div>
</div>
<?php
    include "includes/contact_div.php";
  ?>