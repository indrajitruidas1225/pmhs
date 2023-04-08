<?php
include "includes/navbar.php";
include "includes/dbconn.php";
if(!isset($_SESSION['id'])){
    echo 'No Log in Found';
    exit;
}?>
<?php
$name=$_POST['name'];
$pass=$_POST['pass'];
$query="SELECT * FROM student WHERE name LIKE '%$name%' AND passed LIKE '%$pass%'";
$result=mysqli_query($conn,$query);
$num=mysqli_num_rows($result);
$items=[];
while ($row = mysqli_fetch_assoc($result)) {
    $items[] = $row;
}

$items = array_reverse($items, true); 
echo "<div class='container mt-3'>
<h4 style='font-family:Verdana'>We've found ".$num." students- </h4>
<div class='row mb-4'>";
foreach($items as $row){
    echo 
    '<div class="col-md-3 col-6 mt-3">
        <div class="card h-100">
            <img src="student_img/'.$row['img_path'].'" class="card-img-top" style="width:100%;height:200px;"alt="No Image">
                <div class="card-body">
                    
                    <h5>'.$row['name'].'</h5>
                    <p>'.$row['current'].'</p>
                    <span>'.$row['passed'].' Batch</span><br>
                    <form action="delete_student.php" method="POST">
                        <input type="hidden" value="'.$row['id'].'" name="student_id">
                    <button type="submit" class="btn btn-md btn-danger">Delete</button>
                    </form>
                </div>
            </div>
        </div>';
}
echo '
        
</div>
</div>';
?>
