<!DOCTYPE html>
<html>
<head>
    <title>Register 1: Profile</title>
    <meta charset="utf-8">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/main.css" type="text/css">
  <link rel="stylesheet" href="css/regis_stu.css" type="text/css">
  <script src="js/jquery.min.js"></script>
</head>
<body>
<<<<<<< HEAD
=======
    <nav>
        <div class="navbar">
          <div class="heading">
            <div class="title">KASALONG</div>
          </div>
    </nav>
    <div class="navbar"></div>
>>>>>>> origin/master
    <form action="php/add_stu.php" method="post" enctype="multipart/form-data">
        <p id="head">ข้อมูลส่วนตัว</p>
        อัพโหลดรูปส่วนตัว <input type="file" name="img_prof" accept=".jpg" required><br>
        คำนำหน้าชื่อ
        <select name="title" required>
            <option value="นาย">นาย</option>
            <option value="นางสาว">นางสาว</option>
        </select>
        ชื่อ <input type="text" name="sname" required width="50" heigh>
        นามสกุล <input type="text" name="ssurname" required>
        ชื่อเล่น <input type="text" name="nickname" required>
        วัน/เดือน/ปี เกิด <input type="date" name="birth" required>
        เลขประจำตัวประชาชน <input type="text" name="nationid" required>
        ศาสนา
        <select name="region" required>
            <option value="พุทธ">พุทธ</option>
            <option value="คริสต์">คริสต์</option>
            <option value="อิสลาม">อิสลาม</option>
            <option value="อิสลาม">ซกส์</option>
        </select><br>
        ที่อยู่ <br>
        <div class="comment-text-area">
            <textarea class="textinput" rows="10" cols="60" name="address" required></textarea><br>
        </div>
        <hr class="hrr" color=#fff >
<<<<<<< HEAD
=======
        เบอร์โทรศัพท์ <input type="tel" name="stel" required><br>
>>>>>>> origin/master
        E-mail <input type="email" name="email"><br>
        Facebook <input type="text" name="facebook"><br>
        ระดับชั้น
        <select name="clas" required>
            <option value="4">มัธยมศึกษาปีที่ 4</option>
            <option value="5">มัธยมศึกษาปีที่ 5</option>
            <option value="6">มัธยมศึกษาปีที่ 6</option>
        </select><br>
        โรงเรียน <input type="text" name="school" required><br>
        แผนการเรียน <input type="text" name="program"><br>
        อาหารที่แพ้/โรคประจำตัว <input type="text" name="disease"><br>
        ไซส์เสื้อ
        <select name="size" required>
            <option value="S">S</option>
            <option value="M">M</option>
            <option value="L">L</option>
            <option value="XL">XL</option>
            <option value="XXL">XXL</option>
        </select><br>
        <hr class="hrr">
        <p id="head">ข้อมูลผู้ปกครอง</p> 
        ชื่อ-สกุล ผู้ปกครอง <input type="text" name="pname" required><br>
        เบอร์โทรศัพท์ผู้ปกครอง <input type="tel" name="ptel" required><br>
        ชื่อ-สกุล บิดา <input type="text" name="fname"><br>
        เบอร์โทรศัพท์บิดา <input type="tel" name="ftel"><br>
        ชื่อ-สกุล มารดา <input type="text" name="mname"><br>
        เบอร์โทรศัพท์มารดา <input type="tel" name="mtel"><br>
        <hr class="hrr">
        <p id="head">ข้อมูลอื่นๆ</p> 
        เคยเข้าค่ายกาสะลองหรือไม่
        <input type="radio" value="true" name="went">เคย
        <input type="radio" value="false" name="went">ไม่เคย <br>
        เกรดเฉลี่ยรวม <input type="text" name="gpax"><br>
        เกรดเฉลี่ยเทอมล่าสุด <input type="text" name="gpa"><br>
        อาชีพที่อยากทำในอนาคต <input type="text" name="job"><br>

        ความสนใจในเนื้อหา<br>
        GAT <input type="checkbox" name="ent[]" value="GAT" >
        PAT 1<input type="checkbox" name="ent[]" value="PAT1">
        PAT 2<input type="checkbox" name="ent[]" value="PAT2">
        PAT 3<input type="checkbox" name="ent[]" value="PAT3">
        PAT 4<input type="checkbox" name="ent[]" value="PAT4">
        PAT 5<input type="checkbox" name="ent[]" value="PAT5">
        PAT 6<input type="checkbox" name="ent[]" value="PAT6">
        PAT 7<input type="checkbox" name="ent[]" value="PAT7">

        <br>
        คณะที่อยากเข้าศึกษา/มหาวิทยาลัยที่อยากเข้าศึกษา <input type="text" name="future"><br>

<<<<<<< HEAD
        1. สาเหตุที่สมัครค่ายและสิ่งที่คาดหวังว่าจะได้รับ<br>
=======
        สาเหตุที่สมัครค่ายและสิ่งที่คาดหวังว่าจะได้รับ<br>
>>>>>>> origin/master
        <div class="comment-text-area">
            <textarea class="textinput" name="ans1" rows="10" cols="60" name="address" required></textarea><br>
        </div>


        <hr class="hrr" color=#fff >

        <button type="submit" name="btn-submit">Submit</button>
    </form>
</body>
</html>
