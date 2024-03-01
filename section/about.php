<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>About section</title>
  <!-- bootstrap libraries -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>


  <!-- extarnal css -->
  <link rel="stylesheet" href="../css/nav.css">
  <link rel="stylesheet" href="../css/about2.css">
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
  <!--navbar-->
  <?php
  include "../connection/navuser.php";
  ?>



  <!-- About Us Section -->
  <div class="container about-container">
    <h2 class="about-heading">About Us</h2>
    <p class="about-text">
      Welcome to EventCart, where we specialize in crafting unforgettable moments. Our passion is to transform
      your
      dreams into experiences that transcend the ordinary. From intimate affairs to grand celebrations, we blend
      innovation and precision, creating experiences that mesmerize and memories that linger.
    </p>
  </div>

  <!--our mission section-->

  <div class="container about-mission">
    <h2 class="our-mission">Our Mission</h2>
    <p class="about-text">
      "Our Mission: Transforming Your Dreams into Timeless Experiences
      At EventCart, our mission is to go beyond event management - we're dream architects. We are dedicated to
      sculpting
      moments that transcend the ordinary, weaving your dreams into tangible, awe-inspiring realities. With a
      blend of
      innovation, precision, and a passion for the extraordinary, we create experiences that mesmerize and
      memories that
      linger. Your journey with us is not just an event; it's an exploration of possibilities, where every detail
      is a
      brushstroke on the canvas of your dreams. Welcome to EventCart, where your vision becomes an unforgettable
      reality."

    </p>
  </div>



  <!-- Additional Content Section (Modify as needed) -->
  <div class="container additional-content">
    <div class="row">

      <div class="col-md-4">
        <div class="team-list">
          <div class="team-box">
            <img src="../img/mahi.jpg" alt="img">
            <div class="pic-info">
              <h2>Sumaya Akter Mahi</h2>
              <p>Event Manager</p>
              <a href="https://www.facebook.com/tanishatarannum.taha">
                <i class="fa-brands fa-facebook-f"></i></a>
              <a href="https://www.instagram.com/_mah_iii6/?hl=bn">
                <i class="fa-brands fa-instagram"></i></a>
              <a href="https://www.linkedin.com/in/sumaya-mahi-806845266/">
                <i class="fa-brands fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="team-list">
          <div class="team-box">
            <img src="../img/fab.jpg" alt="img">
            <div class="pic-info">
              <h2>Fabiha Akther Tanisha</h2>
              <p>Event Manager</p>
              <a href="https://www.facebook.com/Fabitanu">
                <i class="fa-brands fa-facebook-f"></i></a>
              <a href="https://www.instagram.com/fabihatanu/?hl=bn">
                <i class="fa-brands fa-instagram"></i></a>
              <a href="https://www.linkedin.com/in/sumaya-mahi-806845266/">
                <i class="fa-brands fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-md-4">
        <div class="team-list">
          <div class="team-box">
            <img src="../img/munnii.jpg" alt="img">
            <div class="pic-info">
              <h2>Farhana Akther Munni</h2>
              <p>Event Manager</p>
              <a href="https://www.facebook.com/profile.php?id=100007980257976">
                <i class="fa-brands fa-facebook-f"></i></a>
              <a href="https://www.instagram.com/farhanamunnnii/?hl=bn">
                <i class="fa-brands fa-instagram"></i></a>
              <a href="https://www.linkedin.com/in/sumaya-mahi-806845266/">
                <i class="fa-brands fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>


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