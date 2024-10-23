<?php include('partials/menu.php'); ?>
        
        <!-- Section Starts Here -->
        <div class="main-content">
            <div class="wrapper bg011">
                <h1 class="text-center">DASHBOARD</h1>
                <br><br>

    <?php
        if(isset($_SESSION['login']))
        {
            echo $_SESSION['login'];
            unset($_SESSION['login']);
        } 
    ?>

    <br><br>
            <div class="dashmajkhane">
                <div class="boxes add_border button2">
                    <a href="manage-admin.php"><h1>MANAGE ADMIN</h1></a>
                </div>

                <div class="boxes add_border button2">
                <a href="manage-service.php"><h1>MANAGE SERVICE</h1></a>
                </div>

                <div class="boxes add_border button2">
                <a href="manage-order.php"><h1>MANAGE ORDER</h1></a>
                </div>

                <div class="clearfix"></div>
            </div>

            </div>
        </div>
        <!-- Section End Here -->
        
 <?php include('partials/end.php'); ?>      