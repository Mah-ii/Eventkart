<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<!-- <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corporate</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/corpo.css">
    <link rel="stylesheet" href="../css/nav.css">

    <style>

        :root {

            /**colors*/
            --homecolor1: rgb(150, 81, 81);
            --homecolor2: rgb(150, 81, 81);
            --homecolor3: rgb(150, 81, 81);
            --white: #fff;
            --foot-btn-bg: rgb(3, 0, 0);
            --foot-btn-hover-bg: rgb(109, 55, 55);
            --black: rgb(3, 0, 0);
            --foot-bg: rgb(187, 118, 118);

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
            background-color: var(--homecolor1);
            border: none;
            color: black;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            margin-right: 2px;
            border-radius: 5px;
            cursor: pointer;
        }

        .user-box a:hover {
            background-color: var(--white);
        }

    </style>
</head> -->

<head>
    
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Corporate</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/corpo.css">
    <link rel="stylesheet" href="../css/nav.css">
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


    </style>


</head>
<body>

    <?php include "../connection/navuser.php"?>
    <section class="fline">
        <div class="intro">
             <h1>Corporate Planer</h1>
             <h3>Planners & Event Organizers!</h3>
        </div>
     </section>
     <section>
        <div class="fsec">
            <div class="corplan">
                <h1><i>Corporate Planers</i></h1>
                <p>Join us for an unforgettable corporate event, where innovation meets collaboration. Network with industry leaders, engage in insightful discussions, and discover cutting-edge solutions to propel your business forward. With exciting speakers, interactive workshops, and ample networking opportunities, this event promises inspiration and growth for all attendees.</p>
            </div>
            <div>
                <img src="../image/corpo1.png" alt="">
            </div>
        </div>
    </section>
    <section>
        <h1 style="text-align: center; font-size: 4rem; "><i>Venu</i></h1>
        <div class="ssec">
            <div class="venu" style="display: flex; justify-content: center; flex-direction: column;">
                <img src="../image/corpo5.jpeg" alt="">
                <h2>Grand Sylhet</h2>
                <button style="margin:2rem;">More info</button>
            </div>
            <div class="venu" style="display: flex; justify-content: center; flex-direction: column;">
                <img src="../image/corpo9.jpeg" alt="">
                <h2>Rose View</h2>
                <button style="margin:2rem;" >More info</button>
            </div>
            <div class="venu" style="display: flex; justify-content: center; flex-direction: column;">
                <img src="../image/corpo7.jpeg" alt="">
                <h2>Grand Sylhet</h2>
                <button style="margin:2rem;">More info</button>
            </div>
            
           
        </div>

    </section>
    <section>
        <h1 style="text-align: center; font-size: 4rem; "><i>Previous Event</i></h1>
        <div>
        <div class="pEventimg">
                
            <div class="container">
                <img src="../image/corpo8.jpeg" alt="" class="image">
            </div>
            
            <div class="container">
                <img src="../image/corpo4.png" alt="" class="image">
            </div>
            <div class="container">
                <img src="../image/corpo3.jpeg" alt="" class="image">
            </div>
        </div>
    </section>

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