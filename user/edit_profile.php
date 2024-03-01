<?php
include "../connection/config.php";
session_start();

// Check if the user is logged in
if(isset($_SESSION['login']) && $_SESSION['login'] === true) {
    // Fetch user information from session variables
    $userId = $_SESSION['id'];
    $userName = $_SESSION['name'];
    $userEmail = $_SESSION['email'];
    $userPhone = $_SESSION['phone'];
    $userProfilePicture = isset($_SESSION['profilePicture']) ? $_SESSION['profilePicture'] : 'default.jpg'; // Get user's profile picture filename or use default image
} else {
    // Redirect to login page if user is not logged in
    header("Location: login.php");
    exit(); // Ensure no further code execution after redirection
}

// Update user information
if(isset($_POST['submit'])) {
    $newName = $_POST['name'];
    $newEmail = $_POST['email'];
    $newPhone = $_POST['phone'];
    
    // Handle profile picture upload
    if(!empty($_FILES['profilePicture']['name'])) {
        $targetDir = "../image1/";
        $targetFile = $targetDir . basename($_FILES["profilePicture"]["name"]);
        if(move_uploaded_file($_FILES["profilePicture"]["tmp_name"], $targetFile)) {
            $_SESSION['profilePicture'] = basename($_FILES["profilePicture"]["name"]);
            $userProfilePicture = $_SESSION['profilePicture'];
        } else {
            echo "Error uploading profile picture.";
        }
    }
    
    // Update user information in the database
    // Update user information in the database
    $sql = "UPDATE users SET user_name='$newName', user_email='$newEmail', user_number='$newPhone', picture='$userProfilePicture' WHERE id='$userId'";

    if(mysqli_query($connection, $sql)) {
        echo "User information updated successfully.";
        // Redirect to profile page
        header("Location: profile.php");
        exit(); // Ensure no further code execution after redirection
    } else {
        echo "Error updating user information: " . mysqli_error($connection);
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>

    <style>
        .editProfile{
           display: flex;
           justify-content: center;
           
           
        }

        h2{
            display: flex;
           justify-content: center;
        }

        label{
            padding: 1rem;
        }

        form{
            background-color: beige;
            padding: 5rem;
            margin: 5rem;
        }
        .profilePicture{
            height: 100px;
            width: 10px;
        }

    </style>
</head>
<body>
    <h2>Edit Profile</h2>
    <div class="editProfile">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" enctype="multipart/form-data">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" value="<?php echo $userName; ?>"><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" value="<?php echo $userEmail; ?>"><br>
        <label for="phone">Phone:</label><br>
        <input type="text" id="phone" name="phone" value="<?php echo $userPhone; ?>"><br>
        <label for="profilePicture">Profile Picture:</label><br>
        <input type="file" id="profilePicture" name="profilePicture"><br>
        <img src="../image1/<?php echo $userProfilePicture; ?>" alt=""><br><br>
        <input type="submit" name="submit" value="Submit">
    </form>
    </div>
</body>
</html>
