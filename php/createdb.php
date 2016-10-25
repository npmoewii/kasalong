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

            $str = array("CREATE TABLE IF NOT EXISTS `info_student`
(
    title VARCHAR(10) NOT NULL,
    sname VARCHAR(50) NOT NULL,
    ssurname VARCHAR(50) NOT NULL,
    nickname VARCHAR(30) NOT NULL,
    birth date NOT NULL,
    nationid VARCHAR(15) NOT NULL PRIMARY KEY,
    religion VARCHAR(30) NOT NULL,
    address text NOT NULL,
    phone VARCHAR(12) NOT NULL,
    email VARCHAR(50) NOT NULL,
    facebook VARCHAR(100) NOT NULL,
    clas SMALLINT NOT NULL,
    school VARCHAR(50) NOT NULL,
    program VARCHAR(30),
    disease TEXT,
    size VARCHAR(10) NOT NULL,
    img_prof VARCHAR(50) NOT NULL,
    pname VARCHAR(100) NOT NULL,
    pphone VARCHAR(12) NOT NULL,
    fname VARCHAR(100),
    fphone VARCHAR(12),
    mname VARCHAR(100),
    mphone VARCHAR(12),
    went boolean,
    gpax FLOAT,
    gpa FLOAT,
    job TEXT,
    ent TEXT,
    future TEXT,
    ans1 TEXT,
    pass boolean
 );
","CREATE TABLE IF NOT EXISTS slip
(
    nationid VARCHAR(15) NOT NULL PRIMARY KEY,
    img_slip VARCHAR(50) NOT NULL,
    recheckslip BOOLEAN NOT NULL
);
","CREATE TABLE IF NOT EXISTS info_staff
(
    idstu VARCHAR(10) NOT NULL PRIMARY KEY,
    staffname VARCHAR(50) NOT NULL,
    staffsurname VARCHAR(50) NOT NULL,
    nickname VARCHAR(30) NOT NULL,
    faculty VARCHAR(50),
    years INT NOT NULL,
    img_prof VARCHAR(50) NOT NULL,
    livechr boolean NOT NULL,
    goself boolean NOT NULL,
    paid INT,
    size VARCHAR(10) NOT NULL,
    phone VARCHAR(12) NOT NULL,
    lineid VARCHAR(30),
    facebook VARCHAR(100)
);
","CREATE TABLE IF NOT EXISTS `state`
(
    `name` VARCHAR(20) NOT NULL PRIMARY KEY,
    `content_type` VARCHAR(10) NOT NULL,
    `content` VARCHAR(30) NOT NULL
);
","INSERT INTO `state` (`name`, `content_type`, `content`) VALUES ('register', 'auto', 'between 2016-11-01 2016-11-30');
","INSERT INTO `state` (`name`, `content_type`, `content`) VALUES ('announce', 'auto', 'after 2016-12-10');
","INSERT INTO `state` (`name`, `content_type`, `content`) VALUES ('adminpw', 'manual', 'kasashort');
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
