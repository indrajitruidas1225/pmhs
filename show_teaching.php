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
    <div style='background-color:#6B5B95;' class="mt-3">
        <marquee>
            <h3 style='font-family:Times' class='mt-2 mb-2 ml-2 text-white'>Our Teaching Staffs</h3>
        </marquee>
    </div>
    <div class="row">
        <?php
        $query = "SELECT * FROM staff WHERE designation!='Clerk' and designation!='Group D' and designation!='Librarian'";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['name'];
            $desig = $row['designation'];
            $qualifi = $row['qualifications'];
            $img = $row['img_path'];
            if ($img == 'https://img.freepik.com/free-icon/user_318-804790.jpg?w=2000')
                echo '
            
            <div class="col-6 col-md-3 mt-3 mb-2">
            <div class="card h-100">
            <img src="' . $img . '" class="card-img-top" style="width:100%;height:200px;" alt="No Image">
                <div class="card-body">
                    <h5>' . $name . '</h5>
                    <p>' . $desig . '</p>
                    <span>' . $qualifi . '</span>
                    
                </div>
            </div>
        </div>
            ';
            else
                echo '<div class="col-6 col-md-3 mt-3 mb-2 box">
                
                <a href="detail_profile.php?id=' . $row['staff_id'] . '" style="text-decoration:none">
                <div class="card h-100">
                <img src="stf_img/' . $img . '" class="card-img-top" style="width:100%;height:200px;"alt="No Image;" loading="lazy"></a>
                <div class="card-body" >
                    <h5 style="font-family:Calibri;">' . $name . '</h5>
                    <p>' . $desig . '</p>
                    <span style="font-family:serif;font-size:15px;">' . $qualifi . '</span>
                    
                </div>
                <a href="detail_profile.php?id=' . $row['staff_id'] . '" type="button" class="btn btn-sm btn-info">See Profile</a>
                
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