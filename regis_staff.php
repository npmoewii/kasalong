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
<<<<<<< HEAD
<body>
=======
<!--<<<<<< HEAD-->
<body>
<!--=======
<<<<<< HEAD>-->
<body>
<!--=======
>>>>>>> origin/master-->
>>>>>>> 3f7279f0259714127d9cdf9c363b27eddeffbf33
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
        <input type="file" name="img_prof" accept=".jpg" required id="pic">
        <input type="text" name="name" placeholder="ชื่อ">
        นามสกุล
        <input type="text" name="surname" placeholder="นามสกุล" >
        ชื่อเล่น
        <input type="text" name="nickname" placeholder="ชื่อเล่น">
        รหัสประจำตัวนิสิต
        <input type="text" name="idstu" placeholder="รหัสประจำตัวนิสิต">
        คณะ
        <input type="text" name="faculty" placeholder="คณะ">
        ชั้นปีที่
        <select name="year">
            <option value="1">ปี 1 </option>
            <option value="2">ปี 2 </option>
            <option value="3">ปี 3 </option>
            <option value="4">ปี 4 </option>
        </select><br>
        อาศัยอยู่ที่จังหวัดเชียงราย
        <select name="livechr" required>
            <option value="true">อาศัยอยู่ที่เชียงราย</option>
            <option value="false">ไม่ได้อาศัยอยู่ที่เชียงราย</option>
        </select>
        <select name="goself" required>
            <option value="true">เดินทางไปเอง</option>
            <option value="false">ไปกับทีมงาน</option>
        </select>
        <select name="paid" required>
            <option value="true">จ่ายแล้ว</option>
            <option value="false">ยังไม่จ่าย</option>
        </select>
        <select name="size" required>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            <option value="XXL">XXL</option>
        </select>
        เบอร์โทรศัพท์
        <input type="text" name="phone" placeholder="เบอร์โทรศัพท์">
        Line
        <input type="text" name="lineid" placeholder="Line">
        Facebook
        <input type="text" name="facebook" placeholder="facebook"><br/>
        <button type="submit" name="btn-submit">Submit</button>
    </form>
      <footer>KASALONG CAMP</footer>
</body>
</html>
