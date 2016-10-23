<?php
session_start();
if (!isset($_SESSION['admin']) || ($_SESSION['admin'] != "pen_pineapple_apple_pen")) {
  header("Location: ../php/login.php");
}
include("connect.php");
if (isset($_POST['request'])) {
  if ($_POST['request'] == "achangestatus") {
    $id = $_POST['id'];
    $data = $conn->query("SELECT `nationid` FROM `info_student` WHERE `nationid` = '$id'");
    if ($data->num_rows != 0) {
      if ($_POST['to'] == 1) {
        $conn->query("UPDATE `info_student` SET `pass` = '1' WHERE `nationid` = '$id';");
      }
      else if ($_POST['to'] == 2) {
        $conn->query("UPDATE `info_student` SET `pass` = '2' WHERE `nationid` = '$id';");
      }
    }
  }
  else if ($_POST['request'] == "achangeslipstatus") {
    $id = $_POST['id'];
    $data = $conn->query("SELECT * FROM `slip` WHERE `nationid` = '$id'");
    if ($data->num_rows != 0) {
      if ($_POST['to'] == 1) {
        $conn->query("UPDATE `slip` SET `recheckslip` = '1' WHERE `nationid` = '$id'");
      }
      else if ($_POST['to'] == 2) {
        $conn->query("UPDATE `slip` SET `recheckslip` = '2' WHERE `nationid` = '$id'");
      }
    }
  }
}
?>
