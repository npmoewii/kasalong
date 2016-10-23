<?php
session_start();
if (!isset($_SESSION['admin']) || ($_SESSION['admin'] != "pen_pineapple_apple_pen")) {
  header("Location: login.php");
}
include("../php/connect.php");
$sql_staffdata = "SELECT * FROM `info_staff` ORDER BY `idstu` ASC";
$staffdata = $conn->query($sql_staffdata);
$num_staffdata = $staffdata->num_rows;
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
  <section>
    <div class="main">
      <h2>Staff List</h2>
      <table border="0" cellspacing="0" cellpadding="0">
        <tr>
          <th>ชื่อ-นามสกุล</th>
          <th>ชื่อเล่น</th>
          <th>คณะ</th>
          <th>ชั้นปี</th>
          <th width="50">&nbsp;</th>
        </tr>
        <?php while ($row_staffdata = $staffdata->fetch_array()) { ?>
        <tr>
          <td><?php echo $row_staffdata['staffname']." ".$row_staffdata['staffsurname']; ?></td>
          <td align="center"><?php echo $row_staffdata['nickname']; ?></td>
          <td align="center"><?php echo $row_staffdata['faculty']; ?></td>
          <td align="center"><?php echo $row_staffdata['years'] ?></td>
          <td align="right">
            <a class="btncheck" href="check_staff.php?id=<?php echo $row_staffdata['idstu']; ?>">Show</a>
          </td>
        </tr>
        <?php } ?>
      </table>
      จำนวนผู้สมัครทั้งหมด <?php echo $num_staffdata; ?> คน
    </div>
  </section>
</body>
</html>
