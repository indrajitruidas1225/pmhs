<?php
include "includes/navbar.php";
include "includes/dbconn.php";
?>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
</script>
<script src="send_email.js"></script>
<script src="readmore.js"></script>
<style>
  .blink {
    animation: blinker 1.5s linear infinite;
    color: red;
    font-family: sans-serif;
  }

  @keyframes blinker {
    50% {
      opacity: 0;
    }
  }

  .animate-charcter {
    text-transform: uppercase;
    background-image: linear-gradient(-225deg,
        #231557 0%,
        #44107a 29%,
        #ff1361 67%,
        #fff800 100%);
    background-size: auto auto;
    background-clip: border-box;
    background-size: 200% auto;
    color: #fff;
    background-clip: text;
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    animation: textclip 2s linear infinite;
    display: inline-block;
    font-size: 15px;
  }

  @keyframes textclip {
    to {
      background-position: 200% center;
    }
  }

  @media(min-width:768px) {
    .animation .container .row .col-md-12 p {
      font-size: 20px;
    }

    .overview {
      margin-left: 20px;
    }

    .unique {
      margin-left: 15px;
    }

    .anandabazar {
      display: none;
    }
  }

  body {
    overflow-x: hidden;
    /* Hide horizontal scrollbar */
  }

  #more {
    display: none;
  }

  #btn {
    cursor: pointer;
    color: blue;
  }

  table,
  table th,
  table td {
    border-collapse: collapse;
    border: #888 1px solid;
    padding: 0 5px;
  }
</style>
<div style="background-color: white;" class="animation">
  <div class="container text">
    <div class="row">
      <div class="col-md-12 col-12 text-center">
        <p class="animate-charcter mt-2" style="font-family:Verdana"> WEALTH OF KNOWLEDGE IS THE MOST PRECIOUS WEALTH </p><br>
        <div class="quote" style="background-color:#a15b1f;background-repeat:no-repeat;border-radius:25px;">
          <p class="p-2 text-white">বিদ্যাধনং সর্বধনপ্রধানম্ </p>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-12 col-md-6 mt-2">
    <div class="card">
      <div class="card-body">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="3000">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <img class="d-block w-100" src="img/p1.jpg" style="height: 300px;" alt="first slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/p2.jpg" style="height: 300px;" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/p3.jpg" style="height: 300px;" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/p4.jpg" style="height: 300px;" alt="Fourth slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="img/p5.jpg" style="height: 300px;" alt="Fifth slide">
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

      <div style="background-color: rgb(6, 6, 69);">
        <h3 class="mt-2 text-white" style="text-align: center; font-family: serif;">About Our School</h3>
      </div>

      <p style="font-family:'Lucida Sans'; text-align:center;font-size:16px;" class="ml-2 mr-2 mt-1">Patharmora High School(H.S) was established in
        1961 and it is managed by the Department of Education. It is located in Rural area. It is located in Sonamukhi
        block of Bankura district of West Bengal. The school consists of Grades from 5 to 12. Our school is
        Co-educational and it doesn't have an attached pre-primary section. Bengali is the medium of instructions in this school .Presently there's 26 Teaching Staffs and 6 Non-Teaching Staffs.
        Students are admitted through a common adminssion test.The school is affiliated to WBBSE and WBCHSE.
        Our school is
        approachable by all weather road. In our school academic session starts in January.Our school <span id="dots">....</span>
        <span id="more">has well-equipped <b style="font-family:'Lucida Sans';">Library , Laboratories , ICT Room for Computer Education .</b>Our school
          has a<b style="font-family:'Lucida Sans';"> hostel (R G Ashram Hostel ) for the boys belonging to SC category</b>.We have <b style="font-family:'Lucida Sans';">Open Schooling
            (Rabindra Open School)</b> upto HS(both Science & Arts).
          Our school also has <b style="font-family:'Lucida Sans';">Vocational Stream (Mobile Repairing ),NCC Junior Wing (JD & JW) and well-equipped gymnasium.</b>
        </span><a onclick="readmore()" id="read-btn" style="color:blue" type="button">Read More</a>
      </p>

    </div>
  </div>
</div>

