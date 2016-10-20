<!DOCTYPE html>
<html>
<head>
    <title>Register 1: Profile</title>
    <meta charset="utf-8">
</head>
<body>
    <form action="php/add_stu.php" method="post">
        ข้อมูลส่วนตัว <br>
        อัพโหลดรูปส่วนตัว <input type="file" name="img_prof" required><br>
        ชื่อ <input type="text" name="sname" required><br>
        นามสกุล <input type="text" name="ssurname" required><br>
        ชื่อเล่น <input type="text" name="nickname" required><br>
        วัน/เดือน/ปี เกิด <input type="date" name="birth" required><br>
        เลขประจำตัวประชาชน <input type="text" name="nationid" required><br>
        ศาสนา
        <select name="region" required>
            <option value="พุทธ">พุทธ</option>
            <option value="คริสต์">คริสต์</option>
            <option value="อิสลาม">อิสลาม</option>
        </select><br>
        ที่อยู่ <textarea name="address" rows="3" cols="30" required></textarea><br>
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
        <hr>
        ข้อมูลผู้ปกครอง <br>
        ชื่อ-สกุล ผู้ปกครอง <input type="text" name="pname" required><br>
        เบอร์โทรศัพท์ผู้ปกครอง <input type="tel" name="ptel" required><br>
        ชื่อ-สกุล บิดา <input type="text" name="fname"><br>
        เบอร์โทรศัพท์บิดา <input type="tel" name="ftel"><br>
        ชื่อ-สกุล มารดา <input type="text" name="mname"><br>
        เบอร์โทรศัพท์มารดา <input type="tel" name="mtel"><br>
        <hr>
        ข้อมูลอื่นๆ <br>
        เคยเข้าค่ายกาสะลองหรือไม่
        <input type="radio" value="true" name="went">เคย
        <input type="radio" value="false" name="went">ไม่เคย <br>
        เกรดเฉลี่ยรวม <input type="text" name="gpax"><br>
        เกรดเฉลี่ยเทอมล่าสุด <input type="text" name="gpa"><br>
        อาชีพที่อยากทำในอนาคต <input type="text" name="job"><br>

        ความสนใจในเนื้อหา<br>
        <input type="checkbox" name="ent[]" value="GAT">GAT <br>
        <input type="checkbox" name="ent[]" value="PAT1">PAT 1<br>
        <input type="checkbox" name="ent[]" value="PAT2">PAT 2<br>
        <input type="checkbox" name="ent[]" value="PAT3">PAT 3<br>
        <input type="checkbox" name="ent[]" value="PAT4">PAT 4<br>
        <input type="checkbox" name="ent[]" value="PAT5">PAT 5<br>
        <input type="checkbox" name="ent[]" value="PAT6">PAT 6<br>
        <input type="checkbox" name="ent[]" value="PAT7">PAT 7<br>

        คณะที่อยากเข้าศึกษา/มหาวิทยาลัยที่อยากเข้าศึกษา <input type="text" name="future"><br>

        1. สาเหตุที่สมัครค่ายและสิ่งที่คาดหวังว่าจะได้รับ<br>
        <textarea name="ans1" rows="7" cols="100"></textarea><br>

        <button type="submit" name="btn-submit">Submit</button>
    </form>
</body>
</html>
