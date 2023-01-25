<?php
include "includes/navbar.php";
include "includes/dbconn.php";
?>
<div class="container">
<div class="row">
    <div class="col-12 col-md-6">
    <img src="https://img.freepik.com/free-vector/colorful-science-education-background_23-2148490697.jpg?w=2000" class="ml-2 mt-2 mb-2 mr-2" style="height:300px;width:285px;">
    </div>
    <div class="col-12 col-md-5">
        <p class="mt-3 ml-3">The subjects offered in Science are <br><b>Physics</b><br> <b>Chemistry</b><br> <b>Mathematics</b><br>
    <b>Biology</b><br><b>Environmental Science</b><br></p>
    <ul class="mt-2 ml-3">
        <li>&#x2022 Labs are Well-Equipped</li>
        <li>&#x2022 Minimum 1 teacher per subject</li>
    </ul>
    <table clsss="mb-3">
  <tr>
    <th>Subject</th>
    <th>No of Teachers</th>
    <th>No of Labs</th>
  </tr>
  <tr>
    <td>Physics</td>
    <td>1</td>
    <td>1</td>
  </tr>
  <tr>
    <td>Chemistry</td>
    <td>1</td>
    <td>1</td>
  </tr>
  <tr>
    <td>Biology</td>
    <td>1</td>
    <td>1</td>
  </tr>
  <tr>
    <td>Mathematics</td>
    <td>1</td>
    <td>0</td>
  </tr>
  <tr>
    <td>Environmental Science</td>
    <td>1</td>
    <td>0</td>
  </tr>
</table>
    </div>
</div>

</div>

<div class="container">
<h4 class="mt-3  mb-2">Here's the profiles of our Science Teachers</h4>
    <div class="row">
        <?php
        $query = "SELECT * FROM staff WHERE Specialization like 'Science'";
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $name = $row['name'];
            $desig = $row['designation'];
            $qualifi = $row['qualifications'];
            $img = $row['img_path'];
            if(strlen($img)>20)
            echo '
            <div class="col-6 col-md-3 mt-3 mb-2">
            <div class="card h-100">
            <img src="'.$img.'" class="card-img-top" style="width:100%;height:200px;" alt="No Image">
                <div class="card-body">
                    <h5>'.$name.'</h5>
                    <p>'.$desig.'</p>
                    <span>'.$qualifi.'</span>
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
                    <span>'.$qualifi.'</span>
                </div>
            </div>
        </div>
            ';
        }
        ?>
    </div>
</div>