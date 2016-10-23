<?php
session_start();
if (!isset($_SESSION['admin']) || ($_SESSION['admin'] != "pen_pineapple_apple_pen")) {
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Kasalong Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/admin.css" type="text/css">
  <script src="../js/jquery.min.js"></script>
</head>
<body>
  <?php include("nav-inc.html"); ?>
  <div class="main">
    <ul>
      <li><a href="show_student.php">Show Student Information / Check Student</a></li>
      <li><a href="passedstulist.php">Show Passed Student / Check Slip</a></li>
      <li>Show Passed Student (slip checked)</li>
      <li><a href="show_staff.php">Show Staff Information</a></li>
    </ul>
  </div>
</body>
</html>
