<!DOCTYPE html>
<html>
<head>
  <title>Staff Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/main.css" type="text/css">
  <link rel="stylesheet" href="css/regis_staff.css" type="text/css">
  <script src="js/jquery.min.js"></script>
</head>
<body>
    <nav>
        <div class="navbar">
          <div class="heading">
            <div class="title"><a href="index.php">KASALONG</a></div>
          </div>
    </nav>
    <div class="navbar"></div>
    <form action="php/add_staff.php" method="post" enctype="multipart/form-data">
        <p id="head">staff registration</p>
        <label>รูปถ่าย (ขนาดไม่เกิน 1 MB) <input type="file" name="img_prof" accept="image/*" required id="pic"></label>
        <label>ชื่อ<input type="text" name="name" maxlength="50" placeholder="ชื่อ"></label>
        <label>นามสกุล<input type="text" name="surname" maxlength="50" placeholder="นามสกุล" ></label>
        <label>ชื่อเล่น<input type="text" name="nickname" maxlength="30" placeholder="ชื่อเล่น"></label>
        <label>รหัสประจำตัวนิสิต<input type="text" name="idstu" maxlength="10" placeholder="รหัสประจำตัวนิสิต"></label>
        <label>คณะ<input type="text" name="faculty" maxlength="50" placeholder="คณะ"></label>
        <select name="years" required>
            <option value="">เลือก:</option>
            <option value="1">ปี 1 </option>
            <option value="2">ปี 2 </option>
            <option value="3">ปี 3 </option>
            <option value="4">ปี 4 </option>
        </select><br>
        อาศัยอยู่ที่จังหวัดเชียงราย<select name="livechr" required>
            <option value="">เลือก:</option>
            <option value="true">อาศัยอยู่</option>
            <option value="false">ไม่ได้อยู่</option>
        </select>
        การเดินทาง
        <select name="goself" required>
            <option value="">เลือก:</option>
            <option value="true">เดินทางไปเอง</option>
            <option value="false">ไปกับทีมงาน</option>
        </select>
        การจ่ายเงิน
        <select name="paid" required>
            <option value="">เลือก:</option>
            <option value="true">จ่ายแล้ว</option>
            <option value="false">ยังไม่จ่าย</option>
        </select>
        ขนาดเสื้อ
        <select name="size" required>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            <option value="XXL">XXL</option>
        </select>
        <label>เบอร์โทรศัพท์<input type="text" name="phone" maxlength="10" placeholder="เบอร์โทรศัพท์"></label>
        <label>Line<input type="text" name="lineid" maxlength="30" placeholder="Line ID"></label>
        <label>Facebook<input type="text" name="facebook" maxlength="100" placeholder="Facebook"></label><br/>
        <button type="submit" name="btn-submit">Submit</button>
    </form>
    <footer>KASALONG CAMP</footer>
</body>
</html>
