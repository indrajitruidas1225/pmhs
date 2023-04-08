<?php
include "includes/dbconn.php";
session_start();
if (!isset($_SESSION['id'])) {
    echo 'No Log in Found';
    exit;
}
?>

<?php
$name = $_POST['name'];
$pass = $_POST['pass'];
$current = $_POST['current'];
$filename = $_FILES["uploadfile"]["name"];
$new_name = $filename .$pass.'.jpg';
rename($filename, $new_name);
$filename = $new_name;
$tempname = $_FILES["uploadfile"]["tmp_name"];
$folder = "./student_img/" . $filename;
$query="INSERT INTO student (name,passed,current,img_path) VALUES ('$name','$pass','$current'
,'$filename')";
if(mysqli_query($conn,$query)){
    move_uploaded_file($tempname, $folder);
    header('Location:student_update.php?q=1');
}
else{
    header('Location:student_update.php?q=0');
}
?>