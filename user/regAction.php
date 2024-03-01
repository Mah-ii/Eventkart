<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require '../vendor/autoload.php';
session_start();
//include_once('connection.php');
include '../connection/config.php';

$reguname = $_REQUEST["reguname"];
$regEmail = $_REQUEST["regEmail"];
$regNum = $_REQUEST["regNum"];
$regpass = $_REQUEST["regpass"];
$regcpass = $_REQUEST["regcpass"];




$name_pattern = "/[a-zA-Z\s]/";
$email_pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
$phone_pattern = "/(\+88)?-?01[3-9]\d{8}/";
$password_pattern = "/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@!#$%&_+<>])).{6,20}/";
$con_password_pattern = "/((?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[@!#$%&_+<>])).{6,20}/";




//$insert = "INSERT INTO `users`(`user_name`, `user_email`, `user_number`, `pass`, 'conpass') VALUES ('$reguname','$regEmail','$regNum','$regpass','$regcpass')";
$insert2 = "INSERT INTO users set user_name='$reguname', user_email='$regEmail', user_number='$regNum', pass='$regpass', conpass='$regcpass'";


$query = mysqli_query($connection, $insert2);

$dup_email = mysqli_query($connection, "SELECT * FROM users WHERE user_email='$regEmail'");


if (!mysqli_num_rows($dup_email) > 0) {
    echo "<script>alert('usermail has already taken')</script>";
    echo "<script>location.href='register.php'</script>";
} elseif (!preg_match($name_pattern, $reguname)) {
    echo "<script>alert('invalid username!!')</script>";
    echo "<script>location.href='register.php'</script>";
} elseif (!preg_match($email_pattern, $regEmail)) {
    echo "<script>alert('invalid email!!')</script>";
    echo "<script>location.href='register.php'</script>";
} elseif (!preg_match($phone_pattern, $regNum)) {
    echo "<script>alert('invalid phone!!')</script>";
    echo "<script>location.href='register.php'</script>";
} elseif (!preg_match($password_pattern, $regpass)) {
    echo "<script>alert('invalid password!!')</script>";
    echo "<script>location.href='register.php'</script>";

} elseif (!preg_match($con_password_pattern, $regcpass)) {
    echo "<script>alert('invalid Confirm password!!')</script>";
    echo "<script>location.href='register.php'</script>";

} else {

    if (!$query) {
        echo "<script> alert('not inserted!!')</script>";
        echo "<script> location.href = 'register.php'</script>";

    } else {
        echo "<script> alert('SUCCESSFULLY registered')</script>";
        if (isset($_REQUEST['login'])) {
            //$regEmail = $_REQUEST['regEmail'];
            // $select_query = mysqli_query($connection, "select * from users where user_email='$regEmail'");
            // $res = mysqli_num_rows($select_query);
            $res = mysqli_num_rows($dup_email);
            if ($res > 0) {
                $data = mysqli_fetch_array($dup_email);
                $name = $data['user_name'];
                $_SESSION['name'] = $name;
                $otp = rand(10000, 99999); //Generate OTP
                // include_once("SMTP/class.phpmailer.php");
                // include_once("SMTP/class.smtp.php");
                $message = '<div>
             <p><b>Hello!</b></p>
             <p>You are recieving this email because we recieved a OTP request for your account.</p>
             <br>
             <p>Your OTP is: <b>' . $otp . '</b></p>
             <br>
             <p>If you did not request OTP, no further action is required.</p>
            </div>';
                $email = $regEmail;
                $mail = new PHPMailer;
                $mail->IsSMTP();
                $mail->SMTPAuth = true;
                $mail->SMTPSecure = "tls";
                $mail->Host = 'smtp.gmail.com';
                $mail->Port = 587;
                $mail->Username = "fabihaakter1999@gmail.com"; // Enter your username
                $mail->Password = "xflirmrnshynywvl"; // Enter Password
                $mail->FromName = "EventCart";
                $mail->AddAddress($email);
                $mail->Subject = "OTP";
                $mail->isHTML(TRUE);
                $mail->Body = $message;
                if ($mail->send()) {
                    $insert_query = mysqli_query($connection, "insert into otp_check set otp='$otp', is_expired='0'");
                    header('location:otpverify.php');
                } else {
                    $msg = "Email not delivered";
                }
            } else {
                $msg = "Invalid Email";
            }
        }
        // echo "<script> location.href = 'login.php'</script>";

    }
}
?>