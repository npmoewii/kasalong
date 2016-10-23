<?php
session_start();
if (!isset($_SESSION['admin']) || ($_SESSION['admin'] != "pen_pineapple_apple_pen")) {
  header("Location: login.php");
}
if (!isset($_GET['id'])) {
  header("Location: show_staff.php");
}
else {
  $thisid = $_GET['id'];
  include("../php/connect.php");
  $stu = $conn->query("SELECT * FROM `info_staff` WHERE `idstu` = '$thisid'");
  if ($stu->num_rows != 1) {
    header("Location: show_student.php");
  }
  else {
    $data = $stu->fetch_array();
  }
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Show Staff information - Kasalong Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/admin.css" type="text/css">
  <script src="../js/jquery.min.js"></script>
</head>
<body>
  <?php include("nav-inc.html"); ?>
  <section>
    <div class="main">
      <h2>Show Staff Information</h2>
      <div id="card">
        <div id="left">
          <a href="<?php echo $data['img_prof']; ?>">
            <img class="profimg" src="<?php echo $data['img_prof']; ?>" alt="" />
          </a>
        </div>
        <div id="right">
          <h3><?php echo $data['staffname']." ".$data['staffsurname']." (".$data['nickname'].")"; ?></h3>
          <p>คณะ: <?php echo $data['faculty']; ?></p>
          <p>ชั้นปี: <?php echo $data['years']; ?></p>
          <p>
            อาศัยอยู่ที่จังหวัดเชียงราย?:
            <?php
            if ($data['livechr'] == 0) echo "ไม่";
            else if ($data['livechr'] == 1) echo "ใช่";
            ?>
          </p>
          <?php if ($data['goself'] == 0) { ?>
          <p>การเดินทาง: ไปกับทีมงาน</p>
          <p>
            การจ่ายเงิน:
            <?php
            if ($data['paid'] == 0) {
              echo "ยังไม่จ่าย";
            }
            else if ($data['paid'] == 1) {
              echo "จ่ายแล้ว";
            }
            ?>
          </p>
          <?php } else if ($data['goself'] == 1) { ?>
          <p>การเดินทาง: ไปเอง</p>
          <?php } ?>
          <p>ไซส์เสื้อ: <?php echo $data['size']; ?></p>
          <p>เบอร์โทรศัพท์: <?php echo $data['phone']; ?></p>
          <p>Line ID: <?php echo $data['lineid']; ?></p>
          <p>Facebook: <?php echo $data['facebook']; ?></p>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
