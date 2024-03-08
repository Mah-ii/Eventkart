<?php
include "../connection/config.php";
session_start();

if (isset($_SESSION['login']) && $_SESSION['login'] === true) {

    $userId = $_SESSION['id'];
    $userName = $_SESSION['name'];
    $userEmail = $_SESSION['email'];
    $userPhone = $_SESSION['phone'];

} else {

    header("Location: login.php");
    exit();
}


if (isset($_POST['submit'])) {
    $newName = $_POST['name'];
    $newEmail = $_POST['email'];
    $newPhone = $_POST['phone'];


    $sql = "UPDATE users SET user_name='$newName', user_email='$newEmail', user_number='$newPhone' WHERE id='$userId'";

    if (mysqli_query($connection, $sql)) {
        echo "User information updated successfully.";

        $_SESSION['name'] = $newName;
        $_SESSION['email'] = $newEmail;
        $_SESSION['phone'] = $newPhone;

        header("Location: profile.php");
        exit();
    } else {
        echo "Error updating user information: " . mysqli_error($connection);
    }
}

mysqli_close($connection);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Profile</title>

    <style>
        .editProfile {
            display: flex;
            justify-content: center;
        }

        h2 {
            display: flex;
            justify-content: center;
        }

        form {
            background-color: beige;
            padding: 5rem;
            margin: 5rem;
        }

        .btn {
            margin-top: 15px;
            background-color: brown;
            border-radius: 5px;
            color: aliceblue;
            display: flex;
            justify-content: center;
            align-items: center;


        }

        .editProfile label {
            font-size: 18px;

        }

        .editProfile input {
            margin-bottom: 10px;
            font-size: 16px;

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
            <input type="submit" name="submit" value="Submit" class="btn">
        </form>
    </div>
</body>

</html>