<?php
include "includes/dbconn.php";
include "includes/navbar.php";
?>
<div class="container">
    <?php 
        $query="SELECT * FROM notice";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==0){
            echo "<h4 class='mt-4'>No Notice !</h4>";
        }
        else{
            echo "<h4 class='mt-4'>Notices</h4>";
        }
        while($row=mysqli_fetch_assoc($result)){
            echo '
            <div class="card mt-2 mb-2">
            <div class="row ml-1 mt-1 mb-1">
                <div class="col-md-2 ">
                    <span>'.$row['notice_no'].'</span>
                </div>
                <div class="col-md-4 ">
                    <h5>'.$row['name'].'</h5>
                </div>
                <div class="col-md-3 ">
                    <p>'.$row['date'].'</p>
                </div>
                <div class="col-md-3 mt-1">
                <a href="notices/'.$row['path'].'" download>Download</a>
                </div>
            </div>
        </div>
            ';
        }
    ?>
    
</div>
<?php
    include "includes/contact_div.php";
  ?>