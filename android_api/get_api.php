<?php
if (isset($_GET["userid"]) && isset($_GET["temperature"])){
require_once 'connMysql.php';
date_default_timezone_set('Asia/Taipei');
$sql="insert into temperature (userID,temperature,datetime) values ("
        . "'" . $_GET["userid"] . "'"
        . ",'". $_GET["temperature"]  ."'"
        . ",'" . date("Y/m/d H:i:s") . "')";

print $sql;
//mysqli_query($conn1, $sql_query);
mysqli_query($conn1, $sql);

mysqli_close($conn1);
print "新增成功";
}else 
    print "請輸入參數 userid,temperature";

?>
