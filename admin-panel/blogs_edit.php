<?php

include 'config/dbconn.php';

$id = $_GET['id'];

$query = "SELECT * FROM review WHERE id='$id'";
$result = mysqli_query($connection, $query);

$row = mysqli_fetch_assoc($result);


if (isset($_POST['update'])) {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $event_type = $_POST['event_type'];
    $description = $_POST['description'];
    

    $image = ''; 

    if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
        $upload_dir = 'uploads/'; 
        $image_name = basename($_FILES['image']['name']);
        $target_path = $upload_dir . $image_name;

        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_path)) {
            $image_path = $target_path;
        } else {
            echo 'Image upload failed.';
            exit;
        }
    }
    $query = "UPDATE review SET title='$title', event_type='$event_type', description='$description'";

    if ($image_path !== '') {

        $query .= ", image='$image_path'";
    }

    $query= " WHERE id='$id'";

    if (mysqli_query($connection, $query)) {
        echo "Data Updated Successfully";
        header("location:blogs_events.php");
        exit;
    } else {
        echo 'Error updating data: ' . mysqli_error($connection);
    }
}

mysqli_close($connection);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Blogs & Events</title>
    <link rel="stylesheet" type="text/css" href="https://cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="assests/css/blogs.css">

    <script>
        function displayImage(input) {
            var reader = new FileReader();

            reader.onload = function (e) {
                document.getElementById('image').src = e.target.result;
            };

            reader.readAsDataURL(input.files[0]);
        }
    </script>
    
</head>

<body>

<?php

include("includes/header.php");
include("includes/sidebar.php");
include("includes/topbar.php");

?>

<div class="container">
    <div class="row">
        <div class="col-lg-8 pl-3 pb-3 box-shadow mt-4">
            <form action="" method="post" enctype="multipart/form-data">
                <h4 class="h4 mt-4 pb-2" style="border-bottom: 1px solid #dee2e6!important;">Edit Article
                    <a href="blogs_events.php" class="btn btn-sm btn-danger float-right" style="font-size: 12px;"><i class="mdi mdi-close-circle mr-2"></i> Cancel</a>
                    <button type="submit" name="update" value="Update Details" class="btn btn-sm btn-success float-right mr-2" style="font-size: 12px;"><i class="mdi mdi-account-plus mr-2"></i> Edit article</button>
                </h4>
                <div class="form-group">
                        
                        <label for="event_type">Event Type:</label>

                        <select class="custom-select form-control" id="event_type" name="event_type">
                            <option value="" > Select Event</option>

                            <option value="Wedding" 

                            <?php  

                            if($row['event_type'] == 'Wedding')
                            {

                            echo "selected";

                            }

                            ?>
                            >Wedding</option> 

                            <option value="Birthday" 

                            <?php  

                            if($row['event_type'] == 'Birthday')
                            {

                            echo "selected";

                            }

                            ?>
                            >Birthday</option>

                            <option value="Corporate Event" 

                            <?php  

                            if($row['event_type'] == 'Corporate Event')
                            {

                            echo "selected";

                            }

                            ?>
                            >Corporate Event</option>
                            
                        </select>
                    </div>

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" class="form-control" value="<?php echo $row['title'] ?>" id="title" placeholder="Enter title">
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea name="description" id="description" cols="30" rows="10" class="form-control" placeholder="Enter description and vendor of this wedding"><?php echo $row['description'] ?></textarea>
                </div>

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label>Choose Image: </label>
                        <input type="file" name="image" >
                        <!-- <img id="image" src=" "  alt=""> -->
                    </div>
                </div>

              
                <input
                 type="hidden" name="id" value="<?php echo $row['id']; ?>">
            </form>
        </div>
        <div class="col-lg-3 mt-4">
        <label>Image Preview: </label>
            <img id="image" src=" <?php echo $row['image']; ?>" width="300" height="350" alt="">
        </div>
    </div>
</div>

<?php
include("includes/footer.php");
?>

</body>
</html>




