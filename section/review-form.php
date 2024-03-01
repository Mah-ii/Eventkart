<?php
include '../connection/config.php';

if (isset($_POST['upload'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $review = $_POST['review'];
    $image = $_FILES['image'];
    $category = $_POST['category'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "../image1/" . $img_name;
    move_uploaded_file($img_loc, '../image1/' . $img_name);


    mysqli_query($connection,"INSERT INTO `rev`(`user_name`, `user_email`, `review`, `image`) VALUES ('$name','$email','$review','$img_des')");

    // Prepare the SQL statement
    // $stmt = $connection->prepare("INSERT INTO `rev`(`user_name`, `user_email`, `review`, `image`, `category`) VALUES (?, ?, ?, ?, ?)");

    // // Bind parameters
    // $stmt->bind_param("sssss", $name, $email, $review, $img_des, $category);

    // // Execute the statement
    // $stmt->execute();

    // // Close the statement
    // $stmt->close();

    header("location:../HomePage.php");
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>
    <link rel="stylesheet" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

    <style>
        .fromCon {
            background-color: antiquewhite;
            padding: 2rem;
            text-align: center;
        }

        .fromConn {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: .3rem;
            margin-left: 20%;
            margin-right: 20%;
            margin-top: 5%;
        }

        input,
        textarea,
        button {
            height: 3rem;
            width: auto;
            border-radius: .5rem;
            padding: .5rem;
        }
    </style>

</head>

<body>
    <div>
        <div class="fromCon">
            <h1>Add Your Review</h1>
            <form action=" " method="POST" enctype="multipart/form-data" class="fromConn">
                <input type="text" name="name" placeholder="Your Name" required><br>
                <input type="email" name="email" placeholder="Your Email" id="" required><br>
                <textarea name="review" placeholder="Review" id="" cols="30" rows="10" required></textarea>
                <input type="file" name="image" placeholder="Image" id="" required><br>
                <select class="formCon" id="category" name="category">
                    <option value=" "> Select Category</option>
                    <option value="Wedding">Wedding</option>
                    <option value="Birthday">Birthday</option>


                </select>
                <button type="submit" name="upload">Upload</button>

            </form>
        </div>
    </div>



</body>

</html>