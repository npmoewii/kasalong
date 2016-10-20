<?php
include("connect.php");
if(isset($_POST['btn-submit'])){
    $sql ="select * from info_staff where idstu='".$_POST['idstu']."'";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        $res = "พบข้อมูลในระบบรับสมัครเรียบร้อยแล้วค่ะ หากพบปัญหากรุณาติดต่อเจ้าหน้าที่ค่ะ";
    }
    else{
        $sql = "insert into info_staff (name,surname,nickname,idstu,faculty,year,phone,lineid,facebook) values ('".
        $_POST['name']."','".
        $_POST['surname']."','".
        $_POST['nickname']."','".
        $_POST['idstu']."','".
        $_POST['faculty']."','".
        $_POST['year']."','".
        $_POST['phone']."','".
        $_POST['lineid']."','".
        $_POST['facebook']
        ."')";
        if(!$conn->query($sql)){
            $res = "Registation Failed: ".$conn->error;
        }
        else{
            $res = "Registation Success";
        }
    }
}
header("Location: ../regis_staff_success.php?result=".$res)
?>
