<?php
include "includes/navbar.php";
include "includes/dbconn.php";
?>
<?php
    $query = "SELECT * FROM staff WHERE designation like 'HM'";
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
                <div class="card h-100 border-info" style="border-radius:10px">
                <img src="stf_img/'.$img.'" class="card-img-top ml-5 mt-3" style="height:260px;width:200px;border-radius:7px;" alt="No Image">
                <div class="card-body">
                    <h4 style="font-family:serif">Name : '.$name.'</h4>
                    <h4 style="font-family:serif">Designation : '.$desig.'</h4>
                    <p style="font-family:serif">'.$qualifi.'</p>
                    <span style="font-family:serif">Joining Date: 07-01-2015</span>
                </div>
            </div>
            
            </div>
            <div class="col-11 col-md-5 mt-3 mb-3 ml-2">
                <div class="card border-success">
                    <h4 class="mt-1 ml-3 mr -1">Contact information</h4>
                    <span class="ml-3 mb-1">&#9742; 9474391009</span>
                    <span class="ml-3 mb-1">&#x1F4E7; nardugopal@gmail.com</span>
                </div>
            </div>
    </div>
    </div>'
        ;
    }
?>
<?php
    include "includes/contact_div.php";
  ?>

