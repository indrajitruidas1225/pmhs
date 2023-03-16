<?php
include "includes/navbar.php";
include "includes/dbconn.php";
?>
<style>
    .box {
        transition: box-shadow .3s;
        border-radius: 10px;
    }

    .box:hover {
        box-shadow: 0 0 11px rgba(33, 33, 33, .8);
    }
</style>

<div class="container">
<div style='background-color:#6B5B95;' class="mt-3"><marquee><h3 style='font-family:Times' class='mt-2 mb-2 ml-2 text-white'>Our Non-Teaching Staffs</h3></marquee></div>
    <div class="row">
        <?php
        $query = "SELECT * FROM staff WHERE designation like 'Clerk' or designation like 'Group D' or designation like 'Librarian'";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['name'];
            $desig = $row['designation'];
            $img = $row['img_path'];
            echo '<div class="col-6 col-md-3 mt-3 mb-2 box">
            <div class="card h-100">
            <a href="non_teaching_profile.php?id='.$row['staff_id'].'"><img src="stf_img/'.$img.'" class="card-img-top" style="width:100%;height:200px;"alt="No Image"></a>
                <div class="card-body">
                    <h5 style="font-family:Calibri;">'.$name.'</h5>
                    <b><p>'.$desig.'</p></b>
                    
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