<div class="row">
  <div class="col-12 col-md-8 mb-2 mt-2">
    <div class="card" style="height:400px">
      <div style="background-color: rgb(6, 6, 69);">
        <h4 class="text-white" style="text-align:center;font-family: Times;">Location</h4>
      </div>
      <div class="card-body">

        <div class="mapouter">
          <div class="gmap_canvas"><iframe width="100%" height="100%" id="gmap_canvas" src="https://maps.google.com/maps?q=Patharmora high school&t=k&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://2yu.co">2yu</a><br>
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

  <div class="col-12 col-md-4 mb-2 mt-2 text-white text-center">
    <div class="card">


      <div style="background-color: rgb(6, 6, 69);">
        <h4 class="text-white p-1" style="text-align:center;font-family: Times;">Latest Announcements</h4>
      </div>
      <div class="card-body">
        <marquee direction="up" scrollamount="2" onmouseover="this.stop()" onmouseout="this.start()" style="height:200px;">
          <ol></ol>
          <?php
          $query = "SELECT * FROM notice";
          $result = mysqli_query($conn, $query);
          if (mysqli_num_rows($result) == 0) {
            echo "<h4 class='mt-4'>No New Announcements !</h4>";
          } else {
            while ($row = mysqli_fetch_assoc($result)) {
              $items[] = $row;
            }

            $items = array_reverse($items, true);
            $c = 0;
            foreach ($items as $row) {
              if ($c == 10)
                break;
              echo '
          <li>
          <i class="far fa-hand-point-right" style="font-size:24px"></i><a href="notices/' . $row['path'] . '" download style="text-decoration:none">&nbsp' . $row['name'] . '&nbsp<img src="img/news1.gif" alt="No Image""</a>
        </li>
        <li class="dropdown-divider"></li>';
              $c++;
            }
          }
          ?>
        </marquee>
      </div>
    </div>

  </div>
  <div class="col-12 col-md-4 mt-1 mb-2 unique">
    <div class="card ">
      <div style="background-color: rgb(6, 6, 69);">
        <h4 class="text-white p-1" style="text-align:center;font-family:cursive;">What Makes Our School Unique ?</h4>
      </div>
    </div>
    <div class="card-body" style="background-color: white;">
      <p style="font-family: serif;color:green"><i class="fa-solid fa-highlighter"></i> We have NCC Junior Wing (JD & JW) Affiliated
        to 53 Bengal BN NCC Bishnupur</p>

      <p style="font-family: serif;color:green"><i class="fa-solid fa-highlighter"></i> We have an Open School
        (Rabindra Open School) upto 12th for both Science & Arts <a style="color:blue" href="open_school.php">(Click here)</a></p>
      <p style="font-family: serif;color:green"><i class="fa-solid fa-highlighter"></i> Our School has
        Hostel Facility for boys belonging to SC Category.</p>
      <p style="font-family: serif;color:green"><i class="fa-solid fa-highlighter"></i> We have Vocational Stream
        from class VIII (Mobile Repairing)</p>
    </div>
  </div>
  <div class="col-12 col-md-4 mt-1 mb-2 anandabazar">
    <div class="card">
      <div style="background-color: rgb(6, 6, 69);">
        <h4 class="text-white p-1" style="text-align:center;font-family:cursive;">Our School in Anandabazar Patrika</h4>
      </div>
      <div class="card-body">
        <a href="news/26march2020.jpg"><img src="news/26march2020.jpg" alt="news image" style="height:auto;width:100%"></a>
      </div>

    </div>
  </div>
  <div class="col-12 col-md-4 mb-2 mt-1 overview">
    <div class="card">
      <div style="background-color: rgb(6, 6, 69);">
        <h4 class="text-white p-1" style="text-align:center;font-family: Times;">Brief Overview of Our School</h4>
      </div>
      <div class="card-body">
        <table class="tbl">
          <tbody>
            <tr>
              <th>Particulars</th>
              <th>Total Count</th>
              <th>Remarks</th>
            </tr>
            <tr>
              <td>Teaching Staff</td>
              <td>26</td>
              <td>N/A</td>
            </tr>
            <tr>
              <td>Non-Teaching Staff</td>
              <td>6</td>
              <td>N/A</td>
            </tr>
            <tr>
              <td>Classrooms</td>
              <td>32</td>
              <td>N/A</td>
            </tr>
            <tr>
              <td>Staffroom</td>
              <td>1</td>
              <td>N/A</td>
            </tr>
            <tr>
              <td>Office Room</td>
              <td>1</td>
              <td>N/A</td>
            </tr>
            <tr>
              <td>Laboratories</td>
              <td>4</td>
              <td style="word-break:break-all">Physics,Chemistry,Biology,Geography</td>
            </tr>
            <tr>
              <td>ICT Room</td>
              <td>1</td>
              <td style="word-break:break-all">For Computer Education</td>
            </tr>
            <tr>
              <td>Hostel(R G Ashram Hostel)</td>
              <td>1</td>
              <td style="word-break:break-all">For SC Boys</td>
            </tr>
            <tr>
              <td>Playground</td>
              <td>1</td>
              <td>N/A</td>
            </tr>
            <tr>
              <td>Gymnasium</td>
              <td>1</td>
              <td>N/A</td>
            </tr>
            <tr>
              <td>Mid Day Meal Shed</td>
              <td>2</td>
              <td>N/A</td>
            </tr>
            <tr>
              <td>Boys Toilet/Latrine</td>
              <td>1</td>
              <td>N/A</td>
            </tr>
            <tr>
              <td>Girls Toilet/Latrine</td>
              <td>1</td>
              <td>N/A</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>



  </div>
  <div class="col-12 col-md-3 mb-5 mt-1 feedbackbox">
    <div class="card" style="height:480px">
      <div style="background-color: rgb(6, 6, 69);">
        <h4 class="text-white p-1" style="text-align:center;font-family: Times;">We Value Your Feedback !</h4>
      </div>
      <div class="card-body">
        <input type="text" class="form-control" id="username" placeholder="Name" required /><br>
        <input type="text" class="form-control" id="email" placeholder="Email" required /><br>
        <input type="text" class="form-control" id="mobile" placeholder="Mobile" required /><br>
        <textarea type="text" class="form-control" id="message" placeholder="Message" rows="6" cols="10" required></textarea><br>
        <button class="btn btn-md text-white" id="message-send" style="background-color:green;" onClick="sendEmail()">Send</button>

      </div>
    </div>
  </div>


</div>
<?php
include "includes/contact_div.php";
?>
</body>

</html>