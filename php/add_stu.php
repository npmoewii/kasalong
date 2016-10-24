<?php
include("connect.php");
if(isset($_POST['btn-submit'])){
    $sql = "SELECT sname,ssurname FROM info_student WHERE nationid='".$_POST['nationid']."'";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        $result = $result->fetch_assoc();
        $res = "พบข้อมูลการสมัครของคุณ ".$result['sname']." ".$result['ssurname']." แล้วค่ะ";
    }
    else{
        if(isset($_FILES['img_prof']['tmp_name'])){
            $imgdir = "../img/stu_profile/";
            $arrs = explode(".",$_FILES['img_prof']['name']);
            $imgtype = $arrs[count($arrs)-1];
            $imgname = "prof_".$_POST['nationid'].".".$imgtype;

            if (!file_exists("../img/stu_profile")) {
              mkdir("../img/stu_profile", 0766);
            }
            if($imgtype=="jpg"||$imgtype=="jpeg"){
                if(move_uploaded_file($_FILES['img_prof']['tmp_name'],$imgdir.$imgname)){
                    echo "File has been uploaded.";

                    $ent = "";
                    foreach($_POST['ent'] as $value){
                        $ent .= $value."|";
                    }
                    $sql = "insert into info_student
                    (title,sname,ssurname,nickname,birth,nationid,religion,address,phone,email,facebook,clas,school,program,disease,size,img_prof,pname,pphone,fname,fphone,mname,mphone,went,gpax,gpa,job,ent,future,ans1,pass) values ('".
                    $_POST['title']."','"
                    .$_POST['sname']."','"
                    .$_POST['ssurname']."','"
                    .$_POST['nickname']."','"
                    .$_POST['birth']."','"
                    .$_POST['nationid']."','"
                    .$_POST['region']."','"
                    .$_POST['address']."','"
                    .$_POST['stel']."','"
                    .$_POST['email']."','"
                    .$_POST['facebook']."','"
                    .$_POST['clas']."','"
                    .$_POST['school']."','"
                    .$_POST['program']."','"
                    .$_POST['disease']."','"
                    .$_POST['size']."','"
                    .$imgdir.$imgname."','"
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
                    ',0)";
                    if($conn->query($sql)){
                        $res = "การสมัครเสร็จสมบูรณ์แล้วค่ะ ติดตามผลการสมัครได้ที่หน้าเว็บไซต์นะคะ แล้วไว้เจอกันที่ค่ายนะคะ :)";
                    }
                    else{
                        unlink("img/profile/".$imgname);
                        $res = "Registation Failed: ".$conn->error;
                    }
                }
                else {   //Upload img_prof failed
                    $res = "Registation Failed: Upload image profile failed.".$_FILES['img_prof']['name'];
                }
            }
        }


    }
    header("Location: ../regis_stu_success.php?result=".$res);
}

?>
