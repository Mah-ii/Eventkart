<?php
include '../connection/config.php';
session_start();

$loginEmail = $_POST['loginEmail'];
$loginpass = $_POST['loginpass'];


$sql = "SELECT * FROM `users` WHERE user_email='$loginEmail' AND pass='$loginpass'";
$result = mysqli_query($connection, $sql);

if (!$result) {
    echo "Error: " . mysqli_error($connection);
   
} else {
    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $_SESSION['login'] = true;
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'] = $row['user_name'];
        $_SESSION['email'] = $row['user_email'];
        $_SESSION['phone'] = $row['user_number'];

        if (isset($_SESSION['redirect_url'])) {
            $redirect_url = $_SESSION['redirect_url'];
            unset($_SESSION['redirect_url']); 
            header("Location: $redirect_url");
        } else {
            header("Location: ../index.php");
        }
        exit(); 
    } else {
    
        header("Location: ../user/login.php?error=invalid_credentials");
        exit(); 
    }
}
?>