<?php include('partials/menu.php'); ?>

    <div class="main-content">
        <div class="wrapper bg002">
            <h1 class="text-right">UPDATE ADMIN</h1>
                <form action="" method="POST">
                <br>
                <br>
                <?php
                    $id= $_GET['id'];
                    $sql= "SELECT * FROM admin_info WHERE id=$id";
                    $res= mysqli_query($conn, $sql);

                    if($res==true)

                    {
                        $count= mysqli_num_rows($res);
                        if($count==1)
                        {
                            $row=mysqli_fetch_assoc($res);

                            $full_name = $row['full_name'];
                            $username = $row['username'];

                        }
                        else
                        {
                            header('location:'.SITEURL.'admin/manage-admin.php');
                        }
                    }
                 ?>
            <table style="width: 20%" class="majkhane emptybg">
                <tr>
                    <td>Full Name: </td>
                    <td><input type="text" name="full_name" value="<?php echo $full_name; ?>"></td>
                </tr>
                <tr>
                    <td>Username: </td>
                    <td><input type="text" name="username" value="<?php echo $username; ?>"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <br>
                        <div style="margin-left: 44%">
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <input type="submit" name="submit" value="Update Admin" class="button">
                        </div>
                        

                    </td>
                </tr>
            </table>
                </form>
        </div>
    </div>

    <?php
        if(isset($_POST['submit']))
        {
            $id= $_POST['id'];
            $full_name= $_POST['full_name'];
            $username= $_POST['username'];

            $sql= "UPDATE admin_info SET 
            full_name= '$full_name',
            username= '$username' WHERE id = '$id' ";

            $res = mysqli_query($conn, $sql);

            if($res==true)
            {
                $_SESSION['update'] = "<div class='done'> Success!</div>";
                header("location:".SITEURL.'admin/manage-admin.php');

            }
            else
            {
                $_SESSION['update'] = "<div class='failed'> Failed!</div>";
                header("location:".SITEURL.'admin/add-admin.php');
            }
        } 
    ?>

<?php include('partials/end.php'); ?>    