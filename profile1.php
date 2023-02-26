<?php
include "includes/dbconn.php";
include "includes/navbar.php";
?>
<script type="text/javascript">
    $(document).ready(function(){
        //alert('kk')
        var a=window.location.href
        var url=new URL(a)
        //alert(a)
        if(url.searchParams.get('result')==="m_success"){
            alert("Material Uploaded Successfully !")
            window.location.href="profile1.php"
        }else if(url.searchParams.get('result')==="m_failed"){
            alert("Material Not Uploaded !")
            window.location.href="profile1.php"
        }
        $('#update_password').click(function(){
          
          $('#password_change').modal('show');
        })

        
        $('#password_update').click(function(){
            var new_p=$('#new_p').val()
            var old_p=$('#old_p').val()
            //alert(old_p)
            $.ajax({
                url:'change_password.php',
                method:'POST',
                data:{'old_p':old_p,'new_p':new_p},
                success(data){
                    if(data.trim()==='1'){
                        $('#u_area').html('<p class="ml-3 mt-1 mb-1" style="color:green">Password Changed Succesfully !</p>')
                        
                    }
                    else if(data.trim()==='-1'){
                        $('#u_area').html('<p class="ml-3 mt-1 mb-1" style="color:red">Error occurred !</p>')
                    }
                    else if(data.trim()==='0'){
                        $('#u_area').html('<p class="ml-3 mt-1 mb-1" style="color:red">Old password not matched</p>')
                    }
                },
                error(data){
                    $('#u_area').html(data.trim())
                }
            })
        })
    })
</script>
<div class="container">
    <div class="row">
        <div class="col-12 col-md-4 mt-3">
            <div class="card h-90 w-60" id="admin_card">
                <span class="ml-1">Currently Logged In</span>
                <img src='stf_img/<?php echo $_SESSION['t_img']; ?>' style="height:100px;width:100px;border-radius:100%" class="text-center ml-4" type="button" data-toggle="dropdown">
                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                    <form action="upload_picture.php" method="POST" enctype="multipart/form-data">
                        <h4 class="ml-2">Upload a Profile Picture</h4>
                        <input type="file" name="uploadfile" class="ml-2">
                        <input type="submit" class="btn btn-warning btn-md mt-2 ml-2" value="Upload" name="upload">
                    </form>
                </ul>
                <h5 class="ml-2 mt-1 mb-1"><?php
                                            echo $_SESSION['t_name'] ?></h5>
                <a id="log_out_btn" class="btn btn-danger btn-sm mt-1 mb-1" href="t_logout.php">Log Out</a>
            </div>
        </div>
        <div class="col-12 col-md-4 mt-3">
            <h4 class="mt-2">Upload a Study Material</h4>
            <form action="upload_material.php" method="POST" enctype="multipart/form-data">
            <div class="card">
                <div class="row">
                    <div class="col-6 col-md-4">
                        <input type="text" class="form-control mt-1 ml-1" name="title" placeholder="Title">
                    </div>
                    <div class="col-5 col-md-4">
                        <?php
                            $unique=substr(md5 (uniqid()),0,6);

                        ?>
                        <input type="text" class="form-control mt-1 mr-2" name="u_id" value='<?php echo $unique?>' readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-8 mt-3 ml-1 mb-1">
                        <input type="file"  name="uploadfile" >
                    </div>
                    <div class="col-6 col-md-4 mt-2 mb-1 ml-1">
                        <input type="submit" class="btn btn-md btn-warning" name="upload" value="Upload">
                    </div>
                </div>
            </div>
            </form>
        </div>
        <div class="col-10 col-md-4 mt-5">
            <p type="button" id="update_password" style="color:blue">Change Password</p>
        </div>
    </div>
</div>

<div class="container mt-3">
    <h4 class="mt-4">Material Archive</h4>
    <?php 
        $teacher=$_SESSION['t_id'];
        $query="SELECT * FROM study_material WHERE t_id LIKE '$teacher'";
        $result=mysqli_query($conn,$query);
        if(mysqli_num_rows($result)==0){
            echo "<h5 class='mt-4'>No Material by you !</h5>";
        }
        while($row=mysqli_fetch_assoc($result)){
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
                <a href="notices/'.$row['path'].'" download>Download</a>
                </div>
                <div class="col-md-1 mt-1">
                <form action="delete_material.php" method="POST">
                <input type="hidden" value="'.$row['unique_id'].'" name="material_id">
                <button type="submit" class="mt-1 mb-1 mr-1 btn btn-danger btn-sm" name=""><i class="fa-solid fa-trash" style="color:white"></i> Delete</button>
                </form>
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