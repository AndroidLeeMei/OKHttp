<?php

$servername = "localhost";
$username = "root";
$passwd = "1qaz2wsx";
$database = "temperature_db";


$conn1 = mysqli_connect($servername, $username, $passwd, $database);
if ($conn1->connect_error) {
    print "fail " . $conn1->connect_error;
} else {


    $conn1->query("SET NAMES utf8");  //支援中文
//
//        $sql = "select * from price where brand='華碩'";
//        mysqli_query($conn1, $sql);
}
?>
