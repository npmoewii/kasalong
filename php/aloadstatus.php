<?php
session_start();
if (!isset($_SESSION['admin']) || ($_SESSION['admin'] != "pen_pineapple_apple_pen")) {
  header("Location: ../php/login.php");
}
include("../php/connect.php");
$id = $_GET['id'];
$data = $conn->query("SELECT `pass` FROM `info_student` WHERE `nationid` = '$id'");
if ($data->num_rows == 0) {
  header("Location: ../php/show_student.php");
}
else {
  $row_data = ($data->fetch_array());
  echo $row_data['pass'];
}
?>
