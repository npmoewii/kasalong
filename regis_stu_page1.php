<!DOCTYPE html>
<html>
<head>
    <title>Register 1: Profile</title>
    <meta charset="utf-8">
</head>
<body>
    ข้อมูลส่วนตัว <br>
    ชื่อ <input type="text" name="name" required><br>
    นามสกุล <input type="text" name="surname" required><br>
    ชื่อเล่น <input type="text" name="nickname" required><br>
    วัน/เดือน/ปี เกิด <input type="date" name="birth" required><br>
    ศาสนา
    <select required>
        <option value="พุทธ">พุทธ</option>
        <option value="คริสต์">คริสต์</option>
        <option value="อิสลาม">อิสลาม</option>
    </select><br>
    ที่อยู่ <textarea name="address" rows="3" cols="30"></textarea><br>
    E-mail <input type="email" name="mail"><br>
    Facebook <input type="text" name="facebook"><br>
    ระดับชั้น
    <select required>
        <option value="4">มัธยมศึกษาปีที่ 4</option>
        <option value="5">มัธยมศึกษาปีที่ 5</option>
        <option value="6">มัธยมศึกษาปีที่ 6</option>
    </select><br>
    โรงเรียน <input type="text" name="school" required><br>
    แผนการเรียน <input type="text" name="plan"><br>
    อาหารที่แพ้/โรคประจำตัว <input type="text" name="desease"><br>
    ไซส์เสื้อ
    <select required>
        <option value="S">S</option>
        <option value="M">M</option>
        <option value="L">L</option>
        <option value="XL">XL</option>
        <option value="XXL">XXL</option>
    </select><br>
    <hr>
    ข้อมูลผู้ปกครอง <br>
    ชื่อ-สกุล บิดา <input type="text" name="fname"><br>
    เบอร์โทรศัพท์บิดา <input type="tel" name="ftel"><br>
    ชื่อ-สกุล มารดา <input type="text" name="mname"><br>
    เบอร์โทรศัพท์มารดา <input type="tel" name="mtel"><br>
    ชื่อ-สกุล ผู้ปกครอง <input type="text" name="pname"><br>
    เบอร์โทรศัพท์ผู้ปกครอง <input type="tel" name="ptel"><br>
    <hr>
    ข้อมูลอื่นๆ <br>
    เคยเข้าค่ายกาสะลองหรือไม่ <input type="radio" value="true" name="">เคย  <input type="radio" value="false" name="">ไม่เคย <br>
    เกรดเฉลี่ยรวม <input type="text" name="gpax"><br>
    เกรดเฉลี่ยเทอมล่าสุด <input type="text" name="gpa"><br>
    อาชีพที่อยากทำในอนาคต <input type="text" name="job"><br>

    ความสนใจในเนื้อหา<br>

    คณะที่อยากเข้าศึกษา/มหาวิทยาลัยที่อยากเข้าศึกษา <input type="text" name=""><br>

</body>
</html>
