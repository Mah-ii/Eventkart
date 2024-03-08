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
                <li><a href="index.php">Home</a></li>

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
                            <a href="section/contact.php">Contact Us</a>
                        </li>
                    </ul>
                </li>
                <li><a href="section/review.php">Review</a></li>


            </ul>
        </div>


        <div class="login" id="login">
            <?php


            if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
                echo <<<data

                <div class="user-info">
                <a href="user/profile.php"><?php echo $_SESSION[name]; ?></a>
                </div>

                data;
            } else {

                echo <<<data

                <a href="./user/login.php">Login</a>


                data;

            }

            // session_destroy();
            ?>

        </div>


    </div>
</nav>