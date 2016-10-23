<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "kasalong";

    $conn = new mysqli($servername,$username,$password);

    if($conn->connect_error){
        echo "Connection Failed: ".$conn->connect_error;
    }
    else{
        $sql = "CREATE DATABASE IF NOT EXISTS ".$dbname." CHARACTER SET utf8 COLLATE utf8_general_ci;";
        if($conn->query($sql)){
            $conn = new mysqli($servername,$username,$password,$dbname);

            $str = array("CREATE TABLE IF NOT EXISTS info_student
(
    title text not null,
    sname text not null,
    ssurname text not null,
    nickname text not null,
    birth date not null,
    nationid varchar(15) not null primary key,
    religion text not null,
    address text not null,
    phone text not null,
    email text not null,
    facebook text not null,
    clas int not null,
    school text not null,
    program text,
    disease text,
    size varchar(10) not null,
    img_prof text not null,
    pname text not null,
    pphone text not null,
    fname text,
    fphone text,
    mname text,
    mphone text,
    went boolean,
    gpax float,
    gpa float,
    job text,
    ent text,
    future text,
    ans1 text,
    pass boolean
 )
","
CREATE TABLE IF NOT EXISTS slip
(
    nationid varchar(15) not null primary key,
    img_slip text,
    recheckslip boolean null
)
","
CREATE TABLE IF NOT EXISTS info_staff
(
    idstu varchar(10) not null primary key,
    staffname text not null,
    staffsurname text not null,
    nickname text not null,
    faculty text,
    years int,
    img_prof text not null,
    livechr boolean not null,
    goself boolean not null,
    paid int,
    size varchar(10) not null,
    phone text not null,
    lineid text null,
    facebook text null
)
","
CREATE TABLE IF NOT EXISTS `state`
(
    `name` VARCHAR(20) NOT NULL PRIMARY KEY,
    `content_type` VARCHAR(10) NOT NULL,
    `content` VARCHAR(20) NOT NULL
)
","
INSERT INTO `state` (`name`, `content_type`, `content`) VALUES ('register', 'auto', 'between 2016-11-01 2016-11-30');
","
INSERT INTO `state` (`name`, `content_type`, `content`) VALUES ('announce', 'auto', 'after 2016-12-10');
");
            foreach($str as $sql){
                if(!$conn->query($sql)){
                    echo "SQL: ".$sql."<br>";
                    echo "Create table error: ".$conn->connect_error."<br>";
                }
                else{
                    echo "Created Success: ".$sql."<br>";
                }
            }


        }
        else{
            echo "Create database error: ".$conn->connect_error;
        }
    }

?>
