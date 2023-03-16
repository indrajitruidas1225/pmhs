<?php
    session_start();
    
    include "includes/dbconn.php";
    //receive html data
    $email=mysqli_real_escape_string($conn,$_POST['t_email']);
    $password=mysqli_real_escape_string($conn,$_POST['t_pass']);
    //search query
    $query="SELECT * FROM teacher WHERE teacher_id LIKE '$email' AND password LIKE '$password'";
    $result=mysqli_query($conn,$query); //runs the query

    $num_row=mysqli_num_rows($result);//number of rows of that data

    $result=mysqli_fetch_assoc($result); //returns an associative array of the results

    if($num_row==1){
        $_SESSION['t_name']=$result['name'];
        $_SESSION['t_id']=$result['teacher_id'];
        $_SESSION['t_pass']=$result['password'];
        $_SESSION['t_img']=$result['img_path'];
        // $_SESSION['name']='null';
        // $_SESSION['id']='null';
        // $_SESSION['img']='null';
        echo '1';
    }
    else{
        echo "0";

    }
?>