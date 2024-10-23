<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper bg002">

    <?php
        if(isset($_SESSION['add']))
        {
            echo $_SESSION['add'];
            unset($_SESSION['add']);
        } 
    ?>
        

        <form action="" method= "POST">
<h1 class="text-center">ADD ADMIN</h1>
<br>
<br>
            <table style="width: 20%" class="majkhane emptybg">
                <tr>
                    <td>Full Name: </td>
                    <td><input type="text" name="full_name" placeholder="Enter Your Name"></td>
                </tr>
                <tr>
                    <td>Username: </td>
                    <td><input type="text" name="username" placeholder="Enter Your Username"></td>
                </tr>
                <tr>
                    <td>Password: </td>
                    <td><input type="password" name="password" placeholder="Enter Your Password"></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <br>
                        <div style="margin-left: 44%">
                            <input type="submit" name="submit" value="Add Admin" class="button">
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
        //echo "Nigga Yes";
         $full_name = $_POST['full_name'];
         $username = $_POST['username'];
         $password = $_POST['password'];

        //SQL STARTS HERE
        $sql= 
        "INSERT INTO admin_info SET
            full_name='$full_name',
            username='$username',
            password='$password'
        ";

        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        if($res==TRUE)

        {
            //YES DATA IN
            //echo"Noice";
            $_SESSION['add'] = "<div class='done'> Success!</div>";
            header("location:".SITEURL.'admin/manage-admin.php');
        }

        else
        {
            //NO DATA IN
            //echo"Not Noice";
            $_SESSION['add'] = "<div class='failed'> Failed!</div>";
            header("location:".SITEURL.'admin/add-admin.php');
        }

    }
    else
    {
        //echo "Nigga No";
    }
 ?>

<?php include('partials/end.php'); ?>    