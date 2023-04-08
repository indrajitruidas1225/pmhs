<?php
session_start();
if(!isset($_SESSION['id'])){
    echo 'No Log in Found';
    exit;
}
include "includes/dbconn.php";
?>
<?php
$name = $_POST['teacher_name'];
$desig = $_POST['designation'];
$quali = $_POST['teacher_quali'];
$id = $_POST['staff_id'];
$sp = $_POST['specialization'];
$filename = $_FILES['img_name']['name'];
$mobile = $_POST['mobile'];
$email = $_POST['email'];
$doj = $_POST['doj'];
$query = "SELECT * FROM staff WHERE staff_id='$id'";
$result = mysqli_query($conn, $query);
if (mysqli_num_rows($result) != 0) {
    header('Location:add_staff.php?v=-1');
} else {
    $new_name = $filename . $id . '.jpg';
    rename($filename, $new_name);
    $filename = $new_name;
    $tempname = $_FILES["img_name"]["tmp_name"];
    $folder = "./stf_img/" . $filename;
    $query = "INSERT INTO staff (name,designation,qualifications,specialization,staff_id
        ,mobile,email,doj,img_path) VALUES ('$name','$desig','$quali','$sp','$id','$mobile','$email','$doj',
        '$filename')";
    if ($desig != 'Librarian' && $desig != 'Clerk' && $desig != 'Group D') {
        $password = $id . '@pmhs';
        $query1 = "INSERT INTO teacher (name,teacher_id,password
        ,mobile,email,doj,img_path) VALUES ('$name','$id','$password','$mobile','$email','$doj',
        '$filename')";
        if (mysqli_query($conn, $query1) && mysqli_query($conn, $query)) {
            move_uploaded_file($tempname, $folder);
            $_SESSION['new_t_id']=$id;
            $_SESSION['new_t_p']=$password;
            header('Location:add_staff.php?v=2');
        } else {
            header('Location:add_staff.php?v=0');
        }
    } else if (mysqli_query($conn, $query)) {
        move_uploaded_file($tempname, $folder);
        header('Location:add_staff.php?v=1');
    } else {
        header('Location:add_staff.php?v=0');
    }
}
?>