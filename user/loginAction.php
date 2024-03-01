<?php
include '../connection/config.php';
session_start();

$loginEmail = $_POST['loginEmail'];
$loginpass = $_POST['loginpass'];

// Protect against SQL injection
// $loginEmail = mysqli_real_escape_string($connection, $loginEmail);
// $loginpass = mysqli_real_escape_string($connection, $loginpass);

$sql = "SELECT * FROM `users` WHERE user_email='$loginEmail' AND pass='$loginpass'";
$result = mysqli_query($connection, $sql);

if (!$result) {
    echo "Error: " . mysqli_error($connection);
    // Handle the error accordingly, such as displaying a user-friendly message
} else {
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['login'] = true;
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['user_name'];
        $_SESSION['email'] = $row['user_email'];
        $_SESSION['phone'] = $row['user_number'];
        
        // Check if the user attempted login from birthday_package_details.php
        if (isset($_SESSION['redirect_url'])) {
            $redirect_url = $_SESSION['redirect_url'];
            unset($_SESSION['redirect_url']); // Clear the redirect URL session variable
            header("Location: $redirect_url");
        } else {
            header("Location: ../HomePage.php");
        }
        exit(); // Ensure no further code execution after redirection
    } else {
        // Redirect back to the login page with an error message
        header("Location: ../user/login.php?error=invalid_credentials");
        exit(); // Ensure no further code execution after redirection
    }
}
?>
