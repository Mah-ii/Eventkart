<?php
session_start();
include "config/dbconn.php";

if (isset($_SESSION['adminLogin']) && $_SESSION['adminLogin'] == true) {
  header("Location: dashboard.php");
  exit();
}

if (isset($_POST['login'])) {
  $admin_email = $_POST['admin_email'];
  $admin_password = $_POST['admin_password'];

  
  $query = "SELECT * FROM `admin` WHERE `admin_email` = ? AND `admin_password` = ?";
  $stmt = mysqli_prepare($connection, $query);

  
  mysqli_stmt_bind_param($stmt, "ss", $admin_email, $admin_password);

  
  mysqli_stmt_execute($stmt);
  $result = mysqli_stmt_get_result($stmt);

  if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);
    $_SESSION['adminLogin'] = true;
    $_SESSION['adminId'] = $row['id'];
    header("Location: dashboard.php");
    exit();
  } else {
    $error_msg = "Invalid admin email or password!";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin-Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-md-6">
        <div class="card">
          <div class="card-header bg-dark text-white text-center">
            <h4>Admin-Login Panel</h4>
          </div>
          <div class="card-body">
            <form method="post">
              <div class="mb-3">
                <input type="text" name="admin_email" class="form-control text-center" placeholder="Admin Mail"
                  required>
              </div>
              <div class="mb-3">
                <input type="password" name="admin_password" class="form-control text-center" placeholder="Password"
                  required>
              </div>
              <div class="text-center">
                <button type="submit" name="login" class="btn text-white"
                  style="background-color:#207367;">LogIn</button>
              </div>
              <?php if (isset($error_msg)) { ?>
                <div class="text-center text-danger">
                  <?php echo $error_msg; ?>
                </div>
              <?php } ?>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>

</html>