<?php session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HomePage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>


    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/indexpage.css">
    <link rel="stylesheet" href="css/blog.css">
    <link rel="stylesheet" href="css/footer.css">

    <style>
        :root {

            /**colors*/
            --homecolor1: rgb(150, 81, 81);
            --homecolor2: rgb(225, 135, 125);
            --homecolor3: rgb(150, 81, 81);
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

        .blog-card {

            border-top-left-radius: 50px;
            border-top-right-radius: 50px;
            background-color: white;
        }

        .card-banner {
            width: 550px;
            height: 300px;
            border-top-left-radius: 50px;
            border-top-right-radius: 50px;
        }
    </style>

</head>

<body>


    <nav>
        <div class="navbar">
            <i class='bx bx-menu'></i>
            <div class="logo"><a href="#">EventKart</a></div>
            <div class="nav-links">
                <div class="sidebar-logo">
                    <span class="logo-name">EventKart</span>
                    <i class='bx bx-x'></i>
                </div>
                <ul class="links" id="linkscall">
                    <li><a href="HomePage.php">Home</a></li>

                    <li>
                        <a href="#">Services</a>
                        <i class='bx bxs-chevron-down js-arrow arrow '></i>
                        <ul class="js-sub-menu sub-menu">
                            <li><a href="package/wedding.php">Wedding</a></li>
                            <li><a href="package/corporate.php">Corporate Events</a></li>
                            <li><a href="package/birthday.php">Birthday</a></li>

                        </ul>
                    </li>

                    <li><a href="section/gallery.php">Gallery</a></li>
                    <li>
                        <a href="#">About</a>
                        <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
                        <ul class="htmlCss-sub-menu sub-menu">
                            <li><a href="section/about.php">About Us</a></li>
                            <li><a href="section/partners.php">Preferred Partners</a></li>
                            <li>
                                <a href="contact.php">Contact Us</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="review.php">Review</a></li>


                </ul>
            </div>
            <div class="user-box">
                <?php if (isset($_SESSION['login'])): ?>
                    <i class="fa-solid fa-circle-user" onclick="toggleMenu()"></i>
                    <div class="sub-menu-wrap" id="subMenu">
                        <div class="sub-menu">
                            <div class="user-info">
                                <a href="user/profile.php">
                                    <?php echo $_SESSION['name']; ?>
                                </a>
                            </div>
                            <a href="user/edit_profile.php" class="sub-menu-link">
                                <p>Edit Profile</p>
                            </a>
                            <a href="user/logout.php" class="sub-menu-link">
                                <p>Logout</p>
                            </a>
                        </div>
                    </div>
                <?php else: ?>
                    <div class="login" id="login">
                        <a href="user/login.php">Login</a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </nav>





    <section class="section intro" aria-label="home">
        <div class="container">

            <div class="intro-content">

                <h1 class="h1 intro-title">
                    CAPTURE HAPPY MOMENTS WITH US
                    <span class="span">EVENTKART</span>
                </h1>

                <p class="section-text">
                    Your special day is one of the most singificant milestones in your life, and we understand the
                    importance of making it cetraordinary. Our mission is to alleviate the stress of plannung, allowing
                    you to savor every moment of your special day.
                </p>

                <?php if (!isset($_SESSION['login'])): ?>

                    <a href="user/login.php" class="btn">
                        <span class="span">Join Now</span>
                    </a>
                <?php endif; ?>

            </div>

            <div class="wrapper">
                <div class="intro-banner-1 img-holder" style="--width: 400; --height: 550;">
                    <img src="image/bi.jpg" width="400" height="550" alt="view of assortment of decor for interior shop"
                        class="img-cover">
                </div>

                <div class="intro-banner-2 img-holder" style="--width: 500; --height: 850;">
                    <img src="image/wi.jpg" width="500" height="850" alt="ceramic craft ware" class="img-cover">
                </div>

            </div>

        </div>
    </section>


    <section class="section about" aria-label="about">
        <div class="container">
            <div class="wrapper">
                <figure class="about-banner about-banner-1 img-holder">
                    <img src="image/cpi.jpg" alt="picture coming soon" class="img-cover">
                </figure>
                <h2 class="h2 section-title">Make easy you event</h2>
            </div>
            <figure class="about-banner about-banner-2 img-holder">
                <img src="image/bi.webp" alt="picture coming soon" class="img-cover">
            </figure>
            <div class="about-content">

                <h3 class="h2 section-title">Event planning is Our Passion</h3>

                <p class="section-text">
                    Simplifies planning for weddings, birthdays, corporate, and parties.
                </p>

                <a href="#" class="btn">
                    <span class="span">Read More</span>
                </a>

                <figure class="about-banner about-banner-3 img-holder">
                    <img src="image/vi.jpg" alt="picture coming soon" class="img-cover">
                </figure>

            </div>

        </div>
    </section>

    <section class="section collection text-center" aria-labelledby="collection-label">
        <div class="container-fluid">

            <h2 class="h2 section-title" id="collection-label">
                Event Collection
            </h2>
            <br>
            <ul class="grid-list">

                <li>
                    <div class="collection-card">
                        <figure class="card-banner img-holder">
                            <img src="image/bi2.jpg" alt="Birthday picture" class="img-cover">
                        </figure>
                        <div class="card-content">
                            <h3 class="h3 card-title">Birthday</h3>
                            <a href="package/birthday.php" class="btn">
                                <span class="span">Services</span>
                            </a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collection-card">
                        <figure class="card-banner img-holder">
                            <img src="image/cpi2.jpg" alt="Corporate picture" class="img-cover">
                        </figure>
                        <div class="card-content">
                            <h3 class="h3 card-title">Corporate</h3>
                            <a href="package/corporate.php" class="btn">
                                <span class="span">Services</span>
                            </a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="collection-card">
                        <figure class="card-banner img-holder">
                            <img src="image/wi3.jpg" width="500" height="550" loading="lazy" alt="Wedding picture"
                                class="img-cover">
                        </figure>
                        <div class="card-content">
                            <h3 class="h3 card-title">Wedding</h3>
                            <a href="package/wedding.php" class="btn">
                                <span class="span">Services</span>
                            </a>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>


    <div class="container">
        <div class="row">
            <section class="section blog " aria-labelledby="blog-label">
                <div class="container">

                    <h2 class="h2 section-title text-center" id="blog-label">Blog & News</h2>

                    <p class="section-text text-center">
                        Discover our awsome event Blog and News.
                    </p>


                    <ul class="grid-list">
                        <?php
                        include "connection/config.php";


                        $limit = 4;

                        $sql = "SELECT `id`, `title`, `description`, `image`, `location`, 
                                                    `status`, `event_date`, `event_type`, `date_created` FROM `review`
                                                    ORDER BY id DESC LIMIT {$limit}";



                        $result = mysqli_query($connection, $sql) or die("Query Failed. : Recent Post");
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <li>
                                    <div class="blog-card">


                                        <figure class="card-banner img-holder">
                                            <img src="admin-panel/<?php echo $row['image']; ?>" width="1024" height="668"
                                                loading="lazy" alt="Recent post image" class="img-cover">
                                        </figure>

                                        <div class="card-content">

                                            <h3 class="h4">

                                                <a href="single.php?id=<?php echo $row['id']; ?>" class="card-title">
                                                    <?php echo $row['title']; ?>
                                                </a>
                                            </h3>

                                            <div class="card-meta">

                                                <a href="#" class="card-meta-wrapper">
                                                    <ion-icon name="person-outline" aria-hidden="true"></ion-icon>

                                                    <span class="span">admin</span>
                                                </a>

                                                <time class="card-meta-wrapper" datetime="2022-10-12">
                                                    <ion-icon name="calendar-clear-outline" aria-hidden="true"></ion-icon>

                                                    <span class="span">
                                                        <?php echo $row['date_created']; ?>
                                                    </span>
                                                </time>

                                                <a href="#" class="card-meta-wrapper">
                                                    <ion-icon name="folder-open-outline" aria-hidden="true"></ion-icon>

                                                    <span class="span">
                                                        <?php echo $row['event_type']; ?>
                                                    </span>
                                                </a>

                                            </div>

                                        </div>

                                    </div>
                                </li>
                            <?php }
                        } ?>

                    </ul>

                    <a href="section/blog_post.php" class="btn">
                        <span class="span">Read More</span>

                        <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                    </a>

                </div>
            </section>
        </div>
    </div>


    <footer class="footer ">
        <div class="container">
            <div class="section footer-top">
                <div class="footer-brand">
                    <a href="#" class="logo" id="logocol">EventKart</a>
                    <p class="footer-text">
                        Your premier destination for seamless event planning. Explore vendors, venues, and services for
                        any
                        occasion. Simplify your event organization process with us today.
                    </p>
                    <ul class="social-list">
                        <li>
                            <a href="https://web.facebook.com/people/EventKart/61557178460955/" class="social-link">
                                <ion-icon name="logo-facebook"></ion-icon>
                            </a>
                        </li>

                        <li>
                            <a href="https://www.instagram.com/eventkartt/?igsh=N3BzNmpqcm5xd3Fz" class="social-link">
                                <ion-icon name="logo-instagram"></ion-icon>
                            </a>
                        </li>

                    </ul>
                </div>
                <ul class="footer-list">
                    <li>
                        <p class="footer-list-title">Explore Us</p>
                    </li>
                    <li>
                        <a href="section/about.php" class="footer-link">About Us</a>
                    </li>
                    <li>
                        <a href="section/gallery.php" class="footer-link">Collection</a>
                    </li>
                    <li>
                        <a href="section/blog_post.php" class="footer-link">Blog & News</a>
                    </li>
                </ul>
                <ul class="footer-list">
                    <li>
                        <p class="footer-list-title">Support</p>
                    </li>
                    <li>
                        <a href="user/profile.php" class="footer-link">Account</a>
                    </li>
                    <li>
                        <a href="section/review-form.php" class="footer-link">Feedback</a>
                    </li>
                </ul>
                <div class="footer-list">
                    <p class="footer-list-title">Get in Touch</p>
                    <p class="footer-text">
                        Question or feedback?
                        We’d love to hear from you
                    </p>
                    <a href="section/contact.php" class="btn-foot">
                        <span class="span">Contact Us</span>
                        <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                    </a>
                </div>
            </div>
            <div class="footer-bottom">
                <p class="copyright">
                    Copyright 2024 codewithFAM. All Right Reserved
                </p>
            </div>
        </div>
    </footer>



    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>


    <script>
        let subMenu = document.getElementById("subMenu");

        function toggleMenu() {
            subMenu.classList.toggle("open-menu");
        }
    </script>

    <script src="script.js"></script>





</body>

</html>