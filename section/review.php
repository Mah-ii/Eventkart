<?php
include "../connection/config.php";

session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Review</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../css/foter.css">
    <link rel="stylesheet" href="../css/nav.css">


    <style>
        :root {

            /**colors*/
            --homecolor1: rgb(150, 81, 81);
            --homecolor2: rgb(225, 135, 125);
            --homecolor3: rgb(150, 81, 81);
            --white: #fff;
            --foot-btn-bg: rgb(3, 0, 0);
            --foot-btn-hover-bg: rgb(109, 55, 55);
            --black: rgb(3, 0, 0);
            --foot-bg: rgb(187, 118, 118);

            /* font size */
            --foot-txt-size: 1.1rem;
            --foot-link-size: 1.2rem;
            --foot-list-tsize: 1.8rem;
            --copy-size: 1.1rem;
            --social-link-size: 2rem;
            --logo-size: 3rem;

        }
        .user-box a {
            padding: 8px 16px;
            background-color:var(--homecolor1); 
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

        .sub-menu-wrap .sub-menu {
            background: var(--homecolor2);
            padding: 20px;
            margin: 10px;
        }


        h1 {
            text-align: center;
            font-size: 3rem;
            color: rgb(138, 88, 89);
            margin-top: 8rem;
        }

        .boxx {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
        }

        .box {
            text-align: center;
            padding: 2rem;
            margin: 2rem;
            border: .1rem solid rgb(138, 88, 89);
            background-color: antiquewhite;
            border-radius: 1.5rem;
            display: flex;
            flex-direction: column;
            align-items: center;
            /* Center horizontally */
        }

        .box h3 {
            font-size: 1.5rem;
        }

        .box p {
            font-size: 1rem;
        }

        .box img {
            height: 15rem;
            width: 15rem;
            /* margin-bottom: 2.5rem; */
        }
    </style>
</head>

<body>


    <section>

        <?php include "../connection/navuser.php" ?>

        <h1>Review</h1>

        <div class="boxx">


            <?php

            $select_review = mysqli_query($connection, "SELECT * FROM `rev`");
            if (mysqli_num_rows($select_review) > 0) {
                while ($fetch_review = mysqli_fetch_assoc($select_review)) {
                    ?>

                    <div class="box">
                        <img src="../image1/<?php echo $fetch_review['image']; ?>" alt="Something problem">
                        <h3>
                            <?php echo $fetch_review['user_name']; ?>
                        </h3>
                        <p>
                            <?php echo $fetch_review['review']; ?>
                        </p>
                    </div>

                    <?php
                }
                ;
            }
            ;
            ?>

        </div>

    </section>


    <?php include "../connection/footer.php" ?>


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

    <script src="script.js"></script>



</body>

</html>