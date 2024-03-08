<?php

if (isset($_POST['submit'])) {

    include 'config/dbconn.php';

    
    $photo_image = $_FILES['image'];
    $photo_category = $_POST['Pages'];
    $image_loc = $_FILES['image']['tmp_name'];
    $image_name = $_FILES['image']['name'];
    $img_des = "Uploadimage/" . $image_name;
    move_uploaded_file($image_loc, "Uploadimage/" . $image_name);

    mysqli_query($connection, "INSERT INTO `gallery`(`name`, `title`, `image`, `category`) 
    VALUES ('$photo_name','$photo_title','$img_des','$photo_category')");

    header("location:photo_gallery.php");
}

?>





<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product-page</title>

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
                        <p class="text-center fw-bold fs-3 text-warning">Gallery Photo Add:</p>
                    </div>
                
                    <div class="mb-3">
                        <label for="formFile" class="form-label">Add Image:</label>
                        <input class="form-control" name="image" type="file" id="formFile">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Select Photo Category</label>
                        <select class="form-select" name="Pages">
                            <option disabled selected>Select Category</option>
                            <option value="Wedding">Wedding</option>
                            <option value="Birthday">Birthday</option>
                            <option value="Corporate">Corporate</option>
                            <option value="Wed_invitation">Wed_invitation</option>
                            <option value="Birth_invitation">Birth_invitation</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>
                    <button name="submit" class="bg-danger fs-4 fw-bold my-3 form-control text-white">Upload</button>
                </form>
            </div>
        </div>
    </div>

    <!-- fetch data -->
    <!-- <div class="container">
        <div class="row">
            <div class="col-md-6 m-auto">
                <table class="table table-hover border border-warning my-5">
                    <thead class="bg-dark text-white fs-5 font-monospace text-center">
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">Name</th>
                            <th scope="col">Price</th>
                            <th scope="col">Image</th>
                            <th scope="col">Category</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody class="text-center">
                        <?php
                        include 'config.php';
                        $Record = mysqli_query($con, "SELECT * FROM `tblproduct`");

                        while ($row = mysqli_fetch_array($Record)) {
                            echo "
            
                <tr>
                    <td>$row[Id]</td>
                    <td>$row[PName]</td>
                    <td>$row[PPrice]</td>
                    <td><img src='$row[Pimage]' height='90px' width='150px'</td>
                    <td>$row[PCategory]</td>
                    <td><a href=''class='btn btn-danger'>Home</a></td>
                </tr>
            ";
                        }
                        ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div> -->


    <!-- bootstraop js -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>