<?php
session_start();
if (!isset($_SESSION['admin']) || ($_SESSION['admin'] != "pen_pineapple_apple_pen")) {
  header("Location: login.php");
}
if (!isset($_GET['id'])) {
  header("Location: passedstulist.php");
}
else {
  $thisid = $_GET['id'];
  include("../php/connect.php");
  $slip = $conn->query("SELECT * FROM `slip` WHERE `nationid` = '$thisid'");
  if ($slip->num_rows != 1) {
    header("Location: passedstulist.php");
  }
  else {
    $data_slip = $slip->fetch_array();
    $status = $data_slip['recheckslip'];
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
    $stu = $conn->query("SELECT * FROM `info_student` WHERE `nationid` = '$thisid'");
    $data_stu = $stu->fetch_array();
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Check Slip - Kasalong Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/admin.css" type="text/css">
  <script src="../js/jquery.min.js"></script>
</head>
<body>
  <?php include("nav-inc.html"); ?>
  <section>
    <div class="main">
      <h2>Check slip</h2>
      <h3 align="center">ชื่อ:
        <?php echo $data_stu['title'].$data_stu['sname']." ".$data_stu['ssurname']." (".$data_stu['nickname'].")"; ?>
      </h3>
      <p align="center">
        <a href="../img/slips/<?php echo $data_slip['img_slip']; ?>" target="_blank">
          <img class="slipimg" src="../img/slips/<?php echo $data_slip['img_slip']; ?>" alt="" />
        </a>
      </p>
      <div id="statusnow" class="tstlarge <?php echo $class_status; ?>"><?php echo $text_status; ?></div>
      <div class="change2 btnpass" id="to2" data-id="<?php echo $data_stu['nationid']; ?>" data-to="2">ผ่าน</div>
      <div class="change2 btnfail" id="to1" data-id="<?php echo $data_stu['nationid']; ?>" data-to="1">ไม่ผ่าน</div>
    </div>
  </section>
  <span id="st" data-id="<?php echo $data_stu['nationid']; ?>"><?php echo $status; ?></span>
  <script src="../js/admin.js"></script>
</body>
</html>
