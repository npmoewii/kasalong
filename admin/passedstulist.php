<?php
session_start();
if (!isset($_SESSION['admin']) || ($_SESSION['admin'] != "pen_pineapple_apple_pen")) {
  header("Location: login.php");
}
include("../php/connect.php");
$sql_pstudata = "SELECT `title`, `sname`, `ssurname`, `nickname`, `clas`, `nationid`, `pass` FROM `info_student` WHERE `pass` = 2 ORDER BY `nationid` ASC";
$pstudata = $conn->query($sql_pstudata);
$num_pstudata = $pstudata->num_rows;
?>
<!DOCTYPE html>
<html>
<head>
  <title>Passed Student List</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/admin.css" type="text/css">
  <script src="../js/jquery.min.js"></script>
</head>
<body>
  <?php include("nav-inc.html"); ?>
  <div class="main">
    <h2>Passed Student List</h2>
    <table border="0" cellspacing="0" cellpadding="0">
      <tr>
        <th>ชื่อ-นามสกุล</th>
        <th>ชื่อเล่น</th>
        <th width="100">ส่งสลิป</th>
        <th width="100">เช็คสลิป</th>
        <th width="50">&nbsp;</th>
      </tr>
      <?php
      while ($row = $pstudata->fetch_array()) {
        $sql_slip = "SELECT * FROM `slip` WHERE `nationid` = '{$row['nationid']}'";
        $slip = $conn->query($sql_slip);
        $num_slip = $slip->num_rows;
        if ($num_slip == 1) $sent = 1;
        else if ($num_slip == 0) $sent = 0;
        $data_slip = $slip->fetch_array();
      ?>
      <tr>
        <td><?php echo $row['title'].$row['sname']." ".$row['ssurname']; ?></td>
        <td align="center"><?php echo $row['nickname']; ?></td>
        <td>
          <?php if ($sent) {?>
          <div class="tst tgreen">ส่งแล้ว</div>
          <?php } else {?>
          <div class="tst tred">ยังไม่ส่ง</div>
          <?php } ?>
        </td>
        <td>
          <?php
          if (!$sent) {
            echo "<div class=\"tst\">&nbsp</div>";
          }
          else if ($data_slip['recheckslip'] == 0) {
            echo "<div class=\"tst tblue\">ยังไม่ตรวจสอบ</div>";
          }
          else if ($data_slip['recheckslip'] == 1) {
            echo "<div class=\"tst tred\">ไม่ผ่าน</div>";
          }
          else if ($data_slip['recheckslip'] == 2) {
            echo "<div class=\"tst tgreen\">ผ่าน</div>";
          }
          ?>
        </td>
        <td align="right">
          <?php if ($sent) { ?>
          <a class="btncheck" href="check_slip.php?id=<?php echo $row['nationid']; ?>">Check</a>
          <?php } else { echo "&nbsp;"; } ?>
        </td>
      </tr>
      <?php } ?>
    </table>
    จำนวนนักเรียนที่ผ่านทั้งหมด <?php echo $num_pstudata; ?> คน
  </div>
</body>
</html>
