<?php
session_start();
if (!isset($_SESSION['admin']) || ($_SESSION['admin'] != "pen_pineapple_apple_pen")) {
  header("Location: login.php");
}
include("connect.php");
$thisstate = $_POST['name'];
$sql_state = "SELECT * FROM `state` WHERE `name` = '$thisstate'";
$state = $conn->query($sql_state);
if ($state->num_rows == 1) {
  $type = $_POST['type'];
  if ($type == "manual") {
    $content = $_POST['manual'];
    if (($content == 0) || ($content == 1)) {
      $conn->query("UPDATE `state` SET `content_type` = 'manual', `content` = '$content' WHERE `name` = '$thisstate'");
    }
  }
  else if ($type == "auto") {
    $automode = $_POST['auto'];
    if ($automode == "before") {
      $beforedate = $_POST['beforedate'];
      $content = "before ".$beforedate;
      $conn->query("UPDATE `state` SET `content_type` = 'auto', `content` = '$content' WHERE `name` = '$thisstate'");
    }
    else if ($automode == "after") {
      $afterdate = $_POST['afterdate'];
      $content = "after ".$afterdate;
      $conn->query("UPDATE `state` SET `content_type` = 'auto', `content` = '$content' WHERE `name` = '$thisstate'");
    }
    else if ($automode == "between") {
      $betweendate1 = $_POST['betweendate1'];
      $betweendate2 = $_POST['betweendate2'];
      $content = "between ".$betweendate1." ".$betweendate2;
      $conn->query("UPDATE `state` SET `content_type` = 'auto', `content` = '$content' WHERE `name` = '$thisstate'");
    }
  }
}
header("Location: ../admin/aviewall.php");
?>
