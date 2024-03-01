<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partner section</title>
    <!-- bootstrap libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>


    <!-- extarnal css -->
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/partners2.css">
    <link rel="stylesheet" href="../css/foter.css">





    <style>
        :root {

           /*colors*/
           --homecolor1: rgb(150, 81, 81);
            --homecolor2: rgb(225, 135, 125);
            --homecolor3: rgb(150, 81, 81);
            --white: #fff;
            --foot-btn-bg: rgb(3, 0, 0);
            --foot-btn-hover-bg: rgb(109, 55, 55);
            --black: rgb(3, 0, 0);
            --foot-bg: rgb(187, 118, 118);

            /* font size */
            --foot-txt-size: 1.4rem;
            --foot-link-size: 1.2rem;
            --foot-list-tsize: 1.5rem;
            --copy-size: 1.3rem;
            --social-link-size: 2rem;
            --logo-size: 3rem;

        }

       
            
        .user-box a {
            padding: 8px 16px;
            background-color: var(--homecolor1);
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
    </style>
</head>

<body>

    <?php
    include '../admin-panel/config/dbconn.php';

    $insert = "SELECT * FROM `partners`";
    $result = mysqli_query($connection, $insert);

    ?>

    <!--navbar-->
    <?php
    include "../connection/navuser.php";
    ?>

    <!-- main part-->


    <!-- -----Bakeries---- -->
    <div class="container about-container">
        <h2 class="about-heading">Bakeries</h2>
    </div>

    <div class="container">
        <div class="row">
            <?php while ($row = mysqli_fetch_assoc($result)) {
                if ($row['category'] == "Bakeries") {
                    ?>
                    <div class="col-md-6  col-lg-3 grid-item">

                        <h2>
                            <?php echo $row['com_name']; ?>
                        </h2>

                        <p> <i class="fa-solid fa-user px-2"> : </i>
                            <?php echo $row['owner_name']; ?>
                        </p>
                        <p class="cont"><i class="fa-solid fa-phone px-2 "> : </i><a href="tel:<?php echo $row['phone']; ?>">
                                <?php echo $row['phone']; ?>
                            </a>
                        </p>
                        <p class="cont"><i class="fa-solid fa-envelope px-2 "></i> : <a
                                href="mailto:<?php echo $row['email']; ?>">
                                <?php echo $row['email']; ?>
                            </a> </p>
                        <ul class="social-list1">

                            <li>
                                <a href="<?php echo $row['facebook']; ?>" class="social-link1">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo $row['instragram']; ?>" class="social-link1">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <?php
                }
            } ?>

        </div>
    </div>


    <!-- -----Caterars---- -->
    <div class="container about-container">
        <h2 class="about-heading">Caterars</h2>
    </div>
    <div class="container">
        <div class="row">
            <?php
            $insert = "SELECT * FROM `partners`";
            $result = mysqli_query($connection, $insert);
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['category'] == "Caterars") {
                    ?>
                    <div class="col-md-6  col-lg-3 grid-item">

                        <h2>
                            <?php echo $row['com_name']; ?>
                        </h2>

                        <p> <i class="fa-solid fa-user px-2"> : </i>
                            <?php echo $row['owner_name']; ?>
                        </p>
                        <p class="cont"><i class="fa-solid fa-phone px-2 "> : </i><a href="tel:<?php echo $row['phone']; ?>">
                                <?php echo $row['phone']; ?>
                            </a>
                        </p>
                        <p class="cont"><i class="fa-solid fa-envelope px-2 "></i> : <a
                                href="mailto:<?php echo $row['email']; ?>">
                                <?php echo $row['email']; ?>
                            </a> </p>
                        <ul class="social-list1">

                            <li>
                                <a href="<?php echo $row['facebook']; ?>" class="social-link1">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo $row['instragram']; ?>" class="social-link1">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <?php
                }
            } ?>

        </div>
    </div>

    <!-- -----Music---- -->
    <div class="container about-container">
        <h2 class="about-heading">Music</h2>
    </div>
    <div class="container">
        <div class="row">
            <?php
            $insert = "SELECT * FROM `partners`";
            $result = mysqli_query($connection, $insert);
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['category'] == "Music") {
                    ?>
                    <div class="col-md-6  col-lg-3 grid-item">

                        <h2>
                            <?php echo $row['com_name']; ?>
                        </h2>

                        <p> <i class="fa-solid fa-user px-2"> : </i>
                            <?php echo $row['owner_name']; ?>
                        </p>
                        <p class="cont"><i class="fa-solid fa-phone px-2 "> : </i><a href="tel:<?php echo $row['phone']; ?>">
                                <?php echo $row['phone']; ?>
                            </a>
                        </p>
                        <p class="cont"><i class="fa-solid fa-envelope px-2 "></i> : <a
                                href="mailto:<?php echo $row['email']; ?>">
                                <?php echo $row['email']; ?>
                            </a> </p>
                        <ul class="social-list1">

                            <li>
                                <a href="<?php echo $row['facebook']; ?>" class="social-link1">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo $row['instragram']; ?>" class="social-link1">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <?php
                }
            } ?>

        </div>
    </div>


    <!-- -----Flowrist---- -->
    <div class="container about-container">
        <h2 class="about-heading">Flowrist</h2>
    </div>
    <div class="container">
        <div class="row">
            <?php
            $insert = "SELECT * FROM `partners`";
            $result = mysqli_query($connection, $insert);
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['category'] == "Flowrist") {
                    ?>
                    <div class="col-md-6  col-lg-3 grid-item">

                        <h2>
                            <?php echo $row['com_name']; ?>
                        </h2>

                        <p> <i class="fa-solid fa-user px-2"> : </i>
                            <?php echo $row['owner_name']; ?>
                        </p>
                        <p class="cont"><i class="fa-solid fa-phone px-2 "> : </i><a href="tel:<?php echo $row['phone']; ?>">
                                <?php echo $row['phone']; ?>
                            </a>
                        </p>
                        <p class="cont"><i class="fa-solid fa-envelope px-2 "></i> : <a
                                href="mailto:<?php echo $row['email']; ?>">
                                <?php echo $row['email']; ?>
                            </a> </p>
                        <ul class="social-list1">

                            <li>
                                <a href="<?php echo $row['facebook']; ?>" class="social-link1">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo $row['instragram']; ?>" class="social-link1">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <?php
                }
            } ?>

        </div>
    </div>

    <!-- -----Makeup & Hair---- -->
    <div class="container about-container">
        <h2 class="about-heading">Makeup & Hair</h2>
    </div>
    <div class="container">
        <div class="row">
            <?php
            $insert = "SELECT * FROM `partners`";
            $result = mysqli_query($connection, $insert);
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['category'] == "Makeup & Hair") {
                    ?>
                    <div class="col-md-6  col-lg-3 grid-item">

                        <h2>
                            <?php echo $row['com_name']; ?>
                        </h2>

                        <p> <i class="fa-solid fa-user px-2"> : </i>
                            <?php echo $row['owner_name']; ?>
                        </p>
                        <p class="cont"><i class="fa-solid fa-phone px-2 "> : </i><a href="tel:<?php echo $row['phone']; ?>">
                                <?php echo $row['phone']; ?>
                            </a>
                        </p>
                        <p class="cont"><i class="fa-solid fa-envelope px-2 "></i> : <a
                                href="mailto:<?php echo $row['email']; ?>">
                                <?php echo $row['email']; ?>
                            </a> </p>
                        <ul class="social-list1">

                            <li>
                                <a href="<?php echo $row['facebook']; ?>" class="social-link1">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo $row['instragram']; ?>" class="social-link1">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <?php
                }
            } ?>

        </div>
    </div>
    <!-- -----Photographers---- -->
    <div class="container about-container">
        <h2 class="about-heading">Photographers</h2>
    </div>
    <div class="container">
        <div class="row">
            <?php
            $insert = "SELECT * FROM `partners`";
            $result = mysqli_query($connection, $insert);
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['category'] == "Photographers") {
                    ?>
                    <div class="col-md-6  col-lg-3 grid-item">

                        <h2>
                            <?php echo $row['com_name']; ?>
                        </h2>

                        <p> <i class="fa-solid fa-user px-2"> : </i>
                            <?php echo $row['owner_name']; ?>
                        </p>
                        <p class="cont"><i class="fa-solid fa-phone px-2 "> : </i><a href="tel:<?php echo $row['phone']; ?>">
                                <?php echo $row['phone']; ?>
                            </a>
                        </p>
                        <p class="cont"><i class="fa-solid fa-envelope px-2 "></i> : <a
                                href="mailto:<?php echo $row['email']; ?>">
                                <?php echo $row['email']; ?>
                            </a> </p>
                        <ul class="social-list1">

                            <li>
                                <a href="<?php echo $row['facebook']; ?>" class="social-link1">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo $row['instragram']; ?>" class="social-link1">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <?php
                }
            } ?>

        </div>
    </div>
    <!-- -----Decorations---- -->
    <div class="container about-container">
        <h2 class="about-heading">Decorations</h2>
    </div>
    <div class="container">
        <div class="row">
            <?php
            $insert = "SELECT * FROM `partners`";
            $result = mysqli_query($connection, $insert);
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['category'] == "Decorations") {
                    ?>
                    <div class="col-md-6  col-lg-3 grid-item">

                        <h2>
                            <?php echo $row['com_name']; ?>
                        </h2>

                        <p> <i class="fa-solid fa-user px-2"> : </i>
                            <?php echo $row['owner_name']; ?>
                        </p>
                        <p class="cont"><i class="fa-solid fa-phone px-2 "> : </i><a href="tel:<?php echo $row['phone']; ?>">
                                <?php echo $row['phone']; ?>
                            </a>
                        </p>
                        <p class="cont"><i class="fa-solid fa-envelope px-2 "></i> : <a
                                href="mailto:<?php echo $row['email']; ?>">
                                <?php echo $row['email']; ?>
                            </a> </p>
                        <ul class="social-list1">

                            <li>
                                <a href="<?php echo $row['facebook']; ?>" class="social-link1">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo $row['instragram']; ?>" class="social-link1">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <?php
                }
            } ?>

        </div>
    </div>
    <!-- -----Transports---- -->
    <div class="container about-container">
        <h2 class="about-heading">Transports</h2>
    </div>
    <div class="container">
        <div class="row">
            <?php
            $insert = "SELECT * FROM `partners`";
            $result = mysqli_query($connection, $insert);
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['category'] == "Transports") {
                    ?>
                    <div class="col-md-6  col-lg-3 grid-item">

                        <h2>
                            <?php echo $row['com_name']; ?>
                        </h2>

                        <p> <i class="fa-solid fa-user px-2"> : </i>
                            <?php echo $row['owner_name']; ?>
                        </p>
                        <p class="cont"><i class="fa-solid fa-phone px-2 "> : </i><a href="tel:<?php echo $row['phone']; ?>">
                                <?php echo $row['phone']; ?>
                            </a>
                        </p>
                        <p class="cont"><i class="fa-solid fa-envelope px-2 "></i> : <a
                                href="mailto:<?php echo $row['email']; ?>">
                                <?php echo $row['email']; ?>
                            </a> </p>
                        <ul class="social-list1">

                            <li>
                                <a href="<?php echo $row['facebook']; ?>" class="social-link1">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo $row['instragram']; ?>" class="social-link1">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <?php
                }
            } ?>

        </div>
    </div>
    <!-- -----Videography---- -->
    <div class="container about-container">
        <h2 class="about-heading">Videography</h2>
    </div>
    <div class="container">
        <div class="row">
            <?php
            $insert = "SELECT * FROM `partners`";
            $result = mysqli_query($connection, $insert);
            while ($row = mysqli_fetch_assoc($result)) {
                if ($row['category'] == "Videography") {
                    ?>
                    <div class="col-md-6  col-lg-3 grid-item">

                        <h2>
                            <?php echo $row['com_name']; ?>
                        </h2>

                        <p> <i class="fa-solid fa-user px-2"> : </i>
                            <?php echo $row['owner_name']; ?>
                        </p>
                        <p class="cont"><i class="fa-solid fa-phone px-2 "> : </i><a href="tel:<?php echo $row['phone']; ?>">
                                <?php echo $row['phone']; ?>
                            </a>
                        </p>
                        <p class="cont"><i class="fa-solid fa-envelope px-2 "></i> : <a
                                href="mailto:<?php echo $row['email']; ?>">
                                <?php echo $row['email']; ?>
                            </a> </p>
                        <ul class="social-list1">

                            <li>
                                <a href="<?php echo $row['facebook']; ?>" class="social-link1">
                                    <ion-icon name="logo-facebook"></ion-icon>
                                </a>
                            </li>

                            <li>
                                <a href="<?php echo $row['instragram']; ?>" class="social-link1">
                                    <ion-icon name="logo-instagram"></ion-icon>
                                </a>
                            </li>
                        </ul>

                    </div>
                    <?php
                }
            } ?>

        </div>
    </div>


    <!--  #FOOTER-->
    <?php include "../connection/footer.php"; ?>

    <!-- 
    - ionicon link
  -->
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


    <!-- Make sure to include Bootstrap JS at the end of the body -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>

    <script src="../script.js"></script>

</body>

</html>