<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INDEX</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto" rel="stylesheet">
    <link rel="stylesheet" type="text/css"
        href="https://cdn.materialdesignicons.com/2.1.19/css/materialdesignicons.min.css">
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>


    <link rel="stylesheet" href="../css/nav.css">

    <link rel="stylesheet" href="../css/bootstrap.min.css">
  

    <style>
        :root {

            /**colors*/
            --homecolor1: rgb(150, 81, 81);
            --homecolor2:  rgb(225, 135, 125);
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

    <?php include "../connection/navuser.php" ?>

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h3 class="text-center mb-3" style="font-size: 20px; padding-top:5rem;">CONTACT US</h3>
                <div class="bg-white p-4">
                    <div class="contact-information">
                        <h5>Address</h5>
                        <div class="row">
                            <div class="col-md-8">
                                <table class="table table-sm" style="font-size: 12px;">
                                    <tr>
                                        <td>Eventcart</td>
                                        <td><i class="mdi mdi-deskphone mr-3"></i> 000 000 000</td>
                                    </tr>
                                    <tr>
                                        <td>Leading University</td>
                                        <td><i class="mdi mdi-phone mr-3"></i> +8801111111111/td>
                                    </tr>
                                    <tr>
                                        <td>Kamalbazar,Sylhet</td>
                                        <td><i class="mdi mdi-email mr-3"></i> contactemail@gmail.com</td>
                                    </tr>
                                </table>
                            </div>
                            <div class="col-md-4">
                                <div class="text-center mt-3">
                                    <i class="mdi mdi-map-marker" style="font-size: 110px;color: #22ADB5;"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="bg-white mt-3 pt-1 pl-4 pb-3">
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <form action="" method="post" style="font-size: 12px;">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-row">
                                            <div class="form-group col-md-12 mb-1">
                                                <label for="contact_person">Name</label>
                                                <input type="email" class="form-control" id="contact_person"
                                                    placeholder="Enter contact person">
                                            </div>
                                            <div class="form-group col-md-12 mb-1">
                                                <label for="contact_email">Email</label>
                                                <input type="password" class="form-control" id="contact_email"
                                                    placeholder="Enter email">
                                            </div>
                                            <div class="form-group col-md-12 mb-1">
                                                <label for="contact_phone">Phone</label>
                                                <input type="text" class="form-control" id="contact_phone"
                                                    placeholder="Enter mobile phone">
                                            </div>
                                            <div class="form-group col-md-12 mb-1">
                                                <label for="contact_message">Message</label>
                                                <textarea type="text" class="form-control" style="resize: none;"
                                                    rows="8" id="contact_message"
                                                    placeholder="Enter message"></textarea>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="col-md-6 pr-2">

                                        <iframe
                                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d57917.40540245092!2d91.73900393124997!3d24.869387499999988!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3751015addbec3b7%3A0x9e87b7be58b5f67e!2sLeading%20University!5e0!3m2!1sen!2sbd!4v1702384933725!5m2!1sen!2sbd"
                                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                            referrerpolicy="no-referrer-when-downgrade"></iframe>

                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary btn-sm rounded-0"
                                    style="font-size: 20px;background: #22adb5;border: 0;">Send
                                    Message</button>
                            </form>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <script src="js/jquery-3.2.1.slim.min.js"></script>
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <script src="../script.js"></script>


</body>

</html>