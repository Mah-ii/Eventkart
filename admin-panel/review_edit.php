<?php
include 'config/dbconn.php';

$id = $_GET['id'];

$query2 = "SELECT * FROM rev WHERE id=?";
$stmt = mysqli_prepare($connection, $query2);
mysqli_stmt_bind_param($stmt, "i", $id);
mysqli_stmt_execute($stmt);
$result2 = mysqli_stmt_get_result($stmt);

$row2 = mysqli_fetch_assoc($result2);

if(isset($_POST['update'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $review = $_POST['review'];
    $category = $_POST['category'];
    $image = $_FILES['image'];
    $img_loc = $_FILES['image']['tmp_name'];
    $img_name = $_FILES['image']['name'];
    $img_des = "../image1/".$img_name;
    move_uploaded_file($img_loc,'../image1/'.$img_name);

    mysqli_query($connection,"UPDATE `rev` SET `user_name`='$name',`user_email`='$email',`review`='$review',`image`='$img_des' WHERE id = '$id'");
   
    
    header("location:blogs_events.php");

    // $update_query = "UPDATE `rev` SET `user_name`=?, `user_email`=?, `review`=?, `image`=?, `category`=? WHERE id=?";
    // $stmt = mysqli_prepare($connection, $update_query);
    // mysqli_stmt_bind_param($stmt, "sssssi", $name, $email, $review, $img_des, $category, $id);
    // mysqli_stmt_execute($stmt);
    
    // header("location:blogs_events.php");
    // exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
   
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">

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
        input, textarea, button {
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
            <form action="" method="POST" enctype="multipart/form-data" class="fromConn">
                <input type="text" name="name" placeholder="Your Name" value="<?php echo $row2['user_name'] ?>" required><br>
                <input type="email" name="email" placeholder="Your Email" id="" value="<?php echo $row2['user_email'] ?>" required><br>
                <textarea name="review" placeholder="Review" id="" cols="30" rows="10" required><?php echo $row2['review'] ?></textarea>
                <input type="file" name="image" placeholder="Image" id="" ><br>
                <input type="hidden" name="id"  value="<?php echo $row2['id'] ?>">
                <select class="formCon" id="category" name="category">
                    <option value="Wedding" <?php if($row2['category'] == "Wedding") echo "selected" ?>>Wedding</option>
                    <option value="Birthday" <?php if($row2['category'] == "Birthday") echo "selected" ?>>Birthday</option>
                </select>
                <button type="submit" name="update">Update</button>
            </form>
        </div>
    </div>
</body>
</html>
