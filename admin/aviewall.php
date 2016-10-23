<?php
session_start();
if (!isset($_SESSION['admin']) || ($_SESSION['admin'] != "pen_pineapple_apple_pen")) {
  header("Location: login.php");
}
include("../php/connect.php");
$sql_state = "SELECT * FROM `state` ORDER BY `name` ASC";
$state = $conn->query($sql_state);
?>
<!DOCTYPE html>
<html>
<head>
  <title>Kasalong Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/admin.css" type="text/css">
  <script src="../js/jquery.min.js"></script>
</head>
<body>
  <?php include("nav-inc.html"); ?>
  <section>
    <div class="main">
      <h2>Control Panel</h2>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <th>Name</th>
          <th>Type</th>
          <th>Content</th>
          <th width="50">&nbsp;</th>
        </tr>
        <?php while ($row_state = $state->fetch_array()) { ?>
        <tr>
          <td><?php echo $row_state['name'] ?></td>
          <td><?php echo $row_state['content_type'] ?></td>
          <td><?php echo $row_state['content'] ?></td>
          <td align="right"><a class="btncheck" href="#">Edit</a></td>
        </tr>
        <?php } ?>
      </table>
    </div>
  </section>
</body>
</html>
