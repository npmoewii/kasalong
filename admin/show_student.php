<?php
session_start();
if (!isset($_SESSION['admin']) || ($_SESSION['admin'] != "pen_pineapple_apple_pen")) {
  header("Location: login.php");
}
include("../php/connect.php");
$sql_studata = "SELECT `title`, `sname`, `ssurname`, `nickname`, `nationid`, `pass` FROM `info_student`";
$studata = $conn->query($sql_studata);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Student list - Kasalong Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/admin.css" type="text/css">
  <script src="../js/jquery.min.js"></script>
</head>
<body onload="updateall()">
  <?php include("nav-inc.html"); ?>
  <div class="main">
    <h1>Kasalong Admin</h1>
    <h2>Show student information / Check student</h2>
    <p>อัพเดตทุกวินาที / อัพเดตเฉพาะข้อมูลจาก database / Database จะแสดงเหนือคำว่า "ตัวอย่าง"</p>
    <table border="0" cellspacing="0" cellpadding="0">
      <tr>
        <th>ชื่อ-นามสกุล</th>
        <th>ชื่อเล่น</th>
        <th>สถานะ</th>
        <th>ตรวจสอบ</th>
      </tr>
      <?php while ($row_studata = $studata->fetch_array()) { ?>
        <tr class="eachrow" data-id="<?php echo $row_studata['nationid']; ?>">
          <td><?php echo $row_studata['title'].$row_studata['sname']." ".$row_studata['ssurname']; ?></td>
          <td><?php echo $row_studata['nickname']; ?></td>
          <td align="center">
            <?php
            $stu_pass1 = $row_studata['pass'];
            if ($stu_pass1 == 0) {
              echo "<div class=\"tst tblue\">ยังไม่ตรวจสอบ</div>";
            }
            else if ($stu_pass1 == 1) {
              echo "<div class=\"tst tred\">ไม่ผ่าน</div>";
            }
            else if ($stu_pass1 == 2) {
              echo "<div class=\"tst tgreen\">ผ่าน</div>";
            }
            ?></td>
          <td align="center"><a class="btncheck" href="check_stu1.php?id=<?php echo $row_studata['nationid']; ?>">Check</a></td>
        </tr>
      <?php } ?>
      <tr>
        <td colspan="4"><span style="text-decoration: underline;">ตัวอย่าง</span></td>
      <tr>
        <td>นาย สมศักดิ์ รักเรียน</td>
        <td>ศักดิ์</td>
        <td align="center"><div class="tst tred">ไม่ผ่าน</div></td>
        <td align="center"><a class="btncheck" href="#">Check</a></td>
      </tr>
      <tr>
        <td>นส. สมศรี หนีเรียน</td>
        <td>ศรี</td>
        <td align="center"><div class="tst tgreen">ผ่าน</div></td>
        <td align="center"><a class="btncheck" href="#">Check</a></td>
      </tr>
      <tr>
        <td>นาย สมชาย ไม่เรียน</td>
        <td>ชาย</td>
        <td align="center"><div class="tst tgreen">ผ่าน</div></td>
        <td align="center"><a class="btncheck" href="#">Check</a></td>
      </tr>
      <tr>
        <td>นาย สมโภชณ์ โดดเรียน</td>
        <td>โภช</td>
        <td align="center"><div class="tst tred">ไม่ผ่าน</div></td>
        <td align="center"><a class="btncheck" href="#">Check</a></td>
      </tr>
      <tr>
        <td>นาย สมหญิง วิ่งเรียน</td>
        <td>หญิง</td>
        <td align="center"><div class="tst tgreen">ผ่าน</div></td>
        <td align="center"><a class="btncheck" href="#">Check</a></td>
      </tr>
      <tr>
        <td>นส. สมทรง คงเรียน</td>
        <td>ทรง</td>
        <td align="center"><div class="tst tblue">ยังไม่ตรวจสอบ</div></td>
        <td align="center"><a class="btncheck" href="#">Check</a></td>
      </tr>
      <tr>
        <td>นาย สมปอง ลองเรียน</td>
        <td>ปอง</td>
        <td align="center"><div class="tst tblue">ยังไม่ตรวจสอบ</div></td>
        <td align="center"><a class="btncheck" href="#">Check</a></td>
      </tr>
      <tr>
        <td>นาย สมหมาย ใฝ่เรียน</td>
        <td>หมาย</td>
        <td align="center"><div class="tst tblue">ยังไม่ตรวจสอบ</div></td>
        <td align="center"><a class="btncheck" href="#">Check</a></td>
      </tr>
    </table>
  </div>
  <div id="st"></div>
  <script src="../js/adminajax.js"></script>
</body>
</html>
