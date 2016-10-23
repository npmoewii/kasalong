<?php
include("connect.php");
function convdate($datetime) {
  $dt = explode("-", $datetime);
  $y = $dt[0] + 543;
  $m = trim($dt[1], "0");
  $d = trim($dt[2], "0");
  $mlist = array(1=>"มกราคม", "กุมภาพันธ์", "มีนาคม", "เมษายน",
                 "พฤษภาคม", "มิถุนายน", "กรกฎาคม", "สิงหาคม",
                 "กันยายน", "ตุลาคม", "พฤศจิกายน", "ธันวาคม");
  return $d." ".$mlist[$m]." ".$y;
}
function checkstate($name) {
  $sql_check = "SELECT * FROM `state` WHERE `name` = '$name'";
  $check = $GLOBALS['conn']->query($sql_check);
  $data = $check->fetch_array();
  if ($data['content_type'] == "auto") {
    $content = explode(" ", $data['content']);
    $now = date("Y-m-d");
    if ($content[0] == "before") {
      if ($now <= $content[1]) {
        return true;
      }
      else {
        return false;
      }
    }
    else if ($content[0] == "after") {
      if ($now >= $content[1]) {
        return true;
      }
      else {
        return false;
      }
    }
    else if ($content[0] == "between") {
      if (($now >= $content[1]) && ($now <= $content[2])) {
        return true;
      }
      else {
        return false;
      }
    }
  }
  else if ($data['content_type'] == "manual") {
    $content = $data['content'];
    if ($content == 0) {
      return false;
    }
    else if ($content == 1) {
      return true;
    }
  }
}
?>
