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
                <li><a href="../index.php">Home</a></li>

                <li>
                    <a href="#">Services</a>
                    <i class='bx bxs-chevron-down js-arrow arrow '></i>
                    <ul class="js-sub-menu sub-menu">
                        <li><a href="../package/wedding.php">Wedding</a></li>
                        <li><a href="../package/corporate.php">Corporate Events</a></li>
                        <li><a href="../package/birthday.php">Birthday</a></li>

                    </ul>
                </li>
                <li><a href="../section/gallery.php">Gallery</a></li>
                <li>
                    <a href="#">About</a>
                    <i class='bx bxs-chevron-down htmlcss-arrow arrow  '></i>
                    <ul class="htmlCss-sub-menu sub-menu">
                        <li><a href="../section/about.php">About Us</a></li>
                        <li><a href="../section/partners.php">Preferred Partners</a></li>
                        <li>
                            <a href="../section/contact.php">Contact Us</a>
                        </li>
                    </ul>
                </li>

                <li><a href="../section/review.php">Review</a></li>


            </ul>
        </div>



        <div class="user-box">
            <?php if (isset($_SESSION['login'])): ?>


                <i class="fa-solid fa-circle-user" onclick="toggleMenu()"></i>
                <div class="sub-menu-wrap" id="subMenu">
                    <div class="sub-menu">
                        <div class="user-info">
                            <a href="../user/profile.php">
                                <?php echo $_SESSION['name']; ?>
                            </a>
                        </div>

                        <a href="../user/edit_profile.php" class="sub-menu-link">
                            <!-- <img src="image/profile.png" alt="profile"> -->
                            <p>Edit Profile</p>

                        </a>

                        <a href="../user/logout.php" class="sub-menu-link">
                            
                            <p>Logout</p>

                        </a>
                    </div>
                </div>
            <?php else: ?>
                <!-- User is not logged in, show login button with icon -->
                <!-- <a href="../user/login.php">
                    <img src="../image1/login.png" style="height: 2rem; width:2rem; border-radius:50%;" alt="Login">
                </a> -->

                <div class="login" id="login">
                    <a href="../user/login.php">Login</a>
                </div>
            <?php endif; ?>
        </div>

    </div>
</nav>