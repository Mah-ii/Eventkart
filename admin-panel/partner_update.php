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


    $insert = "SELECT * FROM `partners` WHERE id='$id' ";
    $result = mysqli_query($connection, $insert);

    $row = mysqli_fetch_assoc($result);


    ?>

    <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto border border-primary mt-3">
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <p class="text-center fw-bold fs-3 text-warning">Update Partners Details:</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Company Name:</label>
                        <input type="text" name="Cname" class="form-control" value="<?php echo $row['com_name'] ?>"
                            required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Owner Name:</label>
                        <input type="text" name="Oname" class="form-control" value="<?php echo $row['owner_name'] ?>"
                            required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Select Package Category</label>
                        <select class="form-select" name="Pages">
                            <!-- <option disabled> Select Category</option> -->
                            <?php
                            if ($row['category'] == "Bakeries") {
                                echo " 
                                <option disabled> Select Category</option>
                                <option selected value='Bakeries'>Bakeries</option>
                                <option value='Caterars'>Caterars</option>
                                <option value='Music'>Music</option>
                                <option value='Flowrist'>Flowrist</option>
                                <option value='Makeup & Hair'>Makeup & Hair</option>
                                <option value='Photographers'>Photographers</option>
                                <option value='Decorations'>Decorations</option>
                                <option value='Transports'>Transports</option>
                                <option value='Videography'>Videography</option>
                                ";
                            } elseif ($row['category'] == "Caterars") {
                                echo " 
                                <option disabled> Select Category</option>
                                <option value='Bakeries'>Bakeries</option>
                                <option selected value='Caterars'>Caterars</option>
                                <option value='Music'>Music</option>
                                <option value='Flowrist'>Flowrist</option>
                                <option value='Makeup & Hair'>Makeup & Hair</option>
                                <option value='Photographers'>Photographers</option>
                                <option value='Decorations'>Decorations</option>
                                <option value='Transports'>Transports</option>
                                <option value='Videography'>Videography</option>
                                ";
                            } elseif ($row['category'] == "Music") {
                                echo " 
                                <option disabled> Select Category</option>
                                <option value='Bakeries'>Bakeries</option>
                                <option value='Caterars'>Caterars</option>
                                <option selected value='Music'>Music</option>
                                <option value='Flowrist'>Flowrist</option>
                                <option value='Makeup & Hair'>Makeup & Hair</option>
                                <option value='Photographers'>Photographers</option>
                                <option value='Decorations'>Decorations</option>
                                <option value='Transports'>Transports</option>
                                <option value='Videography'>Videography</option>
                                ";
                            } elseif ($row['category'] == "Flowrist") {
                                echo " 
                                <option disabled> Select Category</option>
                                <option value='Bakeries'>Bakeries</option>
                                <option value='Caterars'>Caterars</option>
                                <option value='Music'>Music</option>
                                <option selected value='Flowrist'>Flowrist</option>
                                <option value='Makeup & Hair'>Makeup & Hair</option>
                                <option value='Photographers'>Photographers</option>
                                <option value='Decorations'>Decorations</option>
                                <option value='Transports'>Transports</option>
                                <option value='Videography'>Videography</option>
                                ";
                            } elseif ($row['category'] == "Makeup & Hair") {
                                echo " 
                                <option disabled> Select Category</option>
                                <option value='Bakeries'>Bakeries</option>
                                <option value='Caterars'>Caterars</option>
                                <option value='Music'>Music</option>
                                <option value='Flowrist'>Flowrist</option>
                                <option selected value='Makeup & Hair'>Makeup & Hair</option>
                                <option value='Photographers'>Photographers</option>
                                <option value='Decorations'>Decorations</option>
                                <option value='Transports'>Transports</option>
                                <option value='Videography'>Videography</option>
                                ";
                            } elseif ($row['category'] == "Photographers") {
                                echo " 
                                <option disabled> Select Category</option>
                                <option value='Bakeries'>Bakeries</option>
                                <option value='Caterars'>Caterars</option>
                                <option value='Music'>Music</option>
                                <option value='Flowrist'>Flowrist</option>
                                <option value='Makeup & Hair'>Makeup & Hair</option>
                                <option selected value='Photographers'>Photographers</option>
                                <option value='Decorations'>Decorations</option>
                                <option value='Transports'>Transports</option>
                                <option value='Videography'>Videography</option>
                                ";
                            } elseif ($row['category'] == "Decorations") {
                                echo " 
                                <option disabled> Select Category</option>
                                <option value='Bakeries'>Bakeries</option>
                                <option value='Caterars'>Caterars</option>
                                <option value='Music'>Music</option>
                                <option value='Flowrist'>Flowrist</option>
                                <option value='Makeup & Hair'>Makeup & Hair</option>
                                <option value='Photographers'>Photographers</option>
                                <option selected value='Decorations'>Decorations</option>
                                <option value='Transports'>Transports</option>
                                <option value='Videography'>Videography</option>
                                ";
                            } elseif ($row['category'] == "Transports") {
                                echo " 
                                <option disabled> Select Category</option>
                                <option value='Bakeries'>Bakeries</option>
                                <option value='Caterars'>Caterars</option>
                                <option value='Music'>Music</option>
                                <option value='Flowrist'>Flowrist</option>
                                <option value='Makeup & Hair'>Makeup & Hair</option>
                                <option value='Photographers'>Photographers</option>
                                <option value='Decorations'>Decorations</option>
                                <option selected value='Transports'>Transports</option>
                                <option value='Videography'>Videography</option>
                                ";
                            } elseif ($row['category'] == "Videography") {
                                echo " 
                                <option disabled> Select Category</option>
                                <option value='Bakeries'>Bakeries</option>
                                <option value='Caterars'>Caterars</option>
                                <option value='Music'>Music</option>
                                <option value='Flowrist'>Flowrist</option>
                                <option value='Makeup & Hair'>Makeup & Hair</option>
                                <option value='Photographers'>Photographers</option>
                                <option value='Decorations'>Decorations</option>
                                <option value='Transports'>Transports</option>
                                <option selected value='Videography'>Videography</option>
                                ";
                            } else {
                                echo " <option disabled selected> Select Category</option>";
                                echo " 
                                <option value='Bakeries'>Bakeries</option>
                                <option value='Caterars'>Caterars</option>
                                <option value='Music'>Music</option>
                                <option value='Flowrist'>Flowrist</option>
                                <option value='Makeup & Hair'>Makeup & Hair</option>
                                <option value='Photographers'>Photographers</option>
                                <option value='Decorations'>Decorations</option>
                                <option value='Transports'>Transports</option>
                                <option value='Videography'>Videography</option>
                                ";
                            }
                            // echo "<option {$selected} value='{$row['category']}'>{$row['category']}</option>";
                            
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Phone:</label>
                        <input type="text" name="Phone" class="form-control" value="<?php echo $row['phone'] ?>"
                            required>
                    </div>
                    <!-- <div class="mb-3">
                        <label for="formFile" class="form-label">Image Preview:</label>
                        <img src="<?php echo $row['image']; ?>" height="100"><br>
                    </div>
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Add Image:</label>
                        <input class="form-control" name="image" type="file" id="formFile">
                    </div> -->

                    <div class="mb-3">
                        <label class="form-label">Email:</label>
                        <input type="text" name="Email" class="form-control" value="<?php echo $row['email'] ?>"
                            required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Facebook link:</label>
                        <input type="text" name="Facebook" class="form-control" value="<?php echo $row['facebook'] ?>"
                            required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Instragram link:</label>
                        <input type="text" name="Instragram" class="form-control"
                            value="<?php echo $row['instragram'] ?>" required>
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

    $company_name = $_POST['Cname'];
    $owner_name = $_POST['Oname'];
    $category = $_POST['Pages'];
    $phone = $_POST['Phone'];
    $email = $_POST['Email'];
    $facebook = $_POST['Facebook'];
    $instragram = $_POST['Instragram'];
    // $photo_category = $_POST['Pages'];
    // echo "<pre>";
    // print_r($product_image);
    // echo "</pre>";
    // $image_loc = $_FILES['image']['tmp_name'];
    // $image_name = $_FILES['image']['name'];
    // $img_des = "Venueimage/" . $image_name;
    // move_uploaded_file($image_loc, "Venueimage/" . $image_name);


    $insert = "UPDATE `partners` SET `com_name`='$company_name',`owner_name`='$owner_name',`category`='$category',`phone`='$phone',`email`='$email',`facebook`='$facebook',`instragram`='$instragram' WHERE id=$id";


    //$insert5 = "UPDATE venue SET `venue_name`='$venue_name',`place`='$venue_place', `category`='$venue_category',`image`='$img_des',`location`='$venue_location' WHERE id=$id";

    $query = mysqli_query($connection, $insert);

    if (!$query) {
        // echo "<script> alert('not inserted!!')</script>";
        echo "<script> location.href = 'partner_update.php'</script>";

    } else {
        //  echo "<script> alert('SUCCESSFULLY Updated')</script>";
        echo "<script> location.href = 'partner.php'</script>";

    }
}



?>