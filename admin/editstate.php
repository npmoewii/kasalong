<?php
session_start();
if (!isset($_SESSION['admin']) || ($_SESSION['admin'] != "pen_pineapple_apple_pen")) {
  header("Location: login.php");
}
include("../php/connect.php");
$thisstate = $_GET['name'];
$sql_state = "SELECT * FROM `state` WHERE `name` = '$thisstate'";
$state = $conn->query($sql_state);
if ($state->num_rows == 0) {
  header("Location: aviewall.php");
}
else {
  $data_state = $state->fetch_array();
  $type = $data_state['content_type'];
  if ($type == "auto") {
    $content = explode(" ", $data_state['content']);
    $automode = $content[0];
    if ($automode == "between") {
      $date1 = $content[1];
      $date2 = $content[2];
    }
    else {
      $date = $content[1];
    }
  }
  else {
    $content = $data_state['content'];
  }
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
      <h2>Edit state: <?php echo $thisstate; ?></h2>
      <form action="../php/aeditstate.php" method="post">
        <p>&nbsp;</p>
        <h3>
          <label id="ch_manual"><input type="radio" name="type" value="manual"<?php if ($type == "manual") echo " checked"; ?>> <strong>Manual</strong></label>
        </h3>
        <div class="in<?php if ($type == "auto") echo " hidden"; ?>" id="manual">
          <select name="manual">
            <option value="0"<?php if (($type == "manual") && ($content == 0)) echo " selected"; ?>>Disabled</option>
            <option value="1"<?php if (($type == "manual") && ($content == 1)) echo " selected"; ?>>Enabled</option>
          </select>
        </div>
        <p>&nbsp;</p>
        <h3>
          <label id="ch_auto"><input type="radio" name="type" value="auto"<?php if ($type == "auto") echo " checked"; ?>> <strong>Automatic</strong></label>
        </h3>
        <div class="in<?php if ($type == "manual") echo " hidden"; ?>" id="auto">
          <p>
            <label><input type="radio" name="auto" id="before" value="before"<?php if (($type == "auto") && ($automode == "before")) echo " checked"; ?>> Before date</label>
            <input type="date" id="beforedate" name="beforedate"<?php if (($type == "auto") && ($automode == "before")) echo " value=\"$date\""; else echo " disabled"; ?>>
          </p>
          <p>
            <label><input type="radio" name="auto" id="after" value="after"<?php if (($type == "auto") && ($automode == "after")) echo " checked"; ?>> After date</label>
            <input type="date" name="afterdate" id="afterdate"<?php if (($type == "auto") && ($automode == "after")) echo " value=\"$date\""; else echo " disabled"; ?>>
          </p>
          <p>
            <label><input type="radio" name="auto" id="between" value="between"<?php if (($type == "auto") && ($automode == "between")) echo " checked"; ?>> From date</label>
            <input type="date" name="betweendate1" id="betweendate1"<?php if (($type == "auto") && ($automode == "between")) echo " value=\"$date1\""; else echo " disabled"; ?>>
            to <input type="date" name="betweendate2" id="betweendate2"<?php if (($type == "auto") && ($automode == "between")) echo " value=\"$date2\""; else echo " disabled"; ?>>
          </p>
        </div>
        <input type="hidden" name="name" value="<?php echo $thisstate; ?>">
        <button type="submit">Submit</button>
      </form>
    </div>
  </section>
  <script src="../js/aeditstate.js"></script>
</body>
</html>
