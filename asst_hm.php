<?php
include "includes/navbar.php";
include "includes/dbconn.php";
?>
<?php
    $query = "SELECT * FROM staff WHERE designation like 'Asst. HM'";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['name'];
        $desig = $row['designation'];
        $qualifi = $row['qualifications'];
        $img = $row['img_path'];
        echo 
        '<div class="container">
        <div class="row">
            <div class="col-12 col-md-4 mt-3 mb-3">
                <div class="card h-100">
                <img src="stf_img/'.$img.'" class="card-img-top ml-5" style="height:300px;width:200px;">
                <div class="card-body">
                    <h4>Name : '.$name.'</h4>
                    <h4>Designation : '.$desig.'</h4>
                    <p>'.$qualifi.'</p>
                    <span>Appointment year:</span>
                </div>
            </div>
            
            </div>
            <div class="col-11 col-md-5 mt-3 mb-3 ml-2">
                <div class="card">
                    <h4 class="mt-1 ml-3 mr -1">Contact information</h4>
                    <span class="ml-3 mb-1">&#9742; XXXXXXXXXX</span>
                    <span class="ml-3 mb-1">&#x1F4E7; XXXXXXXXXX</span>
                </div>
            </div>
    </div>
    </div>'
        ;
    }
?>

