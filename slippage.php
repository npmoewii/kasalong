<!DOCTYPE html>
<html>
<script>
	window.onload = function(){
	 $("#ups").hide();
	 $("#sub").hide();
	}
	function myFunction() {
		var ob = document.getElementById("nationid");
		var nid = ob.value;
		$.ajax({
			type: 'POST',
			async: true,
			url: 'php/checkexist.php',
			data: { tt: nid },
			success: function(response) {
				if(response==2){
					document.getElementById("indicator").innerHTML = "<img src='img/valid.png'><br/>ผ่าน";
					$("#ups").fadeIn(1000);
					$("#sub").fadeIn(1000);
				}
				else if (response == 1){
					document.getElementById("indicator").innerHTML = "<img src='img/invalid.png'><br/>ไม่ผ่าน";
					$("#ups").fadeOut(1000);
					$("#sub").fadeOut(1000);
				}
				else {
					document.getElementById("indicator").innerHTML = "<img src='img/invalid.png'><br/>ไม่พบข้อมูลในระบบ";
					$("#ups").fadeOut(1000);
					$("#sub").fadeOut(1000);
				}
			}
		});
	}
</script>
<head>
    <title>ประกาศผล</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/slip.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <script src="js/jquery.min.js"></script>
</head>
<body>
	<nav>
			<div class="navbar">
				<div class="heading">
					<div class="title"><a href="index.php">KASALONG</a></div>
				</div>
	</nav>
	<div id="container">
    <div id="conte">
    <div id="hea">กรอกเลขประจำตัวประชาชนเพื่อดูประกาศผลและยืนยันสลิป</div>
        <form id="ff" action="php/upslip.php" method="post" enctype="multipart/form-data" onkeypress="return event.keyCode != 13;">
            <input type="text" id="nationid" onkeyup="myFunction()" autocomplete="off" name="nationid" required>
            <div id="indicator"></div>
            <input id="ups" type="file" name="slipsub" accept="image/*" required>
            <button id="sub" type="submit" name="btn-submit">Submit</button>
         </form>
     </div>
     </div>
</body>
</html>
