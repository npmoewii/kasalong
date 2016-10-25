<?php
session_start();
if (!isset($_SESSION['admin']) || ($_SESSION['admin'] != "pen_pineapple_apple_pen")) {
  header("Location: login.php");
}
include("../php/connect.php");
$sql_state = "SELECT * FROM `state` WHERE `name` != 'adminpw' ORDER BY `name` ASC";
$state = $conn->query($sql_state);
if (isset($_GET['er'])) {
  $er = $_GET['er'];
}
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
          <td align="right"><a class="btncheck" href="editstate.php?name=<?php echo $row_state['name']; ?>">Edit</a></td>
        </tr>
        <?php } ?>
      </table>
      <h2>Change Password</h2>
      <?php
      if (isset($er) && ($er == 0)) echo "Password have been changed successfully.";
      else if (isset($er) && ($er == 1)) echo "Incorrect current password.";
      else if (isset($er) && ($er == 2)) echo "New password and Confirm password doesn't match.";
      ?>
      <form action="../php/achangepw.php" method="post">
        <label>Current Password: <input type="password" name="oldpwd" maxlength="30" value=""></label><br>
        <label>New Password: <input type="password" name="newpwd" maxlength="30" value=""></label><br>
        <label>Confirm Password: <input type="password" name="conpwd" maxlength="30" value=""></label><br>
        <input type="hidden" name="request" value="achangepassword">
        <button type="submit" name="button">Change</button>
      </form>
    </div>
  </section>
  <script src="../js/admin.js"></script>
</body>
</html>
