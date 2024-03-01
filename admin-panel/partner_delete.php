<?php

include 'config/dbconn.php';

$id = $_GET['id'];

$insert = "DELETE from partners WHERE id = '$id'";
$result = mysqli_query($connection, $insert);

if ($result) {
    //  echo "Data Deleted Successfully";
    echo "<script> location.href = 'partner.php'</script>";
} else {
    echo "Failed";
}
?>