<?php
include 'config/dbconn.php';

include "includes/links.php";

adminLogin();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
    <link rel="stylesheet" href="assests/css/bootstrap.css">
    <link rel="stylesheet" href="assests/css/main.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css' />
</head>

<body>




    <?php

    include("includes/header.php");
    include("includes/sidebar.php");
    include("includes/topbar.php");




    ?>


    <!-- main content start -->
    <main class="bg-secondary bg-opacity-25 min-vh-100">

        <div class="container-fluid p-3 p-md-4">

            <div class="d-flex flex-column flex-md-row justify-content-between align-items-center">
                <div class="fs-4 text-secondary fw-bolder">Dashboard</div>

            </div>
            <hr>
            <div class="row g-4">

                <div class="col-lg-3 col-md-6">
                    <a href="#" class="text-decoration-none">
                        <div class="card bg-primary bg-gradient shadow-sm custom-card">
                            <div
                                class="card-body p-3 pb-2 px-3 d-flex flex-row justify-content-between align-items-center">
                                <div>
                                    <h1><i class="fas fa-cart-shopping fa-2x text-white-50"></i></h1>
                                </div>
                                <div class="text-center">
                                    <?php
                                    $dash_booking_query = "SELECT * FROM booking";
                                    $dash_booking_query_run = mysqli_query($connection, $dash_booking_query);

                                    if ($booking_total = mysqli_num_rows($dash_booking_query_run)) {
                                        echo "<h2 class='display-4 fw-bold text-white'>$booking_total</h2>";
                                    } else {
                                        echo "<h2 class='display-4 fw-bold text-white'> No Data</h2>";
                                    }
                                    ?>
                                    <!-- <h2 class="display-4 fw-bold text-white">1</h2> -->
                                    <h4 class="text-white-50">Bookings</h4>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <a href="#" class="text-decoration-none">
                        <div class="card bg-primary bg-success shadow-sm custom-card">
                            <div
                                class="card-body p-3 pb-2 px-3 d-flex flex-row justify-content-between align-items-center">
                                <div>
                                    <h1><i class="fa-solid fa-handshake fa-2x text-white-50"></i></h1>
                                </div>
                                <div class="text-center">
                                    <?php
                                    $partners_query = "SELECT * FROM partners";
                                    $partners_query_run = mysqli_query($connection, $partners_query);

                                    if ($partners_total = mysqli_num_rows($partners_query_run)) {
                                        echo "<h2 class='display-4 fw-bold text-white'>$partners_total</h2>";
                                    } else {
                                        echo "<h2 class='display-4 fw-bold text-white'> No Data</h2>";
                                    }
                                    ?>
                                    <!-- <h2 class="display-4 fw-bold text-white">4</h2> -->
                                    <h4 class="text-white-50">Partners</h4>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <a href="#" class="text-decoration-none">
                        <div class="card bg-danger bg-gradient shadow-sm custom-card">
                            <div
                                class="card-body p-3 pb-2 px-3 d-flex flex-row justify-content-between align-items-center">
                                <div>
                                    <h1><i class="fas fa-users fa-2x text-white-50"></i></h1>
                                </div>
                                <div class="text-center">
                                    <?php
                                    $user_query = "SELECT * FROM users";
                                    $user_query_run = mysqli_query($connection, $user_query);

                                    if ($user_total = mysqli_num_rows($user_query_run)) {
                                        echo "<h2 class='display-4 fw-bold text-white'>$user_total</h2>";
                                    } else {
                                        echo "<h2 class='display-4 fw-bold text-white'> No Data</h2>";
                                    }
                                    ?>
                                    <!-- <h2 class="display-4 fw-bold text-white">5</h2> -->
                                    <h4 class="text-white-50">Users</h4>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <a href="#" class="text-decoration-none">

                        <div class="card bg-warning bg-gradient shadow-sm custom-card">
                            <div
                                class="card-body p-3 pb-2 px-3 d-flex flex-row justify-content-between align-items-center">
                                <div>
                                    <h1><i class="fa-solid fa-comment fa-2x text-white-50"></i></h1>
                                </div>
                                <div class="text-center">
                                    <?php
                                    $review_query = "SELECT * FROM rev";
                                    $review_query_run = mysqli_query($connection, $review_query);

                                    if ($review_total = mysqli_num_rows($review_query_run)) {
                                        echo "<h2 class='display-4 fw-bold text-white'>$review_total</h2>";
                                    } else {
                                        echo "<h2 class='display-4 fw-bold text-white'> No Data</h2>";
                                    }
                                    ?>
                                    <!-- <h2 class="display-4 fw-bold text-white">8</h2> -->
                                    <h4 class="text-white-50">Reviews</h4>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-lg-3 col-md-6">
                    <a href="#" class="text-decoration-none">
                        <div class="card bg-info bg-gradient shadow-sm custom-card">
                            <div
                                class="card-body p-3 pb-2 px-3 d-flex flex-row justify-content-between align-items-center">
                                <div>
                                    <h1><i class="fa-solid fa-blog fa-2x text-white-50"></i></h1>
                                </div>
                                <div class="text-center">
                                <?php
                                    $blog_query = "SELECT * FROM review";
                                    $blog_query_run = mysqli_query($connection, $blog_query);

                                    if ($blog_total = mysqli_num_rows($blog_query_run)) {
                                        echo "<h2 class='display-4 fw-bold text-white'>$blog_total</h2>";
                                    } else {
                                        echo "<h2 class='display-4 fw-bold text-white'> No Data</h2>";
                                    }
                                    ?>
                                    <!-- <h2 class="display-4 fw-bold text-white">8</h2> -->
                                    <h4 class="text-white-50">Blogs</h4>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <!-- <div class="col-lg-3 col-md-6">
                    <a href="#" class="text-decoration-none">
                        <div class="card bg-dark bg-gradient shadow-sm custom-card">
                            <div
                                class="card-body p-3 pb-2 px-3 d-flex flex-row justify-content-between align-items-center">
                                <div>
                                    <h1><i class="fas fa-people-line fa-2x text-white-50"></i></h1>
                                </div>
                                <div class="text-center">
                                    <h2 class="display-4 fw-bold text-white">8</h2>
                                    <h4 class="text-white-50">Visitors</h4>
                                </div>
                            </div>
                        </div>
                    </a>
                </div> -->



            </div>
        </div>
    </main>
    <!-- main content end -->



    <?php

    include("includes/footer.php");

    ?>


</body>

</html>