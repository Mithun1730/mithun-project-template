<?php
    // session_destroy();
    unset($_SESSION['name']);
    unset($_SESSION['id']);
    unset($_SESSION['error1']);
    header('location:signin.php');
?>