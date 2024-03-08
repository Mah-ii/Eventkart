<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wedding Demo</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="wed1.css">


    <style>
        :root {

           
            --homecolor1: rgb(150, 81, 81);
            --homecolor2: rgb(225, 135, 125);
            --homecolor3: rgb(170, 112, 105);
            --white: #fff;
        }

        .user-box a {
            padding: 8px 16px;
            background-color: var(--homecolor1);
            border: none;
            color: black;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 22px;
            margin-right: 2px;
            border-radius: 5px;
            cursor: pointer;
        }

        .user-box a:hover {
            background-color: var(--white);
        }


        .review {
            width: 100%;
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
            color: rgb(77, 35, 30);
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
            width: 15rem;
            height: 15rem;
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
            color: #fff;
            font-size: 1.2rem;
        }

        .place-review {
            font-weight: bold;
            font-style: italic;
            color: #fff;
            font-size: 0.8rem;
        }

        .body-review {
            background-color: rgb(77, 35, 30);
            padding: 2.5rem;
            border-radius: 12px;
           

        }

        .desc-review {
            height: 35vh;
            line-height: 22px;
            transition: 0.3s;
            font-size: 15px;
            color: whitesmoke;
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


    $query = "SELECT * FROM wedding_service";
    $result = mysqli_query($connection, $query);
    ?>

    <?php
    include "../connection/navuser.php";
    ?>


   
    <section class="fline">
        <div class="intro">
            <h1>EventKart</h1>
            <h3>Wedding Planners & Event Organizers!</h3>
        </div>
    </section>
 
    <section class="about">
        <div class="imggg">
            <div class="imgg fimg"><img src="../image/wed1.jpeg" alt=""></div>
            <div class="imgg simg"><img src="../image/wed2..jpeg" alt=""></div>
            <div class="imgg timg"><img src="../image/wed4.avif" alt=""></div>
        </div>
        <div class="aboutPlanner">
            <h1>EventKart-</h1>
            <h2 style="color: rgb(77, 35, 30);"> A WEDDING PLANNERS</h2>
            <p>Embark on your journey of forever with EventKart – where dreams unfold into cherished memories. From
                intimate vows to grand celebrations, we specialize in turning your love story into an enchanting event.
                Trust us to design an extraordinary day that mirrors your unique bond. Your love, our expertise – let's
                make your wedding a celebration as special as the love you share."</p>
        </div>
    </section>

    <section class="service">
        <div class="container-fluid custom-container">
            <div class="row">
                <div class="col-lg-12">

                    <div class="title">
                        <h1 style="color:black;">Our<span
                                style="color: rgb(77, 35, 30); font-family: mv boli;">Wedding</span> Package</h1>
                    </div>

                    <?php while ($row = mysqli_fetch_assoc($result)): ?>
                        <div class="pricing" data-package-id="<?php echo $row['id']; ?>">
                            <ul class="list-group list-unstyled">
                                <li class="list-group-item text-center text-uppercase">
                                    <?php echo $row['service_type'] ?>
                                </li>
                                <li><img src="../admin-panel/<?php echo $row['image'] ?>" class="img-fluid package-image"
                                        alt=""></li>
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
                                    <a href="wedding_package_details.php?id=<?php echo $row['id'] ?>"
                                        class="btn btn-custom">View Details</a>
                                </li>
                            </ul>
                        </div>
                    <?php endwhile; ?>
                </div>
            </div>
        </div>

    </section>

    <!------ vennu -------->
    <section class="venu" style="margin-top: 25rem; display:flex; justify-content:center;">

        <div class="venuu">
            <div class="title">
                <h1 style="color:black;">Ve<span style="color: rgb(77, 35, 30); font-family: mv boli;">Nue</span></h1>
            </div>
            <div class="venuimg"
                style="color:black; display: flex; align-items: center; justify-content: center; flex-wrap: wrap;">
                <?php

                $sql = "SELECT `id`, `venue_name`, `place`, `category`, `image`, `location` FROM `venue` WHERE category='Wedding' ORDER BY id DESC LIMIT 3 ";

                $result = mysqli_query($connection, $sql) or die("Query Failed. : Recent Post");
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {

                        ?>

                        <div class="vimg vfimg" style="padding: .5rem;">
                            <img style=" height: 25rem; width: 20rem;" src="../admin-panel/<?php echo $row['image']; ?>"
                                alt="venu img">
                            <div>
                                <h3 style="font-size: 1rem; text-align:center;">
                                    <?php echo $row['venue_name']; ?>
                                </h3>
                                <a href="<?php echo $row['location']; ?>">
                                    <button>More Info</button></a>
                                <!-- <a href="https://grandsylhet.com/"><button class="btn">More Info</button></a> -->
                            </div>
                        </div>
                    <?php }
                } ?>
            </div>



        </div>
    </section>


    <section class="cardDesing" style="margin: 8rem;">
        <h1>Invitation Card</h1>

        <div class="cdimg">
            <?php
            $sql = "SELECT `id`, `name`, `title`, `image`, `category` FROM `gallery` WHERE category='Wed_invitation' ORDER BY id DESC LIMIT 4 ";

            $result = mysqli_query($connection, $sql) or die("Query Failed. : Recent Post");
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <div>
                        <img src="../admin-panel/<?php echo $row['image']; ?>">
                 
                    </div>
                <?php }
            } ?>
        </div>

    </section>

    <div class="review">
        <div class="card-header">
            <h1>Customer<span>Review</span></h1>
        </div>
        <div class="reviews-container">
            <?php
            $category = "Wedding";

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