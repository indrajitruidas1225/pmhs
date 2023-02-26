<?php 
  session_start();
  
  if(empty($_SESSION)){
    $logged_in=0;
    $teacher_log=0;
  }
  else{
    // if($_SESSION['name']=='null'){
    //   $teacher_log=1;
    //   $logged_in=0;
    // }
    
    // else{
    //   $logged_in=1;
    //   $teacher_log=0;
    // }
    if(isset($_SESSION['t_name']) && !isset($_SESSION['name'])){
      $teacher_log=1;
      $logged_in=0;
    }
      
    else if(isset($_SESSION['name']) && !isset($_SESSION['t_name'])){
      $logged_in=1;
      $teacher_log=0;
    }
    else if(isset($_SESSION['name']) && isset($_SESSION['t_name'])){
      $logged_in=1;
      $teacher_log=1;
    }  
    
    
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="keywords" content="pmhs,patharmora,high,school,patharmora high school,mahespur
  ,west bengal,manikbazar,madhyamik,hs"/>
  <meta name="description" content="Patharmora High School">
  <title>Patharmora High School</title>
  <link rel="icon" type="image/x-icon" href="/img/pmhs.jpg">
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://rkmgec.ac.in/css/style.css?v=2.0">
  <link rel="stylesheet" href="style.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.js"
    integrity="sha512-CX7sDOp7UTAq+i1FYIlf9Uo27x4os+kGeoT7rgwvY+4dmjqV0IuE/Bl5hVsjnQPQiTOhAX1O2r2j5bjsFBvv/A=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
</head>
<script type="text/javascript">
  $(document).ready(function () {
    $('#message-send').click(function () {
      var username = $('#username').val()
      var email = $('#email').val()
      var mobile = $('#mobile').val()
      var message = $('#message').val()

      $('#message-box').html("<a href='mailto:indrajitruidascse@gmail.com?subject=Feedback&body=" + message + "[ Name : "+username+" Email : "+email+" Mobile :"+mobile+" ]' class='btn btn-md text-white' style='background-color: rgb(6, 6, 69);''>Send</a>")
    })

    $('#login_btn').click(function(){
    var a_email = $('#a_email').val()
    var a_pass = $('#a_pass').val()
    
    $.ajax({
      url:"login_validation.php",
      method:'POST',
      data:{'a_email':a_email,'a_pass':a_pass},
      success(data){
        if(data.trim()==='1'){
          window.location.href="index.php";
        }else{
          alert("ID/Password did not match !");
        }
      }
    })
  })

  $('#teacher_login').click(function(){
    var t_email = $('#t_email').val()
    var t_pass = $('#t_pass').val()
    
    $.ajax({
      url:"teacher_login_validation.php",
      method:'POST',
      data:{'t_email':t_email,'t_pass':t_pass},
      success(data){
        if(data.trim()==='1'){
          window.location.href="index.php";
        }else{
          alert("ID/Password did not match !");
        }
      }
    })
  })
  })
  
</script>
<style>
  @media(max-width:480px) {
    .navbar {
      width: 100%;
    }
    .navbar h4 {
      font-size: 18px;
      margin-left: 50px;
    }
    .temp {
      width: 100%;
    }
    .developer{
      margin-left:5px;
    }
  }
  @media(min-width:768px){
    .container{
      margin-left: 300px;
    }
  }
</style>

<body style="background-color:rgb(190, 198, 198);">
  <div class="navbar bg-nav">
    <div class="container text-center">

    
    <div class="row noPadding">
      <div class="col-1 col-md-3 mt-2 mb-2">
      <a href="index.php"><img src="img/pmhs.jpg"  style="height: 60px;width:60px;border-radius: 100%;"></a>
      </div>
      <div class="col-8 col-md-8 mt-3">
      <a href="index.php" style="text-decoration:none;"><h4 class="text-white mr-1" style="font-family:Serif;">Patharmora High School (H.S)</h4></a>
      </div>
      <div class="col-1 col-md-1 mt-2">
      <img src="https://cdn.shopify.com/s/files/1/0272/4544/5199/products/PM_2178_1_7810574b-4403-401d-8bc5-ba409c3859d7_1340x.jpg?v=1575800986" style="height: 60px;width:60px;border-radius: 100%;">
      </div>
    </div>
    </div>
    
    <!-- <img src="https://cdn.shopify.com/s/files/1/0272/4544/5199/products/PM_2178_1_7810574b-4403-401d-8bc5-ba409c3859d7_1340x.jpg?v=1575800986" style="height: 90px;width:70px;border-radius: 100%;" class="mr-4"> -->
  </div>
  <!-- <div class="temp" style="text-align: center"> -->


  <nav class="navbar navbar-expand-xl  navbar-dark bg-dark">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#colNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="colNav">
      <ul class="navbar-nav">
        <li class="nav-item" style="text-align: center;">
          <!-- <a class ="nav-link" href ="#"> Contact Us </a> -->
        <li class="nav-item" style="text-align: center;">
          <div class="dropdown">
            <button class="btn btn-primary dropdown-toggle mt-1 mb-1 ml-1 mr-1" type="button" id="dropdownMenuButton3"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-align:left" ;>
              Administration
            </button>
            <ul class="dropdown-menu"  style="font-size: 20px;">
              <li><a class="dropdown-item" href="hm_profile.php"><h5>HM</h5></a></li>
              <li class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="asst_hm.php"><h5>Asst. HM</h5></a></li>
              <li class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#"><h5>President</h5></a></li>
               <!-- <a class="dropdown-item" href="#">something</a> -->
            </ul>
            
          </div>
          
        </li>
        <li class ="nav-item" style="text-align: center;">
          <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle btn-warning mt-1 mb-1 ml-1 mr-1" type="button" id="dropdownMenuButton"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-align:left" ;>
          Departments
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="font-size: 20px;">
          <li><a class="dropdown-item" href="science.php">
            <h5>Science</h5>
          </a></li>
          <li class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="arts.php">
            <h5>Arts</h5>
          </a></li>
          
          <!-- <a class="dropdown-item" href="#">something</a> -->

</ul>
          </div>
    </li>
    <li class="nav-item" style="text-align: center;">
      <div class="dropdown">
        <button class="btn btn-info dropdown-toggle mt-1 mb-1 ml-1 mr-1" type="button"
          id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
          style="text-align:left" ;>
          Staffs
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="font-size: 20px;">
          <li><a class="dropdown-item" href="show_teaching.php">
            <h5>Teaching</h5>
          </a></li>
          <li class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="show_non_teaching.php">
            <h5>Non-Teaching</h5>
          </a></li>
          <!-- <a class="dropdown-item" href="#">something</a> -->
</ul>
      </div>
    </li>
    <li class="nav-item" style="text-align: center;">
      <div class="dropdown">
        <button class="btn btn-success dropdown-toggle  mt-1 mb-1 ml-1 mr-1" type="button"
          id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
          style="text-align:left" ;>
          Menu
        </button>
        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton2" style="font-size: 20px;">
        
        <li><a class="dropdown-item" href="notices.php">
            <h5>Notices</h5>
          </a></li>
          <li class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="gallery.php">
            <h5>Gallery</h5>
          </a></li>
          <li class="dropdown-divider"></li>
          <li><a class="dropdown-item" href="news.php">
            <h5>In News</h5>
          </a></li>
          <li class="dropdown-divider"></li>
          <a class="dropdown-item" href="student_profile.php">
            <h5>Students Profile</h5>
          </a>
          <li class="dropdown-divider"></li>
          <a class="dropdown-item" href="get_material.php"><h5>Access Material</h5></a>
</ul>
      </div>
      
    </li>
    
    <li class="nav-item" style="text-align: center;">
    <?php 
      if($logged_in==0){
        echo '<button class="btn btn-danger btn-sm mt-2 ml-1"  data-toggle="modal" data-target="#modalLoginForm"><i class="fa fa-sign-in" aria-hidden="true" style="color:white"></i>
        Admin LogIN
</button>';
      }
      else{
        echo '<a class="btn btn-success btn-sm mt-2" href="profile.php">
        Welcome '.$_SESSION['name'].'
</a>';
      }

      if($teacher_log==0){
        echo '<button class="btn btn-warning btn-sm mt-2 ml-2"  data-toggle="modal" data-target="#modalLoginForm1" style="float:right"><i class="fa fa-sign-in" aria-hidden="true" style="color:white;"></i>
        Teacher LogIN
</button>';
      }
      else{
        echo '<a class="btn btn-info btn-sm mt-2 ml-2" href="profile1.php">
        Welcome '.$_SESSION['t_name'].'
</a>';
      }
    ?>
  </li>
    </ul>
    </div>
  
  </nav>
  <!-- <li class="dropdown-divider"></li> -->
  <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="a_email" class="form-control validate">
          <label data-error="wrong" data-success="right" >Admin ID</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="a_pass" class="form-control validate">
          <label data-error="wrong" data-success="right" >Admin Password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-warning btn-lg" id="login_btn">Login</button>
      </div>
    </div>
  </div>
</div>

<!-- <div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Launch
    Modal Login Form</a>
</div> -->

<div class="modal fade" id="modalLoginForm1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign in</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="t_email" class="form-control validate">
          <label data-error="wrong" data-success="right" >Teacher ID</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="t_pass" class="form-control validate">
          <label data-error="wrong" data-success="right" >Teacher Password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-warning btn-lg" id="teacher_login">Login</button>
      </div>
    </div>
  </div>
</div>

<!-- <div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">Launch
    Modal Login Form</a>
</div> -->


<div class="modal fade" id="password_change" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Password Update</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          
          <input type="text" id="old_p" class="form-control validate">
          <label data-error="wrong" data-success="right" >Enter Old Password</label>
        </div>

        <div class="md-form mb-4">
          
          <input type="password" id="new_p" class="form-control validate">
          <label data-error="wrong" data-success="right" >Enter New Password</label>
        </div>
        
      </div>
      <div id="u_area">
        <p></p>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-warning btn-lg" id="password_update">Update</button>
      </div>
    </div>
  </div>
</div>




<div class="modal fade" id="password_change1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Password Update</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          
          <input type="text" id="old_p1" class="form-control validate">
          <label data-error="wrong" data-success="right" >Enter Old Password</label>
        </div>

        <div class="md-form mb-4">
          
          <input type="password" id="new_p1" class="form-control validate">
          <label data-error="wrong" data-success="right" >Enter New Password</label>
        </div>
        
      </div>
      <div id="u_area1">
        <p></p>
      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-warning btn-lg" id="password_update1">Update</button>
      </div>
    </div>
  </div>
</div>
