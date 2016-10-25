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
    include("../php/mainfunction.php");
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
  <section>
    <div class="main">
      <h2>Check student</h2>
      <div id="card">
        <div id="left">
          <a href="<?php echo $data['img_prof']; ?>" target="_blank">
            <img class="profimg" src="<?php echo $data['img_prof']; ?>" alt="" />
          </a>
          <div id="statusnow" class="tstlarge <?php echo $class_status; ?>"><?php echo $text_status; ?></div>
          <div class="change btnpass" id="to2" data-id="<?php echo $data['nationid']; ?>" data-to="2">ผ่าน</div>
          <div class="change btnfail" id="to1" data-id="<?php echo $data['nationid']; ?>" data-to="1">ไม่ผ่าน</div>
        </div>
        <div id="right">
          <h3><?php echo $data['title'].$data['sname']." ".$data['ssurname']." (".$data['nickname'].")"; ?></h3>
          <h4>ข้อมูลส่วนตัว</h4>
          <p>วันเกิด: <?php echo convdate($data['birth']); ?></p>
          <p>ศาสนา: <?php echo $data['religion']; ?></p>
          <p>ที่อยู่: <?php echo $data['address']; ?></p>
          <p>เบอร์โทรศัพท์: <?php echo $data['phone']; ?></p>
          <p>อีเมล: <?php echo $data['email']; ?></p>
          <p>Facebook: <?php echo $data['facebook']; ?></p>
          <p>ชั้น: ม.<?php echo $data['clas']; ?></p>
          <p>โรงเรียน: <?php echo $data['school']; ?></p>
          <p>สายการเรียน: <?php echo $data['program']; ?></p>
          <p>โรคประจำตัว: <?php if (trim($data['disease'], " ") != "") echo $data['disease']; else echo "-"; ?></p>
          <p>ไซส์เสื้อ: <?php echo $data['size']; ?></p>
          <hr>
          <h4>ข้อมูลผู้ปกครอง</h4>
          <p>
            ชื่อผู้ปกครอง:
            <?php echo $data['pname']; ?>
            เบอร์โทรศัพท์:
            <?php echo $data['pphone']; ?>
          </p>
          <p>
            ชื่อบิดา:
            <?php echo $data['fname']; ?>
            เบอร์โทรศัพท์:
            <?php echo $data['fphone']; ?>
          </p>
          <p>
            ชื่อมารดา:
            <?php echo $data['mname']; ?>
            เบอร์โทรศัพท์:
            <?php echo $data['mphone']; ?>
          </p>
          <hr>
          <h4>ข้อมูลอื่นๆ</h4>
          <p>เคยเข้าค่ายกาสะลองหรือไม่: <?php if ($data['went'] == 0) echo "ไม่"; ?>เคย</p>
          <p>เกรดเฉลี่ยรวม: <?php echo $data['gpax']; ?></p>
          <p>เกรดเฉลี่ยเทอมล่าสุด: <?php echo $data['gpa']; ?></p>
          <p>อาชีพที่อยากทำในอนาคต: <?php echo $data['job']; ?></p>
          <p>ความสนใจในเนื้อหา: <?php echo $data['ent']; ?></p>
          <p>คณะ/มหาวิทยาลัยที่อยากเข้า: <?php echo $data['future']; ?></p>
          <hr>
          <h4>คำถาม</h4>
          <p>1. สาเหตุที่สมัครค่ายและสิ่งที่คาดหวังว่าจะได้รับ</p>
          <p><?php echo $data['ans1']; ?></p>
        </div>
      </div>
    </div>
  </section>
  <span id="st" data-id="<?php echo $data['nationid']; ?>"><?php echo $status; ?></span>
  <script src="../js/admin.js"></script>
</body>
</html>
