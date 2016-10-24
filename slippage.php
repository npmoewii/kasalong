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
			url: 'php/checkexist.php',
			data: { tt: nid },
			success: function(response) {
				//alert(response);
				if(response==true){
					document.getElementById("indicator").innerHTML = "<img src='valid.png'>";
					$("#ups").fadeIn(1000);
					$("#sub").fadeIn(1000);
				}
				else{
					document.getElementById("indicator").innerHTML = "<img src='invalid.png'>";
					$("#ups").fadeOut(1000);
					$("#sub").fadeOut(1000);
				}
			}
		});
	}
</script>
<head>
    <title>หน้าส่งสลิปไงละไอน้อง</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <script src="js/jquery.min.js"></script>
</head>
<body>
	<form action="php/upslip.php" method="post" enctype="multipart/form-data">
        กรอกเลขประจำตัวประชาชนก่อนไงละไอน้อง<input type="text" id="nationid" onkeyup="myFunction()">
        <div id="indicator"></div>
        <input id="ups" type="file" name="slipsub" accept=".jpg" required>
        <button id="sub" type="submit" name="btn-submit">Submit</button>
    </form>
</body>
</html>
