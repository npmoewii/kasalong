<?php
session_start();
if (!isset($_SESSION['admin']) || ($_SESSION['admin'] != "pen_pineapple_apple_pen")) {
  header("Location: ../php/login.php");
}
include("../php/connect.php");
$id = $_GET['id'];
$data = $conn->query("SELECT `nationid` FROM `info_student` WHERE `nationid` = '$id' AND `pass` = 2");
if ($data->num_rows == 0) {
  header("Location: ../php/passedstulist.php");
}
else {
  $slip = $conn->query("SELECT * FROM `slip` WHERE `nationid` = '$id'");
  if ($slip->num_rows == 0) {
    echo 0;
  }
  else {
    $data_slip = $slip->fetch_array();
    echo ($data_slip['recheckslip'] + 1);
  }
}
?>
