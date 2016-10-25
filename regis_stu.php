<?php
include("php/mainfunction.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Student Registration</title>
    <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/main.css" type="text/css">
  <link rel="stylesheet" href="css/regis_stu.css" type="text/css">
  <script src="js/jquery.min.js"></script>
</head>
<body>
    <div class="hrrr"></div>
    <nav>
        <div class="navbar">
          <div class="heading">
            <div class="title"><a href="index.php">KASALONG</a></div>
          </div>
    </nav>
    <hr class="hrrr">
    <?php if (checkstate("register")) { ?>
    <form action="php/add_stu.php" method="post" enctype="multipart/form-data">
      <div class="section">
        <p class="head" id="personalhead">ข้อมูลส่วนตัว</p>
        <div id="personalinfo" style="display:none;">
          อัพโหลดรูปส่วนตัว <input type="file" name="img_prof" accept=".jpg" required><br>
          คำนำหน้าชื่อ
          <select name="title" required>
              <option value="">เลือก:</option>
              <option value="นาย">นาย</option>
              <option value="นางสาว">นางสาว</option>
              <option value="ด.ช.">ด.ช.</option>
              <option value="ด.ญ.">ด.ญ.</option>
          </select>
          ชื่อ <input type="text" name="sname" maxlength="50" required>
          นามสกุล <input type="text" name="ssurname" maxlength="50" required>
          ชื่อเล่น <input type="text" name="nickname" maxlength="30" required>
          วันเกิด <input type="date" name="birth" required>
          เลขประจำตัวประชาชน <input type="text" name="nationid" id="nationid" maxlength="13" required>
          ศาสนา
          <select name="region" required>
              <option value="">เลือก:</option>
              <option value="พุทธ">พุทธ</option>
              <option value="คริสต์">คริสต์</option>
              <option value="อิสลาม">อิสลาม</option>
              <option value="อิสลาม">อื่นๆ</option>
          </select><br>
          ที่อยู่ <br>
          <div class="comment-text-area">
              <textarea class="textinput" rows="10" cols="60" name="address" required></textarea><br>
          </div>
          <hr class="hrr" color=#fff >
          เบอร์โทรศัพท์ <input type="tel" name="stel" id="stel" maxlength="10" required><br>
          E-mail <input type="email" name="email" maxlength="50"><br>
          Facebook <input type="text" name="facebook" maxlength="100"><br>
          ระดับชั้น
          <select name="clas" required>
              <option value="">เลือก:</option>
              <option value="4">มัธยมศึกษาปีที่ 4</option>
              <option value="5">มัธยมศึกษาปีที่ 5</option>
              <option value="6">มัธยมศึกษาปีที่ 6</option>
          </select><br>
          โรงเรียน <input type="text" name="school" maxlength="50" required><br>
          แผนการเรียน <input type="text" name="program" maxlength="30"><br>
          อาหารที่แพ้/โรคประจำตัว <input type="text" name="disease"><br>
          ไซส์เสื้อ
          <select name="size" required>
            <option value="">เลือก:</option>
              <option value="S">S</option>
              <option value="M">M</option>
              <option value="L">L</option>
              <option value="XL">XL</option>
              <option value="XXL">XXL</option>
          </select><br>
        </div>
      </div>
      <div class="section">
        <p class="head" id="parenthead">ข้อมูลผู้ปกครอง</p>
        <div id="parentinfo" style="display:none;">
          ชื่อ-สกุล ผู้ปกครอง <input type="text" name="pname" maxlength="100" required><br>
          เบอร์โทรศัพท์ผู้ปกครอง <input type="tel" name="ptel" id="ptel" maxlength="10" required><br>
          ชื่อ-สกุล บิดา <input type="text" name="fname" maxlength="100"><br>
          เบอร์โทรศัพท์บิดา <input type="tel" name="ftel" maxlength="10"><br>
          ชื่อ-สกุล มารดา <input type="text" name="mname" maxlength="100"><br>
          เบอร์โทรศัพท์มารดา <input type="tel" name="mtel" maxlength="10"><br>
        </div>
      </div>
      <div class="section">
        <p class="head" id="otherhead">ข้อมูลอื่นๆ</p>
        <div id="otherinfo" style="display:none;">
          เคยเข้าค่ายกาสะลองหรือไม่
          <input type="radio" value="true" name="went"> เคย
          <input type="radio" value="false" name="went"> ไม่เคย<br>
          เกรดเฉลี่ยรวม <input type="text" name="gpax"><br>
          เกรดเฉลี่ยเทอมล่าสุด <input type="text" name="gpa"><br>
          อาชีพที่อยากทำในอนาคต <input type="text" name="job"><br>

          ความสนใจในเนื้อหา<br>
          <input type="checkbox" name="ent[]" value="GAT" > GAT
          <input type="checkbox" name="ent[]" value="PAT1"> PAT 1
          <input type="checkbox" name="ent[]" value="PAT2"> PAT 2
          <input type="checkbox" name="ent[]" value="PAT3"> PAT 3
          <input type="checkbox" name="ent[]" value="PAT4"> PAT 4
          <input type="checkbox" name="ent[]" value="PAT5"> PAT 5
          <input type="checkbox" name="ent[]" value="PAT6"> PAT 6
          <input type="checkbox" name="ent[]" value="PAT7"> PAT 7

          <br>


          สาเหตุที่สมัครค่ายและสิ่งที่คาดหวังว่าจะได้รับ<br>
          <div class="comment-text-area">
              <textarea class="textinput" name="ans1" rows="10" cols="60" name="address" required></textarea><br>
          </div>
          คณะที่อยากเข้าศึกษา/มหาวิทยาลัยที่อยากเข้าศึกษา <input type="text" name="future"><br>
        </div>
      </div>
      <button type="submit" name="btn-submit">Submit</button>
      </form>
      <?php } else { ?>
      <div class="section">
        <p class="head">
          ขออภัย ขณะนี้ไม่อยู่ในช่วงเปิดรับสมัคร
        </p>
      </div>
      <?php } ?>
  <script src="js/regis_stu.js"></script>
</body>
</html>
