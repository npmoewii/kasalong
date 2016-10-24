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
  if (!file_exists("../img/slips")) {
    mkdir("../img/slips", 0766);
  }
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
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <script type="text/javascript">
  alert("<?php echo $res; ?>");
  window.location.href='../slippage.php';
  </script>
</head>
</html>
<?php
	}
}
?>
