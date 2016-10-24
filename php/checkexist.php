<?php include("connect.php"); ?>
<?php 
	$nid=$_POST['tt'];
	$sql = "SELECT * FROM info_student WHERE nationid = '$nid'";
	$result = $conn->query($sql);
	$count = $result->num_rows;
	if ($count == 0) { 
	   echo false;
	}
	else{
		echo true;
	}
?>