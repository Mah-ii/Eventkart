<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Index</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
    integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" rel="stylesheet">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="css/indexpage.css">
  <link rel="stylesheet" href="css/nav.css">

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
      --foot-txt-size: 1.6rem;
      --foot-link-size: 1.9rem;
      --foot-list-tsize: 2.3rem;
      --copy-size: 1.8rem;
      --social-link-size: 2.8rem;
      --logo-size: 5rem;

    }

  
  </style>

  <link rel="stylesheet" href="css/foter.css">
</head>
<body>
  <!--navbar-->
  <?php include "connection/nav.php"; ?>

  <!-- intro -->
  <section class="section intro" aria-label="home">
    <div class="container">
      <div class="intro-content">
        <h1 class="h1 intro-title">
          CAPTURE HAPPY MOMENTS WITH US
        </h1>
        <p class="section-text">
          Your special day is one of the most singificant milestones in your life, and we understand the
          importance of making it cetraordinary. Our mission is to alleviate the stress of plannung, allowing
          you to savor every moment of your special day.
        </p>
        <a href="user/login.php" class="btn">
          <span class="span">Join Now</span>
        </a>  
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

  <!-- About -->
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

  <!-- collection -->
  <section class="section collection text-center" aria-labelledby="collection-label">
    <div class="container">
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
              <a href="section/gallery.php" class="btn">
                <span class="span">View Gallery</span>
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
              <a href="section/gallery.php" class="btn">
                <span class="span">View Gallery</span>
              </a>
            </div>
          </div>
        </li>
        <li>
          <div class="collection-card">
            <figure class="card-banner img-holder">
              <img src="image/wi3.jpg" width="500" height="550" loading="lazy" alt="Wedding picture" class="img-cover">
            </figure>
            <div class="card-content">
              <h3 class="h3 card-title">Wedding</h3>
              <a href="section/gallery.php" class="btn">
                <span class="span">View Gallery</span>
              </a>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </section>
  <!--  #FOOTER-->

<footer class="footer ">
    <div class="container">
        <div class="section footer-top">
            <div class="footer-brand">
                <a href="#" class="logo" id="logocol">EventKart</a>
                <p class="footer-text">
                    Your premier destination for seamless event planning. Explore vendors, venues, and services for any
                    occasion. Simplify your event organization process with us today.
                </p>
                <ul class="social-list">
                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-twitter"></ion-icon>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-instagram"></ion-icon>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="social-link">
                            <ion-icon name="logo-youtube"></ion-icon>
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
<!-- </section> -->

  <!--- ionicon link-->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

  <!-- Make sure to include Bootstrap JS at the end of the body -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script src="script.js"></script>

</body>
</html>