<?php

    if(!isset($_SESSION['user']))
    {
        $_SESSION['not-loggedin']= "<div class='failed'> Please login first.</div>";
        header('location:'.SITEURL.'admin/login.php');
    }
?>