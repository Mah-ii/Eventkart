<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Photo Details</title>

    <!-- bootstraop cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>

    <?php
    include 'config/dbconn.php';

    $id = $_GET['id'];


    $insert = "SELECT * FROM `venue` WHERE id='$id' ";
    $result = mysqli_query($connection, $insert);

    $row = mysqli_fetch_assoc($result);


    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-warning">Update Venue Details:</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Venue Name:</label>
                        <input type="text" name="Vname" class="form-control" value="<?php echo $row['venue_name'] ?>"
                            required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Venue Place:</label>
                        <input type="text" name="Vplace" class="form-control" value="<?php echo $row['place'] ?>"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Select Package Category</label>
                        <select class="form-select" name="Pages">
                          
                            <?php
                            if ($row['category'] == "Wedding") {
                               
                                echo " <option disabled> Select Category</option>";
                                echo "<option selected value='Wedding'>Wedding</option>";
                                echo "<option value='Birthday'>Birthday</option>";
                                echo "<option value='Corporate'>Corporate</option>";
                                echo "<option value='Others'>Others</option>";
                            } elseif ($row['category'] == "Birthday") {
                                echo " <option disabled> Select Category</option>";
                                echo "<option value='Wedding'>Wedding</option>";
                                echo "<option selected  value='Birthday'>Birthday</option>";
                                echo "<option value='Corporate'>Corporate</option>";
                                echo "<option value='Others'>Others</option>";
                            } elseif ($row['category'] == "Corporate") {
                                echo " <option disabled> Select Category</option>";
                                echo "<option value='Wedding'>Wedding</option>";
                                echo "<option value='Birthday'>Birthday</option>";
                                echo "<option selected value='Corporate'>Corporate</option>";
                                echo "<option value='Others'>Others</option>";
                            } elseif ($row['category'] == "Others") {
                                echo " <option disabled> Select Category</option>";
                                echo "<option value='Wedding'>Wedding</option>";
                                echo "<option value='Birthday'>Birthday</option>";
                                echo "<option value='Corporate'>Corporate</option>";
                                echo "<option selected value='Others'>Others</option>";
                            } else {
                                echo " <option disabled selected> Select Category</option>";
                                echo "<option value='Wedding'>Wedding</option>";
                                echo "<option value='Birthday'>Birthday</option>";
                                echo "<option value='Corporate'>Corporate</option>";
                                echo "<option value='Others'>Others</option>";
                            }
                           

                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Image Preview:</label>
                        <img src="<?php echo $row['image']; ?>" height="100"><br>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Add Image:</label>
                        <input class="form-control" name="image" type="file" id="formFile">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Venue Location:</label>
                        <input type="text" name="Vlocation" class="form-control" value="<?php echo $row['location'] ?>"
                            required>
                    </div>

                    <button name="update" value="update"
                        class="bg-danger fs-4 fw-bold my-3 form-control text-white">Update</button>
                </form>
            </div>
        </div>
    </div>



    <!-- bootstraop js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>


<?php


if (isset($_POST['update'])) {

    $venue_name = $_POST['Vname'];
    $venue_place = $_POST['Vplace'];
    $venue_category = $_POST['Pages'];
    $photo_image = $_FILES['image'];
    $image_loc = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $img_des = "Venueimage/" . $image_name;
    move_uploaded_file($image_loc, "Venueimage/" . $image_name);

    $venue_location = $_POST['Vlocation'];


    $insert = "UPDATE venue SET `venue_name`='$venue_name',`place`='$venue_place', `category`='$venue_category',`image`='$img_des',`location`='$venue_location' WHERE id=$id";

    $query = mysqli_query($connection, $insert);

    if (!$query) {
        // echo "<script> alert('not inserted!!')</script>";
        echo "<script> location.href = 'venue_update.php'</script>";

    } else {
        //  echo "<script> alert('SUCCESSFULLY Updated')</script>";
        echo "<script> location.href = 'venue.php'</script>";

    }
}



?>