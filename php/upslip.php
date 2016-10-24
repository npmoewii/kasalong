<?php include("connect.php"); ?>
<?php 
if(isset($_POST['btn-submit'])){
    $nid= $_POST['#nationid'];
	$sql = "SELECT * FROM slip WHERE nationid = '$nid'";
	$result = $conn->query($sql);
	$count = $result->num_rows;
	if ($count == 0) { 
	   
	}
	else{
		
	}

    
}
?>