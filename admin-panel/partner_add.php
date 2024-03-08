<?php

if (isset($_POST['submit'])) {

    include 'config/dbconn.php';

    $company_name = $_POST['Cname'];
    $owner_name = $_POST['Oname'];
    $category = $_POST['Pages'];
    $phone = $_POST['Phone'];
    $email = $_POST['Email'];
    $facebook = $_POST['Facebook'];
    $instragram = $_POST['Instragram'];

    $sql = "INSERT INTO `partners`(`com_name`, `owner_name`, `category`, `phone`, `email`, `facebook`, `instragram`) VALUES ('$company_name','$owner_name','$category','$phone','$email','$facebook','$instragram')";

    mysqli_query($connection, $sql);


    header("location:partner.php");
}

?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partner-page</title>

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
                        <p class="text-center fw-bold fs-3 text-warning">Partner details Add:</p>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Company Name:</label>
                        <input type="text" name="Cname" class="form-control" placeholder="Enter Company name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Owner Name:</label>
                        <input type="text" name="Oname" class="form-control" placeholder="Enter Owner name">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Select Category</label>
                        <select class="form-select" name="Pages">
                            <option disabled selected>Select Category</option>
                            <option value="Bakeries">Bakeries</option>
                            <option value="Caterars">Caterars</option>
                            <option value="Music">Music</option>
                            <option value="Flowrist">Flowrist</option>
                            <option value="Makeup & Hair">Makeup & Hair</option>
                            <option value="Photographers">Photographers</option>
                            <option value="Decorations">Decorations</option>
                            <option value="Transports">Transports</option>
                            <option value="Videography">Videography</option>
                        </select>
                    </div>



                    <div class="mb-3">
                        <label class="form-label">Phone:</label>
                        <input type="text" name="Phone" class="form-control" placeholder="Enter phone number">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email:</label>
                        <input type="text" name="Email" class="form-control" placeholder="Enter Email address">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Facebook link:</label>
                        <input type="text" name="Facebook" class="form-control" placeholder="Enter Facebook page link">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Instragram link:</label>
                        <input type="text" name="Instragram" class="form-control"
                            placeholder="Enter Instragram page link">
                    </div>

                    <button name="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Upload</button>
                </form>
            </div>
        </div>
    </div>

    <br><br><br>


    <!-- bootstraop js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>