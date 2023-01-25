<?php
include "includes/navbar.php";
include "includes/dbconn.php";
?>


<div class="container">
<h4 class="mt-2 mb-2">Here's the profiles of our Non-Teaching staffs</h4>
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
            </div>
        </div>
            ';
        }
        ?>
    </div>
</div>