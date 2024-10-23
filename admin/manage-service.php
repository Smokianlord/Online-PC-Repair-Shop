<?php include('partials/menu.php'); ?>
<!-- Section Starts Here -->
<div class="main-content">
            <div class="wrapper bg008">
                <h1 class="text-right">MANAGE SERVICE</h1>

                <br/><br/><br/><br/>

                <?php
                if(isset($_SESSION['add']))
                {
                    echo $_SESSION['add'];
                    unset($_SESSION['add']);
                }

                if(isset($_SESSION['delete']))
                {
                    echo $_SESSION['delete'];
                    unset($_SESSION['delete']);
                }

                if(isset($_SESSION['update']))
                {
                    echo $_SESSION['update'];
                    unset($_SESSION['update']);
                }
                ?>

                
                <br/><br/><br/><br/>
                <table class="table-full">
                    <tr>
                        <th>Serial Number</th>
                        <th>Service Name</th>
                        <th>Price</th>
                        <th>Put on Wall?</th>
                        <th>Keep it On?</th>
                        <th>Update/Delete</th>
                    </tr>

                    <tr>
                        <td>1</td>
                        <td>COOLER FAN FIX</td>
                        <td>500.00 TAKA</td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>
                            <a href="#" class="button">Update Service</a>
                            <a href="#" class="button">Delete Service</a>
                        </td>
                    </tr>

                    <tr>
                        <td>2</td>
                        <td>GRAPHICS CARD FIX</td>
                        <td>3000.00 TAKA</td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>
                            <a href="#" class="button">Update Service</a>
                            <a href="#" class="button">Delete Service</a>
                        </td>
                    </tr>

                    <tr>
                        <td>3</td>
                        <td>HEADPHONES FIX</td>
                        <td>1000.00 TAKA</td>
                        <td>Yes</td>
                        <td>Yes</td>
                        <td>
                            <a href="#" class="button">Update Service</a>
                            <a href="#" class="button">Delete Service</a>
                        </td>
                    </tr>

                    <?php
                        $sql = "SELECT * FROM service_info";
                        $res = mysqli_query($conn, $sql);
                        if($res==TRUE)
                        {
                            $count = mysqli_num_rows($res);


                            if($count>0)
                            {
                                while($row=mysqli_fetch_assoc($res))
                                {
                                    $id = $row['id'];
                                    $service_name = $row['service_name'];
                                    $price = $row['price'];
                                    $image_name = $row['image_name'];
                                    $featured = $row['featured'];
                                    $active = $row['active'];

                                ?>
                                    <tr>
                                        <td><?php echo $id; ?></td>
                                        <td><?php echo $service_name; ?></td>
                                        <td><?php echo $price; ?> TAKA</td>
                                        <td><?php echo $featured; ?></td>
                                        <td><?php echo $active; ?></td>
                                        <td>
                                            <a href="<?php echo SITEURL;?>admin/update-service.php?id=<?php echo $id; ?>" class="button">Update Service</a>
                                            <a href="<?php echo SITEURL;?>admin/delete-service.php?id=<?php echo $id; ?>" class="button">Delete Service</a>
                                        </td>
                                    </tr>

                                <?php
                                }
                            }
                        }
                        else
                        {
                            echo "<tr><td colspan='7' class='failed'> Service Not Found</td></tr>";
                        }
                    ?>
                </table>
                <br/><br/><br/><br/>
                <div style="margin-left: 80%" >
                <a href="<?php echo SITEURL; ?>admin/add-service.php" class="button">ADD SERVICE</a>
                </div>
            </div>
        </div>
        <!-- Section End Here -->

<?php include('partials/end.php'); ?>  