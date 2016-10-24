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
				//alert(response);
				if(response==true){
					document.getElementById("indicator").innerHTML = "<img src='img/valid.png'><br/>ผา่น";
					$("#ups").fadeIn(1000);
					$("#sub").fadeIn(1000);
				}
				else{
					document.getElementById("indicator").innerHTML = "<img src='img/invalid.png'><br/>ไม่ผ่าน";
					$("#ups").fadeOut(1000);
					$("#sub").fadeOut(1000);
				}
			}
		});
	}
</script>
<head>
    <title>ส่งสลิป</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/slip.css" type="text/css">
    <link rel="stylesheet" href="css/main.css" type="text/css">
    <script src="js/jquery.min.js"></script>
</head>
<body>
	<div id="container">
    <div id="conte">
    <div id="hea">ใส่รหัสบัตรประชาชนเพื่อยืนยันสลิป</div>
        <form id="ff" action="php/upslip.php" method="post" enctype="multipart/form-data" onkeypress="return event.keyCode != 13;">
            <input type="text" id="nationid" onkeyup="myFunction()" autocomplete="off" name="nationid" required>
            <div id="indicator"></div>
            <input id="ups" type="file" name="slipsub" accept="*.*" required>
            <button id="sub" type="submit" name="btn-submit">Submit</button>
         </form>
     </div>
     </div>
</body>
</html>
