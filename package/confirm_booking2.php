<?php
session_start();
include '../connection/config.php';

$id = $_GET['id'];
$query = "SELECT * FROM wedding_service WHERE id = '$id'";
$result = mysqli_query($connection, $query);
$row = mysqli_fetch_assoc($result);

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Confirm Booking</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <style>
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            box-sizing: border-box;
            box-shadow: 5px 0px 5px 0;
            margin-top: 5rem;
            background-color: beige;
        }

        .row {
            background-color: beige;
        }
    </style>
</head>

<body>

    <div class="container">

        <div class="row">
            <div class="col-md-8 p-0" style="margin-bottom: 20px;">

                <h5 class="h5 text-uppercase mb-5 pt-5 pl-3 pr-3">
                    <span>Package Name:
                        <?php echo $row['service_type'] ?>
                    </span><br><br>

                    <span>Price: BDT
                        <?php echo $row['price'] ?>
                    </span>
                </h5>


                <ul class="list-group">
                    <button type="submit" name="pay_proceed"
                        class="btn btn-success btn-sm text-uppercase font-weight-bold" style="margin-top: -5px;">
                        <a href="checkout.php?price=<?php echo $row['price']; ?>"
                            class="btn btn-success btn-sm text-uppercase font-weight-bold">Pay and Proceed</a>
                    </button>
                </ul>
            </div>
        </div>
    </div>

</body>

</html>