<?php include('../config/constants.php'); ?>

<html>
    <head>
        <title>LOGIN PAGE</title>
        <link rel="stylesheet" href="../css/admin.css">
    </head>

    <body class="bg007">
        <div class="login bg004">
            <h3 class="text-center">Welcome To PC Repair Shop!</h3>
            <br>
            <h1 class="text-center">Login</h1>
            <br>
            <br>
    <?php
        if(isset($_SESSION['login']))
        {
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        } 

        if(isset($_SESSION['not-loggedin']))
        {
            echo $_SESSION['not-loggedin'];
            unset($_SESSION['not-loggedin']);
        }
    ?>
    <br><br>

            <form action="" method="POST" class="text-center">
                <p style="font-weight: bold;">Username:</p> <input type="text" name="username" placeholder="Enter Your Username...">
                <br>
                <br>
                <p style="font-weight: bold;">Password:</p> <input type="password" name="password" placeholder="Enter Your Password...">
                <br>
                <br>
                <input type="submit" name="submit" value="Login" class="button" style="wid">
            </form>
        </div>
    </body>
</html>

<?php 
    if(isset($_POST['submit']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM admin_info WHERE username='$username' AND password='$password'";

    $res = mysqli_query($conn, $sql);

    $count = mysqli_num_rows($res);

    if($count==1)
    {  
        $_SESSION['login'] = "<div class='done'> Login Successful!</div>";
        $_SESSION['user'] = $username;
            header("location:".SITEURL.'admin/');
    }
    else
    {
        $_SESSION['login'] = "<div class='failed'> Incorrect Information</div>";
            header("location:".SITEURL.'admin/login.php');
    }
}
?>