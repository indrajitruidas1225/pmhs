<?php
  include "includes/navbar.php"
?>
  <div class="row">
    <div class="col-12 col-md-6">
      <div class="card mt-2">
        <div class="card-body">
          <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img class="d-block w-100" src="img/p1.jpg" style="height: 300px;">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/p2.jpg" style="height: 300px;" alt="Second slide">
              </div>
              <div class="carousel-item">
                <img class="d-block w-100" src="img/p3.jpg" style="height: 300px;" alt="Third slide">
              </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6">
      <div class="card mt-2 mr-1">
        <!-- <div class="card-body"> -->
        <div style="background-color: rgb(6, 6, 69);">
          <h3 class="mt-2 text-white" style="text-align: center; font-family: serif;">About Our School</h3>
        </div>
        <!-- <h3 class="mt-2" style="text-align: center; font-family: serif;">About Our School</h3> -->
        <p style="font-family: monospace; text-align:center;" class="ml-2 mr-2 mt-1">PATHARMORA H.S was established in
          1961 and it is managed by the Department of Education. It is located in Rural area. It is located in SONAMUKHI
          block of BANKURA district of West Bengal. The school consists of Grades from 5 to 12. The school is
          Co-educational and it doesn't have an attached pre-primary section. The school is N/A in nature and is not
          using school building as a shift-school. Bengali is the medium of instructions in this school. This school is
          approachable by all weather road. In this school academic session starts in April.</p>
        <!-- </div> -->
      </div>
    </div>
  </div>
  <!-- <div class="container"> -->
  <div class="row">
    <div class="col-12 col-md-8 mb-5 mt-3">
      <div class="card" style="height:400px">

        <div class="card-body">
          <div style="background-color: rgb(6, 6, 69);">
            <h4 class="text-white" style="text-align:center;font-family: Times;">Location</h4>
          </div>
          <div class="mapouter">
            <div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas"
                src="https://maps.google.com/maps?q=Patharmora high school&t=k&z=11&ie=UTF8&iwloc=&output=embed"
                frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                href="https://2yu.co">2yu</a><br>
              <style>
                .mapouter {
                  position: relative;
                  text-align: right;
                  height: 100%;
                  width: 100%;
                }
              </style><a href="https://embedgooglemap.2yu.co/">html embed google map</a>
              <style>
                .gmap_canvas {
                  overflow: hidden;
                  background: none !important;
                  height: 100%;
                  width: 100%;
                }
              </style>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-4 mb-5 mt-3">
      <div class="card" style="height:480px">
        <div style="background-color: rgb(6, 6, 69);">
          <h4 class="text-white" style="text-align:center;font-family: Times;">Mail Us/Submit Grievence</h4>
        </div>
        <div class="card-body">
          <input type="text" class="form-control" id="username" placeholder="Name"><br>
          <input type="text" class="form-control" id="email" placeholder="Email"><br>
          <input type="text" class="form-control" id="mobile" placeholder="Mobile"><br>
          <textarea type="text" class="form-control" id="message" placeholder="Message" rows="6"
            cols="10"></textarea><br>
          <div id="message-box">
            <a class="btn btn-md text-white" id="message-send" style="background-color:green;">Save</a>
          </div>
          
        </div>
      </div>
    </div>

    <!-- </div> -->
  </div>
  <div class="contact-div" style="background-color: rgb(43, 41, 41);">
    <!-- <div class="card" style="background-color: rgb(43, 41, 41);"> -->
    <div class="row">
      <div class="col-9 col-md-6 ml-5 mt-3">
        <h4 class="text-white">Address</h4>
        <p class="text-white">Patharmora High School<br>
          Village:Patharmora<br>
          P.O:Nutan Balarampur<br>
          PS:Sonamukhi<br>
          Dist:Bankura<br>
          Pin:722207</p>
      </div>
      <div class="col-9 col-md-4 ml-5 mt-3">
        <h4 class="text-white">Contact</h4>
        <p class="text-white">
          Mobile: XXXXXXXXXX<br>
          E-Mail: xyz@mail.com<br></p>
      </div>
      <!-- </div> -->
    </div>
  </div>
</body>

</html>