<?php
include("connect.php");
if(isset($_POST['btn-submit'])){
    $sql ="select * from info_staff where idstu='".$_POST['idstu']."'";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        $res = "พบข้อมูลในระบบรับสมัครเรียบร้อยแล้วค่ะ หากพบปัญหากรุณาติดต่อเจ้าหน้าที่ค่ะ";
    }
    else{

        if(isset($_FILES['img_prof']['tmp_name'])){
            $imgdir = "../img/staff_profile/";
            $arrs = explode(".",$_FILES['img_prof']['name']);
            $imgtype = $arrs[count($arrs)-1];
            $imgname = "prof_".$_POST['idstu'].".".$imgtype;

            if($imgtype=="jpg"||$imgtype=="jpeg"){
                if(move_uploaded_file($_FILES['img_prof']['tmp_name'],$imgdir.$imgname)){
                    echo "File has been uploaded.";
                    $sql = "insert into info_staff (staffname,staffsurname,nickname,idstu,faculty,years,img_prof,livechr,goself,paid,size,phone,lineid,facebook) values ('".
                    $_POST['name']."','".
                    $_POST['surname']."','".
                    $_POST['nickname']."','".
                    $_POST['idstu']."','".
                    $_POST['faculty']."','".
                    $_POST['years']."','".
                    $imgdir.$imgname."','".
                    $_POST['livechr']."','".
                    $_POST['goself']."','".
                    $_POST['paid']."','".
                    $_POST['size']."','".
                    $_POST['phone']."','".
                    $_POST['lineid']."','".
                    $_POST['facebook']
                    ."')";
                    if($conn->query($sql)){
                        $res = "การสมัครเสร็จสมบูรณ์แล้วค่ะ :)";
                    }
                    else{
                        unlink("img/profile/".$imgname);
                        $res = "Registation Failed: ".$conn->error;
                    }
                }
                else{   //Upload img_prof failed
                    $res = "Registation Failed: Upload image profile failed.".$_FILES['img_prof']['name'];
                }
            }
        }
    }
}
header("Location: ../regis_staff_success.php?result=".$res)
?>
