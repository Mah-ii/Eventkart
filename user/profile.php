<?php
include "../connection/config.php";
session_start();

// Check if the user is logged in
if (isset($_SESSION['login']) && $_SESSION['login'] === true) {
    // Fetch user information from session variables
    $userId = $_SESSION['id'];
    $userName = $_SESSION['name'];
    $userEmail = $_SESSION['email'];
    $userPhone = $_SESSION['phone'];
} else {
    // Redirect to login page if user is not logged in
    header("Location: login.php");
    exit(); // Ensure no further code execution after redirection
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <style>
        .portion {
            border-radius: 5px;
            box-sizing: border-box;
            box-shadow: 5px 0 5px 10px;
            width: 800px;
            height: 500px;
            margin: 4.5rem auto;
            background-color: beige;
            display: flex;
            align-items: center;
            justify-content: space-around;
            padding: 20px;
        }

        .profile-picture {
            width: 10px;
            /* Limit the width of the profile picture */
            height: 20px;
            border-radius: 50%;
            display: block;
            /* Ensure it behaves as a block element */
            margin: 0 auto;
            /* Center the image horizontally within its parent */
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .profile-picture img {
            width: 15rem;
            /* Limit the width of the profile picture */
            height: 20rem;


        }

        .user-info {
            margin-left: 20px;
        }

        .user-info p {
            margin: 5px 0;
        }

        .edit-button {
            background-color: aqua;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            border-radius: 5px;
        }
    </style>
</head>

<body>
    <section class="portion">
        <div class="user-info">
            <h3>User Information</h3>
            <p><strong>Name:</strong>
                <?php echo isset($userName) ? $userName : ''; ?>
            </p>
            <p><strong>Email:</strong>
                <?php echo isset($userEmail) ? $userEmail : ''; ?>
            </p>
            <p><strong>Phone:</strong>
                <?php echo isset($userPhone) ? $userPhone : ''; ?>
            </p>
       
            <button class="edit-button"><a href="edit_profile.php?id=<?php echo isset($userId) ? $userId : ''; ?>">
                    Edit</a></button>
        </div>
    </section>

</body>

</html>