<?php
session_start();
if (!isset($_SESSION['admin']) || ($_SESSION['admin'] != "pen_pineapple_apple_pen")) {
  header("Location: login.php");
}
if (!isset($_GET['id'])) {
  header("Location: show_student.php");
}
else {
  $thisid = $_GET['id'];
  include("../php/connect.php");
  $stu = $conn->query("SELECT * FROM `info_student` WHERE `nationid` = '$thisid'");
  if ($stu->num_rows != 1) {
    header("Location: show_student.php");
  }
  else {
    $data = $stu->fetch_array();
    $status = $data['pass'];
    if ($status == 0) {
      $class_status = "tblue";
      $text_status = "ยังไม่ตรวจสอบ";
    }
    else if ($status == 1) {
      $class_status = "tred";
      $text_status = "ไม่ผ่าน";
    }
    else if ($status == 2) {
      $class_status = "tgreen";
      $text_status = "ผ่าน";
    }
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Check student - Kasalong Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/admin.css" type="text/css">
  <script src="../js/jquery.min.js"></script>
</head>
<body>
  <?php include("nav-inc.html"); ?>
  <div class="main">
    <h2>Check student</h2>
    <div id="card">
      <div id="left">
        <img width="200" height="250" style="background-color: #ccc;" alt="" />
        <div id="statusnow" class="tstlarge <?php echo $class_status; ?>"><?php echo $text_status; ?></div>
        <div class="change btnpass" id="to2" data-id="<?php echo $data['nationid']; ?>" data-to="2">ผ่าน</div>
        <div class="change btnfail" id="to1" data-id="<?php echo $data['nationid']; ?>" data-to="1">ไม่ผ่าน</div>
      </div>
      <div id="right">
        <h3><?php echo $data['title'].$data['sname']." ".$data['ssurname']." (".$data['nickname'].")"; ?></h3>
      </div>
    </div>
  </div>
  <span id="st" data-id="<?php echo $data['nationid']; ?>"><?php echo $status; ?></span>
  <script src="../js/admin.js"></script>
</body>
</html>
