<?php include('partials/menu.php'); ?>
        
        <!-- Section Starts Here -->
        <div class="main-content">
            <div class="wrapper bg006">
                <h1 class="text-right">MANAGE ADMIN</h1>
                <br/><br/><br/><br/>
                
                <table class="table-full">
                    <tr>
                        <th>Serial Number</th>
                        <th>Full Name</th>
                        <th>Username</th>
                        <th>Update/Delete   </th>
                    </tr>
                    <?php
                        $sql = "SELECT * FROM admin_info";
                        $res = mysqli_query($conn, $sql);
                        if($res==TRUE)
                        {
                            $count = mysqli_num_rows($res);

                            if($count>0)
                                while($rows=mysqli_fetch_assoc($res))
                                {
                                    $id=$rows['id'];
                                    $full_name=$rows['full_name'];
                                    $username=$rows['username'];

                                    ?>  
                                        <tr>
                                            <td><?php echo $id; ?> </td>
                                            <td><?php echo $full_name; ?></td>
                                            <td><?php echo $username?></td>
                                            <td>
                                            <a href="<?php echo SITEURL; ?>admin/update-admin.php?id=<?php echo $id; ?>" class="button">Update Admin</a>
                                            <a href="<?php echo SITEURL; ?>admin/delete-admin.php?id=<?php echo $id; ?>" class="button">Delete Admin</a>
                                            </td>
                                        </tr>
                                    <?php
                                }
                        }
                     ?>
                    
                </table>
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

                 
                <br><br><br><br>
                <div style="margin-left: 80%" >
                    <a href="add-admin.php" class="button">ADD ADMIN</a>
                </div>

            </div>
        </div>
        <!-- Section End Here -->

<?php include('partials/end.php'); ?>