<?php
session_start();
if (!isset($_SESSION['admin']) || ($_SESSION['admin'] != "pen_pineapple_apple_pen")) {
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Staff list - Kasalong Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/admin.css" type="text/css">
  <script src="../js/jquery.min.js"></script>
</head>
<body>
  <?php include("nav-inc.html"); ?>
  <div class="main">
    <h1>Admin</h1>
    <h2>Check student</h2>
  </div>
</body>
</html>
