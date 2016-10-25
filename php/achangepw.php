<?php
session_start();
if (!isset($_SESSION['admin']) || ($_SESSION['admin'] != "pen_pineapple_apple_pen")) {
  header("Location: ../php/login.php");
}
include("connect.php");
if (isset($_POST['request']) && ($_POST['request'] == "achangepassword")) {
  $old = $conn->query("SELECT * FROM `state` WHERE `name` = 'adminpw' AND `content` = '{$_POST['oldpwd']}'");
  if ($old->num_rows == 0) {
    $error = 1;
  }
  else {
    if ($_POST['newpwd'] != $_POST['conpwd']) {
      $error = 2;
    }
    else {
      $new = $_POST['newpwd'];
      $conn->query("UPDATE `state` SET `content` = '$new' WHERE `name` = 'adminpw'");
      $error = 0;
    }
  }
  header("Location: ../admin/aviewall.php?er=$error");
}
?>
