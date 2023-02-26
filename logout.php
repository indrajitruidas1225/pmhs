<?php 
    session_start();
    unset($_SESSION['name']);
    unset($_SESSION['id']);
    unset($_SESSION['img']);
    unset($_SESSION['pass']);
    header('Location:index.php');
?>