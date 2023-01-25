<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Patharmora High School</title>
  <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
  <link rel="stylesheet" href="https://rkmgec.ac.in/css/style.css?v=2.0">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    crossorigin="anonymous">
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
  })
</script>
<style>
  @media(max-width:480px) {
    .navbar {
      width: 100%;
    }

    .navbar h4 {
      font-size: 18px;
    }

    .temp {
      width: 100%;
    }
  }
</style>

<body style="background-color:rgb(190, 198, 198);">
  <div class="navbar bg-nav">
    <a href="index.php"><img src="img/pmhs.jpg" style="height: 70px;width:70px;border-radius: 100%;"></a>
    <a href="index.php" style="text-decoration:none;"><h4 class="text-white mr-4" style="font-family:Times;">Patharmora High School</h4></a>
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
            <button class="btn btn-secondary dropdown-toggle btn-warning mt-1 mb-1 ml-1 mr-1" type="button" id="dropdownMenuButton3"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-align:left" ;>
              Administration
            </button>
            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton3" style="font-size: 20px;">
              <a class="dropdown-item" href="hm_profile.php"><h5>HM</h5></a>
              <a class="dropdown-item" href="asst_hm.php"><h5>Asst. HM</h5></a>
              <a class="dropdown-item" href="#"><h5>President</h5></a>
              <!-- <a class="dropdown-item" href="#">something</a> -->
            </div>

          </div>
        </li>
        <li class ="nav-item" style="text-align: center;">
          <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle btn-warning mt-1 mb-1 ml-1 mr-1" type="button" id="dropdownMenuButton"
          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="text-align:left" ;>
          Departments
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton" style="font-size: 20px;">
          <a class="dropdown-item" href="science.php">
            <h5>Science</h5>
          </a>
          <a class="dropdown-item" href="arts.php">
            <h5>Arts</h5>
          </a>
          <!-- <a class="dropdown-item" href="#">something</a> -->

        </div>
          </div>
    </li>
    <li class="nav-item" style="text-align: center;">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle btn-warning mt-1 mb-1 ml-1 mr-1" type="button"
          id="dropdownMenuButton1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
          style="text-align:left" ;>
          Staffs
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton1" style="font-size: 20px;">
          <a class="dropdown-item" href="show_teaching.php">
            <h5>Teaching</h5>
          </a>
          <a class="dropdown-item" href="show_non_teaching.php">
            <h5>Non-Teaching</h5>
          </a>
          <!-- <a class="dropdown-item" href="#">something</a> -->
        </div>
      </div>
    </li>
    <li class="nav-item" style="text-align: center;">
      <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle btn-warning mt-1 mb-1 ml-1 mr-1" type="button"
          id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
          style="text-align:left" ;>
          Menu
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton2" style="font-size: 20px;">
          <a class="dropdown-item" href="#">
            <h5>Gallery</h5>
          </a>
          <a class="dropdown-item" href="#">
            <h5>In News</h5>
          </a>
          <a class="dropdown-item" href="student_profile.php">
            <h5>Students Profile</h5>
          </a>
          <!-- <a class="dropdown-item" href="#">something</a> -->
        </div>
      </div>
    </li>
    </ul>
    </div>
  
  </nav>