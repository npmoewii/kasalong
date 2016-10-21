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
<<<<<<< HEAD
<body>
    <form action="php/add_staff.php" method="POST" enctype="multipart/form-data">
        อัพโหลดรูปโปรไฟล์ <input type="file" name="img_prof" accept=".jpg" required><br>
        ชื่อ<input type="text" name="name"><br>
        นามสกุล<input type="text" name="surname"><br>
        ชื่อเล่น<input type="text" name="nickname"><br>
        รหัสประจำตัวนิสิต <input type="text" name="idstu"><br>
        คณะ
        <select name="faculty">
            <option value="Engineering">วิศวกรรมศาสตร์</option>
        </select>
        ชั้นปี
        <select name="years">
=======
>>>>>>> origin/master
    <nav>
        <div class="navbar">
          <div class="heading">
            <div class="title">KASALONG</div>
          </div>
    </nav>
    <div class="navbar"></div>
    <form action="php/add_staff.php" method="POST">
        <p id="head">staff register</p>
        <!--<img alt="profile picture" src=""><br/> -->
        <input type="file" name="img_prof" required id="pic">        
        <input type="text" name="name" placeholder="ชื่อ">
        <input type="text" name="surname" placeholder="นามสกุล" >
        <input type="text" name="nickname" placeholder="ชื่อเล่น">        
        <input type="text" name="idstu" placeholder="รหัสประจำตัวนิสิต">
        <select name="faculty"> 
            <option value="Engineering">วิศวกรรมศาสตร์</option>
        </select>
        <select name="year">
>>>>>>> origin/master
            <option value="1">ปี 1 </option>
            <option value="2">ปี 2 </option>
            <option value="3">ปี 3 </option>
            <option value="4">ปี 4 </option>
<<<<<<< HEAD
        </select><br>
        อาศัยอยู่ที่เชียงราย
        <select name="livechr" required>
            <option value="true">ใช่</option>
            <option value="false">ไม่ใช่</option>
        </select><br>
        การเดินทาง
        <select name="goself" required>
            <option value="true">เดินทางไปเอง</option>
            <option value="false">ไปกับทีมงาน</option>
        </select><br>
        การจ่ายเงิน
        <select name="paid" required>
            <option value="true">จ่ายแล้ว</option>
            <option value="false">ยังไม่จ่าย</option>
        </select><br>
        ไซส์เสื้อ
        <select name="size" required>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            <option value="XXL">XXL</option>
        </select><br>
        Contact<br>
        เบอร์โทรศัพท์มือถือ <input type="text" name="phone"><br>
        Line <input type="text" name="lineid"><br>
        Facebook <input type="text" name="facebook"><br>
        <button type="submit" name="btn-submit">Submit</button>
=======
        </select>
        <input type="text" name="phone" placeholder="เบอร์โทรศัพท์">
        <input type="text" name="lineid" placeholder="Line">
        <input type="text" name="facebook" placeholder="facebook"><br/>
        <button type="submit" name="btn-submit">Submit</button>              
>>>>>>> origin/master
    </form>
      <footer>KASALONG CAMP</footer>
</body>
</html>
