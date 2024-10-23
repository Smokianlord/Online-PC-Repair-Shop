<?php include('partials/menu.php'); ?>

<?php
    if(isset($_GET['id']))
    {
        $id = $_GET['id'];
        $sql = "SELECT * FROM service_info WHERE id=$id";
        $res = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($res);

        $service_name = $row['service_name'];
        $price = $row['price'];
        $featured = $row['featured'];
        $active = $row['active'];
    }
    else
    {
        header('location:'.SITEURL.'admin/manage-service.php');
    }
?>

<div class="main-content">
    <div class="wrapper bg002">

    <h1 class="text-right">UPDATE SERVICE</h1>
    <br><br>
    
    <form action="" method="POST" enctype="multipart/form-data">
                <table style="width: 30%; margin-left: 35%;" class="emptybg">
                    <tr>
                        <td>Service Name: </td>
                        <td>
                            <input type="text" name="service_name" value="<?php echo $service_name; ?>">
                        </td>
                    </tr>
                    <tr>
                        <td>Price: </td>
                        <td>
                            <input type="number" name="price" value="<?php echo $price; ?>">
                        </td>
                    </tr>

                    <tr>
                        <td>Put on Wall?</td>
                        <td>
                            <input <?php if($featured=="Yes") {echo "checked";} ?> type="radio" name="featured" value="Yes"> Yes
                            <input <?php if($featured=="No") {echo "checked";} ?> type="radio" name="featured" value="No"> No
                        </td>
                    </tr>

                    <tr>
                        <td>Keep it On?</td>
                        <td>
                            <input <?php if($featured=="Yes") {echo "checked";} ?> type="radio" name="active" value="Yes"> Yes
                            <input <?php if($featured=="No") {echo "checked";} ?> type="radio" name="active" value="No"> No
                        </td>
                    </tr>

                    <tr>
                        <td colspan="2">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="submit" name="submit" value="Update" class="button" style="margin-left: 80%">
                        </td>
                    </tr>

                </table>

            </form>

            <?php
                if(isset($_POST['submit']))
                {
                    $id = $_POST['id'];
                    $service_name = $_POST['service_name'];
                    $price = $_POST['price'];
                    $featured = $_POST['featured'];
                    $active = $_POST['active'];

                    $sql2 = "UPDATE service_info SET
                    service_name = '$service_name',
                    price = $price,
                    featured = '$featured',
                    active = '$active'
                    WHERE id=$id
                    ";

                    $res2 = mysqli_query($conn, $sql2);

                    if($res2==TRUE)
                    {
                        $_SESSION['update'] = "<div class='done'>Updated!</div>";
                        header('location:'.SITEURL.'admin/manage-service.php');
                    }
                    else
                    {
                        $_SESSION['update'] = "<div class='failed'>Update Failed.</div>";
                        header('location:'.SITEURL.'admin/manage-service.php');
                    }
                }
            ?>
    </div>
</div>

<?php include('partials/end.php'); ?>  