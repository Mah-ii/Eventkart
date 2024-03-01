<?php

if (isset($_POST['submit'])) {

    include 'config/dbconn.php';

    $venue_name = $_POST['Vname'];
    $venue_place = $_POST['Vplace'];
    $venue_category = $_POST['Pages'];
    $photo_image = $_FILES['image'];
    $image_loc = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $img_des = "Venueimage/" . $image_name;
    move_uploaded_file($image_loc, "Venueimage/" . $image_name);

    $venue_location = $_POST['Vlocation'];


    //insert product
    mysqli_query($connection, "INSERT INTO `venue`(`venue_name`, `place`, `category`, `image`, `location`) 
    VALUES  ('$venue_name','$venue_place','$venue_category','$img_des','$venue_location')");

    header("location:venue.php");
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Venue-page</title>

    <!-- bootstraop cdn -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-warning">Venue Photo Add:</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Venue Name:</label>
                        <input type="text" name="Vname" class="form-control" placeholder="Enter venue name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Venue Place:</label>
                        <input type="text" name="Vplace" class="form-control" placeholder="Enter place name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select Package Category</label>
                        <select class="form-select" name="Pages">
                            <option disabled selected>Select Category</option>
                            <option value="Wedding">Wedding</option>
                            <option value="Birthday">Birthday</option>
                            <option value="Corporate">Corporate</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Add Image:</label>
                        <input class="form-control" name="image" type="file" id="formFile">
                    </div>


                    <div class="mb-3">
                        <label class="form-label">Venue Location:</label>
                        <input type="text" name="Vlocation" class="form-control" placeholder="Enter venue location">
                    </div>
                    <button name="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Upload</button>
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