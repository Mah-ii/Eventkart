<?php
session_start();
include '../connection/config.php';

$id = $_GET['id'];
$query = "SELECT * FROM wedding_service WHERE id = '$id'";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);


$userLoggedIn = isset($_SESSION['login']) && $_SESSION['login'] === true;

$canBookPackage = $userLoggedIn;

$_SESSION['redirect_url'] = $_SERVER['REQUEST_URI'];

$minDate = date('Y-m-d');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/autoload.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';


if ($userLoggedIn && isset($_POST['register'])) {

    $user_name = $_POST['user_name'];
    $user_phone = $_POST['user_phone'];
    $user_email = $_POST['user_email'];
    $venue = $_POST['venue'];
    $date = $_POST['date'];
    $event_type = $row['service_type'];


    $dupQuery = "SELECT * FROM booking WHERE date = '$date' AND venue = '$venue'";
    $dupResult = mysqli_query($connection, $dupQuery);

    if (mysqli_num_rows($dupResult) > 0) {
        echo "<script>alert('This date and venue are already booked. Please choose another date or venue.')</script>";
    } else {

        $event_type = $row['service_type'];

        $insertQuery = "INSERT INTO booking (user_name, user_phone, user_email, venue, date, event_type) 
                        VALUES ('$user_name', '$user_phone', '$user_email', '$venue', '$date', '$event_type')";
        $insertResult = mysqli_query($connection, $insertQuery);

        if ($insertResult) {
            echo "<script>alert('SUCCESSFULLY registered')</script>";
            echo "<script> location.href = 'confirm_booking2.php?id=$id'</script>";

            $mail = new PHPMailer(true);

            try {
                $mail->isSMTP();
                $mail->Host = 'smtp.gmail.com';
                $mail->SMTPAuth = true;
                $mail->Username = 'eventkart2024@gmail.com';
                $mail->Password = 'kcwsvjboibephcgc';
                $mail->SMTPSecure = 'ssl';
                $mail->Port = 465;
                $mail->setFrom('eventkart2024@gmail.com');
                $mail->addAddress($_POST["user_email"]);

                $mail->isHTML(true);

                $mail->Subject = "Your Booking is Confirmed!";
                $mail->Body = "Dear Customer, <br/>
                                Thank you for your booking with us! We've received your request
                                and have successfully reserved your booking. Here's a quick confirmation
                                of your booking.<br/>
                                Venue: $venue. <br/>
                                Date: $date. <br/>
                                If you have any questions or need to make changes to your booking, 
                                please reach out. We're here to help!<br/>
                                Thank you for choosing our service. We hope you have a great experience.";
                $mail->send();
                echo "
                <script>
                alert('Sent Successfully');
                </script>
                ";
                echo "<script>location.href='./package/wedding.php'</script>";
            } catch (Exception $e) {
                echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                echo "
                <script>
                alert('Message could not be sent.');
                </script>
                ";

            }

            exit;
        } else {
            echo "<script>alert('Error: " . mysqli_error($connection) . "')</script>";
        }
    }
} elseif (!$userLoggedIn && isset($_POST['register'])) {
    header("Location: ../user/login.php");
    exit;
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Birthday Packages</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        body {
            margin-top: 6%;
        }

        .btn.btn-sm.btn-light.active:hover {
            background: white;
        }

        .list-group-item:first-child {
            border-top-left-radius: 0rem;
            border-top-right-radius: 0rem;
        }

        .list-group-item.active {
            border-color: #00125100;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="row">
            <div class="col-md-8 p-0" style="margin-bottom: 20px;">
                <div class="float-left bg-white">
                    <h5 class="h5 text-uppercase mb-5 pt-3 pl-3 pr-3">
                        <span class="float-left text-capitalize">
                            <?php echo $row['service_type'] ?>
                        </span>
                        <span class="float-right text-capitalize">Price:
                            <?php echo $row['price'] ?>
                        </span>
                    </h5>
                    <img src="../admin-panel/<?php echo $row['image'] ?>" style="width:100%; max-height:500px; " alt="">

                    <ul class="list-group">
                        <li
                            class="list-group-item list-group-item-action bg-danger flex-column align-items-start active">
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1 pt-2 pb-2">FUNCTIONS AND SERVICES</h5>
                            </div>
                        </li>

                        <?php

                        $service_type = $row['service_type'];
                        $features_query = "SELECT * FROM features_list WHERE service_type = '$service_type'";
                        $features_result = mysqli_query($connection, $features_query);
                        ?>

                        <?php while ($feature = mysqli_fetch_assoc($features_result)): ?>
                            <li class="list-group-item list-group-item-action flex-column align-items-start">
                                <div class="d-flex w-100 justify-content-between">
                                    <h5 class="mb-1"><i class="mdi mdi-check mr-3"></i>
                                        <?php echo $feature['title']; ?>
                                    </h5>
                                </div>
                                <p class="mb-1 ml-3 text-capitalize">
                                    <?php echo $feature['description']; ?>
                                </p>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                </div>
            </div>

            <?php if ($canBookPackage): ?>

                <div class="col-md-4" style="margin-bottom: 20px;">
                    <form action="" method="post" style="background: white;padding: 20px;">
                        <h5 class="h5 text-center mb-3 m-0">Wedding Planning Starts Here</h5>
                        <div class="form-group">
                            <input type="text" class="form-control" name="user_name" placeholder="Name" id="user_name"
                                Required>
                        </div>

                        <div class="form-group">
                            <input type="number" id="user_phone" class="form-control" name="user_phone"
                                placeholder="Phone number" Required>
                        </div>

                        <div class="form-group">
                            <input type="email" class="form-control" name="user_email" id="user_email"
                                placeholder="youremail@gmail.com" Required>
                        </div>

                        <div class="form-group">
                            <select class="custom-select form-control" id="venue" name="venue" Required>
                                <option value="">Select Venue</option>
                                <option value="Khan Palace">Khan Palace</option>
                                <option value="AmanUllah">AmanUllah Convention Centre</option>
                                <option value="Kushiara">Kushiara Convention Centre</option>

                            </select>
                        </div>

                        <div class="form-row">
                            <div class="input-group col-md-12">
                                <input type="date" class="form-control" name="date" data-provide="datepicker" id="date"
                                    placeholder="Birthday Date" min="<?php echo $minDate; ?>" Required>
                            </div>
                        </div>

                        <div class="text-center mt-3">
                            <input type="hidden" name="booking_id" value="<?php echo $row['id'] ?>">
                            <button type="submit" name="register"
                                class="btn btn-success btn-sm text-uppercase font-weight-bold"
                                style="margin-top: -5px;">Book Now</button>
                        </div>
                    </form>
                </div>
            <?php else: ?>

                <div class="col-md-4" style="margin-bottom: 20px;">
                    <div class="alert alert-danger" role="alert">
                        Please <a href="../user/login.php?redirect=<?php echo urlencode($_SERVER['REQUEST_URI']); ?>"
                            class="alert-link">log in</a> to book this service.
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

</body>

</html>

<?php mysqli_close($connection); ?>