<!DOCTYPE html>
<html>
<head>
  <title>Staff: Register</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/main.css" type="text/css">
  <script src="js/jquery.min.js"></script>
</head>
<body>
    <form action="regis_staff_success.php" method="POST">
        ชื่อ<input type="text" name="name"><br>
        นามสกุล<input type="text" name="surname"><br>
        ชื่อเล่น<input type="text" name="nickname"><br>
        รหัสประจำตัวนิสิต <input type="text" name="idstu"><br>
        คณะ
        <select name="faculty">
            <option value="Engineering">วิศวกรรมศาสตร์</option>
        </select>
        ชั้นปี
        <select name="year">
            <option value="1">ปี 1 </option>
            <option value="2">ปี 2 </option>
            <option value="3">ปี 3 </option>
            <option value="4">ปี 4 </option>
        </select><br>
        Contact<br>
        เบอร์โทรศัพท์มือถือ <input type="text" name="phone"><br>
        Line <input type="text" name="lineid"><br>
        Facebook <input type="text" name="facebook"><br>
        <button type="submit" name="btn-submit">Submit</button>
    </form>
</body>
</html>
