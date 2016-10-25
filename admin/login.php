<?php
session_start();
if (isset($_POST['request']) && ($_POST['request'] == "admin-login")) {
  if (isset($_SESSION['admin'])) {
    unset($_SESSION['admin']);
  }
  include("../php/connect.php");
  $pwd = $_POST['pwd'];
  $login = $conn->query("SELECT * FROM `state` WHERE `name` = 'adminpw';");
  $data_login = $login->fetch_array();
  if ($pwd == $data_login['content']) {
    $_SESSION['admin'] ="pen_pineapple_apple_pen";
    header("Location: aviewall.php");
  }
  else {
    $msg =  "Wrong Password";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Login for Kasalong Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/admin.css" type="text/css">
  <script src="../js/jquery.min.js"></script>
</head>
<body>
  <header>
    <div class="header">
      <div class="txthead">
        Kasalong Admin
      </div>
    </div>
  </header>
  <nav>
    <div class="navbar">
      <ul>
        <li><a href="../index.php">Main Page</a></li>
        <li><a href="login.php">Login</a></li>
      </ul>
    </div>
  </nav>
  <section>
    <div class="main" style="text-align: center;">
      <form name="loginadmin" action="" method="post">
        <label>
          Password:
          <input type="password" name="pwd" placeholder="Enter Password" autofocus="autofocus">
        </label>
        <input type="hidden" name="request" value="admin-login">
        <input type="submit" name="btnSubmit" value="Login">
      </form>
      <?php if (isset($msg)) { echo $msg; } ?>
    </div>
  </section>
</body>
</html>
