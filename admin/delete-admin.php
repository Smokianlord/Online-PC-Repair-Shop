<?php include('partials/menu.php'); ?>
<?php
        $id = $_GET['id'];
        $sql = "DELETE FROM admin_info WHERE id=$id";
        $res = mysqli_query($conn, $sql);

        if($res==true)
        {
            $_SESSION['delete'] = "<div class='done'> Done!</div>";
            header('location:'.SITEURL.'admin/manage-admin.php');
        }
        else
        {
            $_SESSION['delete'] = "<div class='failed'> Failed!</div>";
            header('location:'.SITEURL.'admin/manage-admin.php');
        }

?>
<?php include('partials/end.php'); ?>    