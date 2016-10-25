<?php include("connect.php"); ?>
<?php
	$nid=$_POST['tt'];
	$sql = "SELECT * FROM info_student WHERE nationid = '$nid'";
	$result = $conn->query($sql);
	$count = $result->num_rows;
	if ($count == 0) {
	   echo 0;
	}
	else{
		$sql_checkpass = "SELECT * FROM `info_student` WHERE `nationid` = '$nid' AND `pass` = 2";
		$checkpass = $conn->query($sql_checkpass);
		if ($checkpass->num_rows == 0) {
			echo 1;
		}
		else {
			echo 2;
		}
	}
?>
