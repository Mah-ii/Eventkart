<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>birthday</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/birthday.css">
    <link rel="stylesheet" href="../css/foter.css">


    <style>
        :root {

            /**colors*/
            --homecolor1: #fac031;
            --homecolor2: #d18b13;
            --homecolor3: #fac031;
            --white: #fff;
            --foot-btn-bg: rgb(3, 0, 0);
            --foot-btn-hover-bg: rgb(109, 55, 55);
            --black: rgb(3, 0, 0);
            --foot-bg: #fac031;

            /* font size */
            --foot-txt-size: 1.6rem;
            --foot-link-size: 1.9rem;
            --foot-list-tsize: 2.3rem;
            --copy-size: 1.8rem;
            --social-link-size: 2.8rem;
            --logo-size: 5rem;

        }

        .user-box a {
            padding: 8px 16px;
            background-color: #fac031;
            border: none;
            color: black;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 14px;
            margin-right: 2px;
            border-radius: 5px;
            cursor: pointer;
        }

        .user-box a:hover {
            background-color: var(--white);
        }

        .sub-menu-wrap .sub-menu {
            background: var(--homecolor2);
            padding: 20px;
            margin: 10px;
        }

        .review {
            width: 100%;
            /* height: 80vh; */
            padding: 70px 0;
        }

        .review h1 {
            font-size: 55px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .review h1 span {
            margin-left: 15px;
            color: #fac031;
            font-family: mv boli;
        }

        .reviews-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            flex-wrap: wrap;
        }


        .reviews {
            width: 30%;
            height: 35%;
            border: 1px solid #ccc;
            padding: 10px;
            margin: 10px;
            margin-top: 3rem;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.5);
            border-radius: 8px;

        }


        .head-review {
            display: flex;
            justify-content: center;
            align-items: center;
            transition: 0.3s;

        }

        .head-review:hover {
            transform: translateY(-50px);
        }

        .head-review img {
            width: 25rem;
            height: 25rem;
            border: black solid 3px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, .25);
            margin-bottom: 2rem;

        }

        .card-header {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .name-review {
            font-weight: bold;
            font-family: cursive;
            color: black;
            font-size: 2.5rem;
        }

        .place-review {
            font-weight: bold;
            font-style: italic;
            color: purple;
            font-size: 1.5rem;
            margin-top: 0.4rem;
            margin-bottom: 0.4rem;
        }

        .body-review {
            background-color: #fac031;
            padding: 2.5rem;
            border-radius: 12px;


        }

        .desc-review {
            height: 35vh;
            line-height: 22px;
            transition: 0.3s;
            font-size: 15px;
            color: black;
        }


        @media (max-width: 767px) {
            .reviews {
                width: calc(100% - 20px);

            }
        }
    </style>


</head>

<body>



    <?php
    include '..\connection\config.php';

    $query = "SELECT * FROM birthday_service";
    $result = mysqli_query($connection, $query);

    ?>

    <?php include "../connection/navuser.php"; ?>





    <div class="main">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-sm-12 ">
                    <div class="men_text">
                        <h1>Where Yours<span>Dreams</span><br>Take Off</h1>
                    </div>
                    <div class="main_text">
                        <p>
                            "Crafting Unforgettable Moments: Where Your Dreams Become Experiences.
                            Welcome to EVENTCART, where events transcend the ordinary. Our passion lies in sculpting
                            moments that transcend the expected, weaving dreams into tangible, awe-inspiring realities.
                            From intimate affairs to grand celebrations, we blend innovation and precision, creating
                            experiences that mesmerize and memories that linger.
                            Experience the extraordinary, crafted exclusively for you."
                        </p>
                        <div class="main_btn">
                            <a href="" class="book_btn">Get a book<i class="fa-solid fa-angle-right"></i></a>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-sm-12 ">
                    <div class="main_image">
                        <img src="../image/birth1.jpg" alt="Event Image">
                    </div>
                </div>
            </div>
        </div>

    </div>


    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-lg-12">
                <div class="title1">
                    <h1 style="color:black; margin-top: 20rem; margin-bottom:5rem;">Our<span>Birthday</span>Package</h1>
                </div>
            </div>
            <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <div class="col-lg-4 col-md-6">
                    <div class="pricing" style="margin-bottom: 20px;">
                        <ul class="list-group list-unstyled">
                            <li class="list-group-item text-center text-uppercase">
                                <?php echo $row['service_type'] ?>
                            </li>
                            <li>
                                <img src="../admin-panel/<?php echo $row['image'] ?>" class="img-fluid package-image"
                                    alt="">
                            </li>
                            <li class="list-group-item text-center"><b>THIS PACKAGE INCLUDES:</b></li>
                            <?php

                            $service_type = $row['service_type'];
                            $features_query = "SELECT * FROM features_list WHERE service_type = '$service_type'";
                            $features_result = mysqli_query($connection, $features_query);

                            while ($feature = mysqli_fetch_assoc($features_result)) {
                                echo "<li class='list-group-item'>" . $feature['title'] . "</li>";
                            }
                            ?>
                            <li class="list-group-item font-weight-bold">Price: BDT
                                <?php echo $row['price'] ?>
                            </li>
                            <li class="list-group-item font-weight-bold">
                                <a href="birthday_package_details.php?id=<?php echo $row['id'] ?>"
                                    class="btn abtn-custom">View Details</a>
                            </li>
                        </ul>
                    </div>
                </div>
            <?php endwhile; ?>
        </div>
    </div>



    <section class="invite" id="invite">
        <div class="title1">
            <h1>Card<span>Design</span></h1>
            <p>Choose the best card Design.</p>
        </div>
        <div class="invitation-row">
            <?php
            $sql = "SELECT `id`, `name`, `title`, `image`, `category` FROM `gallery` WHERE category='Birth_invitation' ORDER BY id DESC LIMIT 5 ";

            $result = mysqli_query($connection, $sql) or die("Query Failed. : Recent Post");
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div class="invitation-box">
                        <img src="../admin-panel/<?php echo $row['image']; ?>" style="height:150px ; width: 150px;" alt="">
                    </div>
                <?php }
            } ?>
        </div>
    </section>



    <div class="container">
        <section class="venue" id="venue">
            <div class="title1">
                <h1><span>V</span>enues</h1>
            </div>
            <div class="venue-list">
                <?php
                $limit = 6;



                $sql = "SELECT `id`, `venue_name`, `place`, `category`, `image`, `location` FROM `venue` WHERE category='Birthday' ORDER BY id DESC LIMIT 6 ";
                $result = mysqli_query($connection, $sql) or die("Query Failed. : Recent Post");
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {

                        ?>



                        <div class="venue-box">
                            <img src="../admin-panel/<?php echo $row['image']; ?>" width="524" height="668" alt="img">
                            <div class="venue-info">
                                <h2>
                                    <?php echo $row['place']; ?>
                                </h2>
                                <p>
                                    <?php echo $row['venue_name']; ?>
                                </p>
                                <!-- <a href="https://www.facebook.com/meatuprestaurant"><button class="btn">More Info</button></a> -->
                                <a href="<?php echo $row['location']; ?>"><button class="btn">More Info</button></a>

                            </div>
                        </div>
                    <?php }
                } ?>

            </div>
        </section>

    </div>



    <div class="review">
        <div class="card-header">
            <h1>Customer<span>Review</span></h1>
        </div>
        <div class="reviews-container">
            <?php
            $category = "Birthday";

            $query = "SELECT * FROM rev WHERE category = '$category' LIMIT 3";
            $result = mysqli_query($connection, $query);


            if (mysqli_num_rows($result) > 0) {

                while ($row = mysqli_fetch_assoc($result)) {

                    echo '<div class="reviews">';
                    echo '<div class="head-review">';
                    echo '<img src="' . $row['image'] . '" width="250px">';
                    echo '</div>';
                    echo '<div class="body-review">';
                    echo '<div class="name-review">' . $row['user_name'] . '</div>';
                    echo '<div class="place-review">' . $row['user_email'] . '</div>';

                    echo '<div class="desc-review">' . $row['review'] . '</div>';
                    echo '</div>';
                    echo '</div>';

                }
            } else {

                echo 'No reviews found for the category: ' . $category;
            }

            mysqli_close($connection);
            ?>
        </div>
    </div>

    <?php include "../connection/footer.php"; ?>

    <script src="../script.js"></script>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>

</body>

</html>