<?php
session_start();
if (!isset($_SESSION['admin']) || ($_SESSION['admin'] != "pen_pineapple_apple_pen")) {
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
  <title>Staff list - Kasalong Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/admin.css" type="text/css">
  <script src="../js/jquery.min.js"></script>
</head>
<body>
  <?php include("nav-inc.html"); ?>
  <div class="main">
    <h1>Kasalong Admin</h1>
    <h2>Show student information / Check student <a href="aviewall.php">[Back]</a></h2>
    <table>
      <tr>
        <th>ชื่อ-นามสกุล</th>
        <th>ชื่อเล่น</th>
        <th>สถานะ</th>
        <th>ตรวจสอบ</th>
      </tr>
      <tr>
        <td>นาย สมศักดิ์ รักเรียน</td>
        <td>ศักดิ์</td>
        <td align="center"><div class="tred">ไม่ผ่าน</div></td>
        <td><a href="check_stu1.php">[Check]</a></td>
      </tr>
      <tr>
        <td>นส. สมศรี หนีเรียน</td>
        <td>ศรี</td>
        <td align="center"><div class="tgreen">ผ่าน</div></td>
        <td>[Check]</td>
      </tr>
      <tr>
        <td>นาย สมชาย ใฝ่เรียน</td>
        <td>ชาย</td>
        <td align="center"><div class="tgreen">ผ่าน</div></td>
        <td>[Check]</td>
      </tr>
      <tr>
        <td>นาย สมโภชณ์ โดดเรียน</td>
        <td>โภช</td>
        <td align="center"><div class="tred">ไม่ผ่าน</div></td>
        <td>[Check]</td>
      </tr>
      <tr>
        <td>นาย สมหญิง วิ่งเรียน</td>
        <td>หญิง</td>
        <td align="center"><div class="tgreen">ผ่าน</div></td>
        <td>[Check]</td>
      </tr>
      <tr>
        <td>นส. สมทรง คงเรียน</td>
        <td>ทรง</td>
        <td align="center"><div class="tblue">ยังไม่ตรวจสอบ</div></td>
        <td>[Check]</td>
      </tr>
      <tr>
        <td>นาย สมปอง ลองเรียน</td>
        <td>ปอง</td>
        <td align="center"><div class="tblue">ยังไม่ตรวจสอบ</div></td>
        <td><a href="check_stu1.php">[Check]</a></td>
      </tr>
    </table>
  </div>
</body>
</html>
