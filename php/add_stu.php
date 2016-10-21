<?php
include("connect.php");
if(isset($_POST['btn-submit'])){
    $sql = "select sname,ssurname from info_student where nationid='".$_POST['nationid']."'";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        $result = $result->fetch_assoc();
        $res = "พบข้อมูลการสมัครของคุณ ".$result['sname']." ".$result['ssurname']." แล้วค่ะ";
    }
    else{
        $ent = "";
        foreach($_POST['ent'] as $value){
            $ent .= $value."|";
        }
        $sql = "insert into info_student
        (sname,ssurname,nickname,birth,nationid,religion,address,email,facebook,clas,school,program,disease,size,pname,pphone,fname,fphone,mname,mphone,went,gpax,gpa,job,ent,future,ans1) values ('".
        $_POST['sname']."','"
        .$_POST['ssurname']."','"
        .$_POST['nickname']."','"
        .$_POST['birth']."','"
        .$_POST['nationid']."','"
        .$_POST['region']."','"
        .$_POST['address']."','"
        .$_POST['email']."','"
        .$_POST['facebook']."','"
        .$_POST['clas']."','"
        .$_POST['school']."','"
        .$_POST['program']."','"
        .$_POST['disease']."','"
        .$_POST['size']."','"
        .$_POST['pname']."','"
        .$_POST['ptel']."','"
        .$_POST['fname']."','"
        .$_POST['ftel']."','"
        .$_POST['mname']."','"
        .$_POST['mtel']."','"
        .$_POST['went']."','"
        .$_POST['gpax']."','"
        .$_POST['gpa']."','"
        .$_POST['job']."','"
        .$ent."','"
        .$_POST['future']."','"
        .$_POST['ans1']."
        ')";
        if($conn->query($sql)){
            $res = "การสมัครเสร็จสมบูรณ์แล้วค่ะ ติดตามผลการสมัครได้ที่หน้าเว็บไซต์นะคะ แล้วไว้เจอกันที่ค่ายนะคะ :)";
        }
        else{
            $res = "Registation Failed: ".$conn->error;
        }
    }
    header("Location: ../regis_stu_success.php?result=".$res);
}

?>
