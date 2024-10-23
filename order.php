<?php include('partials-front/menu.php')?>


    <!-- Section Starts Here -->
    <section class="order orderbg">
        <div class="container">
            <div>


            <?php
                if(isset($_SESSION['submit']))
                {
                    echo $_SESSION['submit'];
                    unset($_SESSION['submit']);
                } 
            ?>

            <form action="#" class="order">
            <h2 class="text-center text-white">Fill this form to confirm your order.</h2>
                <fieldset>
                    <legend>Order Form</legend>
                    <br>
                    <h1 class="text-center">Delivery Details</h1>
                    <br>
                    <div class="order-label">Service Name</div>
                    <input type="text" name="service_name" placeholder="E.g. Mouse Fix" class="input-responsive" required>

                    <div class="order-label">Full Name</div>
                    <input type="text" name="full_name" placeholder="E.g. Showrav Zaman" class="input-responsive" required>

                    <div class="order-label">Phone Number</div>
                    <input type="tel" name="contact" placeholder="E.g. 0164XXXXXXX" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. pcrepairshop-online@repairshop.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, Country" class="input-responsive" required></textarea>

                    <input type="submit" name="submit" value="Confirm Order" class="button button-primary">
                </fieldset>

            </form>
            </div>

        </div>
    </section>
    <!-- Section Ends Here -->

    <?php  

            if(isset($_POST['submit']))
            {
                $service_name = $_POST['service_name'];
                $full_name = $_POST['full_name'];
                $contact = $_POST['contact'];
                $email = $_POST['email'];
                $address = $_POST['address'];

                echo $service_name;

                $sql = "INSERT INTO order_info SET 
                        service_name = '$service_name',
                        full_name = '$full_name',
                        contact = '$contact',
                        email = '$email',
                        address = '$address'
                ";

                $res = mysqli_query($conn, $sql) or die(mysqli_error());
            }
            else
            {

            }
    
    ?>


    <?php include('partials-front/end.php')?>

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
    
    