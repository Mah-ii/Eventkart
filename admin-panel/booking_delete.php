<?php

include 'config/dbconn.php';

$id = $_GET['id'];

$query = "DELETE from booking WHERE id = '$id'";
$result = mysqli_query($connection, $query);

if ($result) {
    echo "Data Deleted Successfully";
    header("Location:booking.php");
} else {
    echo "Failed";
}
?>
