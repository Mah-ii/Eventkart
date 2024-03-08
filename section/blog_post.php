<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;700;900&family=Poppins:wght@100;200;300&display=swap"
        rel="stylesheet">

    <title>Wedding</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/indexpage.css">
    <link rel="stylesheet" href="../css/nav.css">
    <link rel="stylesheet" href="../css/blog.css">
    <link rel="stylesheet" href="../css/pagnav.css">
    <link rel="stylesheet" href="../css/foter.css">

    <style>
        :root {


            --homecolor1: rgb(150, 81, 81);
            --homecolor2: rgb(150, 81, 81);
            --homecolor3: rgb(150, 81, 81);
            --white: #fff;
            --foot-btn-bg: rgb(3, 0, 0);
            --foot-btn-hover-bg: rgb(109, 55, 55);
            --black: rgb(3, 0, 0);
            --foot-bg: rgb(187, 118, 118);


            --foot-txt-size: 1.6rem;
            --foot-link-size: 1.9rem;
            --foot-list-tsize: 2.3rem;
            --copy-size: 1.8rem;
            --social-link-size: 2.8rem;
            --logo-size: 5rem;


        }


        .blog-card {
            border: 2px solid black;

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


    <?php
    include "../connection/navuser.php";
    ?>


    <div class="container">
        <div class="row">
            <section class="section blog " aria-labelledby="blog-label">
                <div class="container">

                    <h2 class="h2 section-title text-center" id="blog-label">Blog & News</h2>



                    <ul class="grid-list">


                        <?php
                        include "../connection/config.php";

                        $limit = 4;
                        if (isset($_GET['page'])) {
                            $page = $_GET['page'];
                        } else {
                            $page = 1;
                        }
                        $offset = ($page - 1) * $limit;

                        $sql = "SELECT `id`, `title`, `description`, `image`, `location`, 
                        `status`, `event_date`, `event_type`, `date_created` FROM `review`
                         ORDER BY id DESC LIMIT {$offset},{$limit}";


                        $result = mysqli_query($connection, $sql) or die("Query Failed.");
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                                ?>
                                <li>
                                    <div class="blog-card">



                                        <figure class="card-banner img-holder">
                                            <img src="../admin-panel/<?php echo $row['image']; ?>" width="600" height="500"
                                                loading="lazy"
                                                alt="The Detail Process Of Decorating The Clay Vase At Pottery Studio"
                                                class="img-cover">
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
                                            <h3 class="">
                                                <a href="single.php?id=<?php echo $row['id']; ?>" class="card-title">
                                                    <!-- <?php echo $row['description']; ?> -->
                                                    <?php echo substr($row['description'], 0, 130) . "....."; ?>
                                                </a>
                                            </h3>

                                            <a href="single.php?id=<?php echo $row['id']; ?>" class="btn">
                                                <span class="span">Read More</span>

                                                <ion-icon name="arrow-forward" aria-hidden="true"></ion-icon>
                                            </a>

                                        </div>

                                    </div>
                                </li>

                            <?php }
                        } ?>

                    </ul>


                </div>
            </section>
        </div>
    </div>

    <div class="pagnav">
        <?php

        $sql1 = "SELECT * FROM `review` ";
        $result1 = mysqli_query($connection, $sql1) or die("Query Failed.");

        if (mysqli_num_rows($result1) > 0) {

            $total_records = mysqli_num_rows($result1);

            $total_page = ceil($total_records / $limit);

            echo ' <ul class="pagination modal-4">';
            if ($page > 1) {
                echo '<li><a href="blog_post.php?page=' . ($page - 1) . '" class="prev">
            <i class="fa fa-chevron-left"></i>
            Previous
        </a>
    </li>';
            }
            for ($i = 1; $i <= $total_page; $i++) {
                if ($i == $page) {
                    $active = "active";
                } else {
                    $active = "";
                }


                echo '<li class="' . $active . '"><a href="blog_post.php?page=' . $i . '">' . $i . '</a></li>';
            }
            if ($total_page > $page) {

                echo '<li><a href="blog_post.php?page=' . ($page + 1) . '" class="next"> Next
            <i class="fa fa-chevron-right"></i>
        </a></li>';

            }

            echo '</ul>';
        }
        ?>
    </div>





    <?php include "../connection/footer.php"; ?>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>


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