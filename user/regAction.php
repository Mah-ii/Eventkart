<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
session_start();
include '../connection/config.php';

$reguname = $_REQUEST["reguname"];
$regEmail = $_REQUEST["regEmail"];
$regNum = $_REQUEST["regNum"];
$regpass = $_REQUEST["regpass"];
$regcpass = $_REQUEST["regcpass"];

$name_pattern = "/[a-zA-Z\s]/";
$email_pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
$phone_pattern = "/(\+88)?-?01[3-9]\d{8}/";
$password_pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/";
$con_password_pattern = "/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d).{8,}$/";



$dup_email = mysqli_query($connection, "SELECT * FROM users WHERE user_email='$regEmail'");

if (mysqli_num_rows($dup_email) > 0) {
    echo "<script>alert('User with this email already exists')</script>";
    echo "<script>location.href='register.php'</script>";
} elseif (!preg_match($name_pattern, $reguname)) {
    echo "<script>alert('Invalid username')</script>";
    echo "<script>location.href='register.php'</script>";
} elseif (!preg_match($email_pattern, $regEmail)) {
    echo "<script>alert('Invalid email')</script>";
    echo "<script>location.href='register.php'</script>";
} elseif (!preg_match($phone_pattern, $regNum)) {
    echo "<script>alert('Invalid phone number')</script>";
    echo "<script>location.href='register.php'</script>";
} else {

    $insert2 = "INSERT INTO users SET user_name='$reguname', user_email='$regEmail', user_number='$regNum', pass='$regpass', conpass='$regcpass'";
    $query = mysqli_query($connection, $insert2);

    if (!$query) {
        echo "<script>alert('Error: Registration failed')</script>";
        echo "<script>location.href='register.php'</script>";
    } else {
        echo "<script>alert('SUCCESSFULLY registered')</script>";
        if (isset($_REQUEST['login'])) {
            $dup_email1 = mysqli_query($connection, "SELECT * FROM users WHERE user_email='$regEmail'");
            $res = mysqli_num_rows($dup_email1);
            if ($res > 0) {
                $data = mysqli_fetch_array($dup_email1);
                $name = $data['user_name'];
                $_SESSION['name'] = $name;
                $otp = rand(10000, 99999); //Generate OTP

                $message = '<div>
                     <p><b>Hello!</b></p>
                     <p>You are receiving this email because we received an OTP request for your account.</p>
                     <br>
                     <p>Your OTP is: <b>' . $otp . '</b></p>
                     <br>
                     <p>If you did not request OTP, no further action is required.</p>
                </div>';

                $email = $regEmail;
                $mail = new PHPMailer(true);
                $mail->isSMTP();
                $mail->SMTPDebug = SMTP::DEBUG_SERVER; 
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = 'tls';
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 587;
                $mail->Username = 'fabihaakter1999@gmail.com'; 
                $mail->Password = 'xflirmrnshynywvl';
                $mail->setFrom('fabihaakter1999@gmail.com', 'EventCart');
                $mail->addAddress($email);
                $mail->Subject = 'OTP';
                $mail->isHTML(true);
                $mail->Body = $message;

                try {
                    $mail->send();
                    $insert_query = mysqli_query($connection, "INSERT INTO otp_check SET otp='$otp', is_expired='0'");
                    header('location: otpverify.php');
                } catch (Exception $e) {
                    echo "<script>alert('Message could not be sent. Mailer Error: {$mail->ErrorInfo}')</script>";
                }
            } else {
                echo "<script>alert('Invalid Email')</script>";
            }
        }
    }
}
?>