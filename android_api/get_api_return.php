<?php
if (isset($_GET["userid"]) && isset($_GET["temperature"])){
require_once 'connMysql.php';
date_default_timezone_set('Asia/Taipei');
//$sql="insert into temperature (userID,temperature,datetime) values ("
//        . "'" . $_GET["userid"] . "'"
//        . ",'". $_GET["temperature"]  ."'"
//        . ",'" . date("Y/m/d H:i:s") . "')";

$sql="select * from  temperature where userid='" . $_GET["userid"]  . "'";
//print $sql;
$ret= mysqli_query($conn1, $sql);
if (mysqli_num_rows($ret)>0){
    print "data Duplicate";//資料重複
} else {
//        print "資料不存在,可以新增<br>";
        date_default_timezone_set('Asia/Taipei');
        $sql="insert into temperature (userID,temperature,datetime) values ("
        . "'" . $_GET["userid"] . "'"
        . ",'". $_GET["temperature"]  ."'"
        . ",'" . date("Y/m/d H:i:s") . "')";
        $result= mysqli_query($conn1, $sql);
        if ($result){
            print "Data insert OK";//資料新增成功
        }else
            print "Data insert FAIL";//資料新增失敗
    }
    



mysqli_close($conn1);
}

?>
