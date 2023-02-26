<?php 
    include "includes/navbar.php";
?>

<?php
$files = scandir('gallery');
echo "<div class='container'>";
echo "<div style='background-color:#6B5B95;'><h4 style='font-family:Times' class='mt-2 mb-2 ml-2 text-white'>PMHS Gallery</h4></div>";
echo "<marquee><span style='color:red'>Click on image for fullscreen view</span></marquee>";
// echo "<div class='row'>";
foreach ($files as $file) {
  if ($file !== "." && $file !== "..") {
    // Give Image source -- src='folder-name/$file'
    // echo "<div class='col-6 col-md-4 mt-3 mb-3'>
    //      <a href='gallery/$file'> <img src='gallery/$file' alt='image' width='100%' height='200px'/></a></div>";
    echo "<div class='card mt-4 mb-4 border-info'>";
    echo "<h4 style='font-family:Verdana' class='text-center mt-3'>$file</h4>";
    echo "<div class='card-body'>";
    $photos=scandir('gallery/'.$file);
    echo "<div class='row'>";
    foreach($photos as $photo){
        if($photo!=="." && $photo!==".."){
            echo "<div class='col-6 col-md-3 mt-2'>";
            echo "<a href='gallery/$file/$photo'> <img src='gallery/$file/$photo' alt='image' width='100%' height='150px'/></a>";
            echo "</div>";
        }
    }
    //  echo "</div>";
    echo "</div>";
    echo "</div>";
    echo "</div>";

  }
}
echo "</div>";
echo "</div>";
echo "</div>";
?>


<div class="container mt-2 mb-2">
    <div class="row">
        <div class="col-12 col-md-4 mt-2 mb-2">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/o9V8yUN4bac" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="col-12 col-md-4 mt-2 mb-2">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/qfJpbqN2GF8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
        <div class="col-12 col-md-4 mt-2 mb-2">
        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/_EDDYAaX-RU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
        </div>
    </div>
</div>
<?php
    include "includes/contact_div.php";
?>
