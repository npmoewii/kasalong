<?php include("connect.php"); ?>

<?php 
if(isset($_POST['btn-submit'])){
    $nid= $_POST['nationid'];
	$imgdir = "../img/slips/";
	$arrs = explode(".",$_FILES['slipsub']['name']);
	$imgtype = $arrs[1];
	$imgname = "slip_".$_POST['nationid'].".".$imgtype;
	$sql = "SELECT * FROM slip WHERE nationid = '$nid'";
	$result = $conn->query($sql);
	$count = $result->num_rows;
	$res;
	if(move_uploaded_file($_FILES['slipsub']['tmp_name'],$imgdir.$imgname)){
		if ($count == 0) 
			$sql = "INSERT into slip VALUES ('$nid','$imgname',false)";
		else
			$sql = "UPDATE slip SET img_slip = '$imgname' WHERE nationid = '$nid'";
			
		if($conn->query($sql)){
			$res = "อัพโหลดสลิปสำเร็จ จะกลับไปหน้าเดิม";
		}
		else{
			unlink("img/slips/".$imgname);
			$res = "ERROR!: ".$conn->error;
		}
		echo "<script>
		alert('$res');
		window.location.href='../slippage.php';
		</script>";
	}
}
?>