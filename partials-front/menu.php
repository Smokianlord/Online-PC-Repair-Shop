<?php include('config/constants.php');?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online PC Repair Shop</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
    <!-- Section Starts Here -->
    <section class="Navigation">
        <div class="Container"> 
            <div class="logo">
                <img src="images/Logo.png" alt="Shop Logo" class="img_responsive">
            </div>

            <div class="Menu text-right">
                <ul>
                    <li class="add_border">
                        <a href="<?php echo SITEURL; ?>">Home</a>
                    </li>
                    
                    <li class="add_border">
                        <a href="<?php echo SITEURL; ?>about.php">About</a>
                    </li>

                    <li class="add_border">
                        <a href="<?php echo SITEURL; ?>services.php">Services</a>
                    </li>

                    <li class="add_border">
                        <a href="<?php echo SITEURL; ?>contact.php">Contact</a>
                    </li>

                    <li class="add_border">
                        <a href="<?php echo SITEURL; ?>location.php">Location</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>

        </div>
    </section>
    <!-- Section Ends Here -->
        
    <!-- Section Starts Here -->
    <section class="Search text-right">
        <div class="Container"> 
            
            <form action="">
                <input type="search" name="search" placeholder="Please search here....">
                <input type="submit" name="submit" value="Search now!" class="button button-primary">
            </form>

        </div>
    </section>
    <!-- Section Ends Here -->