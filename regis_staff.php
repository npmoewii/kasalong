<!DOCTYPE html>
<html>
<head>
  <title>Staff: Register</title>
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
            <div class="title">KASALONG</div>
          </div>
    </nav>
    <div class="navbar"></div>
    <form action="php/add_staff.php" method="POST" enctype="multipart/form-data">
        <p id="head">staff register</p>
        <!--<img alt="profile picture" src=""><br/> -->
        รูปถ่าย<input type="file" name="img_prof" accept=".jpg" required id="pic">
        ชื่อ<input type="text" name="name" placeholder="ชื่อ">
        นามสกุล<input type="text" name="surname" placeholder="นามสกุล" >
        ชื่อเล่น<input type="text" name="nickname" placeholder="ชื่อเล่น">
        รหัสประจำตัวนิสิต<input type="text" name="idstu" placeholder="รหัสประจำตัวนิสิต">
        คณะ<input type="text" name="faculty" placeholder="คณะ">
        <select name="years">
            <option value="1">ปี 1 </option>
            <option value="2">ปี 2 </option>
            <option value="3">ปี 3 </option>
            <option value="4">ปี 4 </option>
        </select><br>
        อาศัยอยู่ที่จังหวัดเชียงราย<select name="livechr" required>
            <option value="true">อาศัยอยู่</option>
            <option value="false">ไม่ได้อยู่</option>
        </select>
        การเดินทาง<select name="goself" required>
            <option value="true">เดินทางไปเอง</option>
            <option value="false">ไปกับทีมงาน</option>
        </select>
        การจ่ายเงิน<select name="paid" required>
            <option value="true">จ่ายแล้ว</option>
            <option value="false">ยังไม่จ่าย</option>
        </select>
        ไซส์เสื้อ<select name="size" required>
            <option value="S">size S</option>
            <option value="M">size M</option>
            <option value="L">size L</option>
            <option value="XL">size XL</option>
            <option value="XXL">size XXL</option>
        </select>
        เบอร์โทรศัพท์<input type="text" name="phone" placeholder="เบอร์โทรศัพท์">
        Line<input type="text" name="lineid" placeholder="Line">
        Facebook<input type="text" name="facebook" placeholder="facebook"><br/>
        <button type="submit" name="btn-submit">Submit</button>
    </form>
      <footer>KASALONG CAMP</footer>
</body>
</html>
