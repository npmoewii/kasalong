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
  <h1>Admin</h1>
  <ul>
    <li><a href="show_student.php">Show Student Information / Check student</a></li>
    <li>Show Passed Student (slip not checked)</li>
    <li>Check slip for Student</li>
    <li>Show Passed Student (slip checked)</li>
    <li><a href="show_staff.php">Show Staff Information</a></li>
  </ul>
  <a href="logout.php">[Logout]</a>
</body>
</html>
