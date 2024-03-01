<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>birthday</title>

    <!-- bootstrap libraries -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

    <!-- extranal css -->
    <link rel="stylesheet" href="../css/birthday.css">
    <link rel="stylesheet" href="../css/card.css">
    <!-- <link rel="stylesheet" href="../css/service.css"> -->

    <style>
        :root {

            /**colors*/
            --homecolor1: #fac031;
            --homecolor2: #fac031;
            --homecolor3: #fac031;
            --white: #fff;


        }

        #extranav:hover {
            color: blue;
        }
    </style>
</head>

<body>

    <!--navbar-->
    <?php include "../connection/navuser.php"; ?>

    <br><br>
    <!-- body -->
    <?php
    include '../admin-panel/config/dbconn.php';

    $insert = "select * from gallery";
    $result = mysqli_query($connection, $insert);

    ?>
    <main>
        <div class="container">
            <div class="row">

                <?php while ($row = mysqli_fetch_assoc($result)) {
                    $check_page = $row['category'];
                    if ($check_page === 'Invitation') {
                        echo "

                    <div class='col-lg-4 col-sm-6 '>
                        <div class='card'>
                            <div class='image'>
                            <img src='../admin-panel/$row[image]' height='250' width='150' alt='image'>
                            </div>
                            <div class='card-inner font-monospace'>
                                <div class='header'>
                                    <h2>$row[name]</h2>
                                    <h3>$row[title]</h2>
                                </div>
                                <div class='content'>
                                    <p>$row[category]</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    ";
                    }
                } ?>


            </div>
        </div>
    </main>
    <br> <br><br>



    <!--  #FOOTER-->
    <?php include "../connection/footer.php"; ?>



    <!-- </section> -->

    <!-- javascript  -->
    <script src="../script.js"></script>

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

</body>

</html>