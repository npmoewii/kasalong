<?php
include("connect.php");
if(isset($_POST['btn-submit'])){
    $sql ="select * from info_staff where idstu='".$_POST['idstu']."'";
    $result = $conn->query($sql);
    if($result->num_rows>0){
        echo "พบข้อมูลในระบบรับสมัครเรียบร้อยแล้วค่ะ หากพบปัญหากรุณาติดต่อเจ้าหน้าที่ค่ะ";
    }
    else{
        $sql = "insert into info_staff (name,surname,nickname,idstu,faculty,year,phone,lineid,facebook) values ('".$_POST['name']."','".$_POST['surname']."','".$_POST['nickname']."','".$_POST['idstu']."','".$_POST['faculty']."','".$_POST['year']."','".$_POST['phone']."','".$_POST['lineid']."','".$_POST['facebook']."')";
        if(!$conn->query($sql)){
            echo "Connection Error: ".$sql."<br>".$conn->error;
            echo "กรุณาสมัครใหม่ หากยังไม่ได้ กรุณาติดต่อเจ้าหน้าที่";
            $res = "error";
        }
        else{
            echo "Registation Success";
            $res = "pass";
        }
    }
}
header("Location: ../regis_staff_success.php?result=".$res)
?>
