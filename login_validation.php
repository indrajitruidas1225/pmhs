<?php
    session_start();
    
    include "includes/dbconn.php";
    //receive html data
    $email=mysqli_real_escape_string($conn,$_POST['a_email']);
    $password=mysqli_real_escape_string($conn,$_POST['a_pass']);
    //search query
    $query="SELECT * FROM admin WHERE admin_id LIKE '$email' AND password LIKE '$password'";
    $result=mysqli_query($conn,$query); //runs the query

    $num_row=mysqli_num_rows($result);//number of rows of that data

    $result=mysqli_fetch_assoc($result); //returns an associative array of the results

    if($num_row==1){
        $_SESSION['name']=$result['name'];
        $_SESSION['id']=$result['admin_id'];
        $_SESSION['img']=$result['img_path'];
        $_SESSION['pass']=$result['password'];
        // $_SESSION['t_name']='null';
        // $_SESSION['t_id']='null';
        // $_SESSION['t_img']='null';
        echo '1';
    }
    else{
        echo "0";

    }
?>