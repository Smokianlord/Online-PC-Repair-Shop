<?php
    
    include('../config/constants.php');

    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $sql = "DELETE FROM service_info WHERE id=$id";
        $res = mysqli_query($conn, $sql);

        if($res==TRUE)
        {
            $_SESSION['delete']= "<div class='done'>Done!</div>";
            header('location:'.SITEURL.'admin/manage-service.php');
        }
        else
        {
            $_SESSION['delete']= "<div class='failed'>Failed!</div>";
            header('location:'.SITEURL.'admin/manage-service.php');
        }
    }
    else
    {
        $_SESSION['delete']= "<div class='failed'>Unauthorized</div>";
        header('location:'.SITEURL.'admin/manage-service.php');
    }

?>