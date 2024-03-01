<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Pacifico&family=Poppins:ital,wght@0,100;0,300;0,400;0,500;0,600;1,100;1,300;1,400&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <section class="login ">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <img src="../img/logo.jpeg" class="img-fluid" alt="">
                </div>
                <div class="col-lg-7 text-center py-5">
                    <h1 class="animate_animated animateheartBeat animate_infinite">Welcome to EventKart</h1>

                    <form action="loginAction.php" method="post">
                        <div class="form-row py-5">
                            <div class="offset-1 col-lg-10 py-3">
                                <label for="loginEmail"><i><b>Email Address :</b></i></label>
                                <input type="text" class="input-box" name="loginEmail" required>
                            </div>
                            <div class="offset-1 col-lg-10 py-3">
                                <label for="loginpass"><i><b>Password :</b></i></label>
                                <input type="password" class="input-box" name="loginpass" required>
                            </div>
                            <div class="offset-1 col-lg-10 py-3">
                                <button class="btn">LogIn</button>
                            </div>
                            <div class="offset-1 col-lg-10 py-3">
                                <p>Don't have an account?
                                    <a href="register.php" style="color: rgb(133, 54, 71);">Registration</a>
                                </p>
                            </div>
                        </div>
                    </form>
                </div>

            </div>


        </div>


    </section>




    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

</body>

</html>