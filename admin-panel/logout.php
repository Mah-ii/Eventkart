<?php
include "includes/links.php";

session_start();

if (isset($_POST['logout'])) {


    echo '<script>if(confirm("Are you sure you want to log out?")) {';
    session_destroy();
    echo 'window.location.href = "index.php";';
    echo '}';
    echo '</script>';
}

?>