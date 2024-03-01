<?php
include 'config/dbconn.php';
 $ID = $_GET['id'];
mysqli_query($connection,"DELETE FROM `rev` WHERE id = $ID");

header('location:blogs_events.php');

?>