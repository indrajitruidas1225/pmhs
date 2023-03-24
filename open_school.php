<?php
include "includes/navbar.php";
?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide|Sofia|Trirong">
<style>
    h2 {
        font-family: serif;
    }

    img {
        height: 60px;
        width: 60px;
    }

    @media(max-width:480px) {
        h2 {
            font-size: 25px;
            margin-left: 50px;
        }

        .school-photo {
            margin-right: 10px;
        }
    }
    p{
        font-family:verdana;
    }
</style>
<div class="container mt-3 mb-4" style="border-style:groove;">
    <div class="row" style="background-color:blueviolet;">
        <div class="col-md-2 col-1">
            <img src="img/open_s.png" class="mt-1 mb-1" alt="No Image">
        </div>
        <div class="col-md-8 text-center col-8">
            <h2 class="text-white mt-2">Rabindra Open Schooling</h2>
        </div>
        <div class="col-md-2 col-1 school-photo">
            <img src="img/pmhs.jpg" style="border-radius: 100%;" class="mt-1 mb-1" alt="No Image">
        </div>
    </div>
    <div class="row" style="background-color:aliceblue">
        <div class="col-12 col-md-12 mt-3 ">
            <p class="p-1">Our School has "Rabindra Open Schooling" accredited by the Government Of West Bengal. This open schooling is available upto Higher Secondary both in Science & Arts . Admission process begins yearly at a certain time.
                The students can study from home to qualify Secondary & Higher Secondary. We also provide quality teaching to the students .</p>
        </div>
        <div class="col-12 col-md-4 mb-3">
            <img src="img/students.jpg" style="height:100%;width:100%;border-radius:10%" class="students" alt="No Image">
        </div>
        <div class="col-12 col-md-8">
            <div style="background-color: black;border-radius:25px;" class="text-center">
            <h3  class="text-white ml-2 p-1" style="font-family: Times;">Contact for more details</h3>
            </div>
            <div class="card text-center border-success mb-3">
                <a href="index.php" style="text-decoration: none;" class="mt-3"><h5 style="font-family:Cambria;color:blue">Patharmora High School,Sonamukhi,Bankura</h5></a>
                <span>Or,</span>
                <h5 style="font-family:Cambria;color:blue">Sonamukhi Computer Training Institute,<br> Rathtala,Sonamukhi,Bankura</h5>
                <div class="card-body">
                    <p> &#9742;: 9474391009 / 9475168637 / 6294341856 / 8918125488</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
    include "includes/contact_div.php"
?>