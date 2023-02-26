<?php 
    session_start();
    unset($_SESSION['t_name']);
    unset($_SESSION['t_id']);
    unset($_SESSION['t_img']);
    unset($_SESSION['t_pass']);
    header('Location:index.php');
?>