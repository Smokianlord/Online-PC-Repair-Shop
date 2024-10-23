<?php include('partials/menu.php'); ?>

    <div class="main-content">
        <div class="wrapper bg002">
            <h1 class="text-center">ADD SERVICE</h1>
            <br>
            <br>

            <?php
                if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }
            ?>

            <form action="" method="POST" enctype="multipart/form-data">
                <table style="width: 30%; margin-left: 35%;" class="emptybg">
                    <tr>
                        <td>Service Name: </td>
                        <td>
                            <input type="text" name="service_name">
                        </td>
                    </tr>
                    <tr>
                        <td>Price: </td>
                        <td>
                            <input type="number" name="price">
                        </td>
                    </tr>

                    <tr>
                        <td>Put on Wall?</td>
                        <td>
                            <input type="radio" name="featured" value="Yes"> Yes
                            <input type="radio" name="featured" value="No"> No
                        </td>
                    </tr>

                    <tr>
                        <td>Keep it On?</td>
                        <td>
                            <input type="radio" name="active" value="Yes"> Yes
                            <input type="radio" name="active" value="No"> No
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="submit" name="submit" value="Add It" class="button" style="margin-left: 80%">
                        </td>
                    </tr>

                </table>

            </form>

            <?php
                    if(isset($_POST['submit']))
                    {   
                        $service_name = $_POST['service_name'];
                        $price = $_POST['price'];

                        if(isset($_POST['featured']))
                        {
                            $featured = $_POST['featured'];
                        }
                        else
                        {
                            $featured = "No";
                        }

                        if(isset($_POST['active']))
                        {
                            $active = $_POST['active'];
                        }
                        else
                        {
                            $active = "No";
                        }


                        $sql = "INSERT INTO service_info SET
                        service_name = '$service_name',
                        price = $price,
                        featured = '$featured',
                        active = '$active' 
                        ";

                    
                        $res = mysqli_query($conn, $sql);

                        if($res==TRUE)
                        {
                            $_SESSION['add']= "<div class='done'>Done!</div>";
                            header('location:'.SITEURL.'admin/manage-service.php');
                        }
                        else
                        {
                            $_SESSION['add']= "<div class='failed'>Failed!</div>";
                            header('location:'.SITEURL.'admin/manage-service.php');
                        }

                    }

                

            ?>
        </div>
    </div>

<?php include('partials/end.php'); ?>  