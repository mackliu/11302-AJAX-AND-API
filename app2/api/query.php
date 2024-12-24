<?php
include_once "db.php";
//處理查詢資料的請求

$code=$_GET['code'];
$students=$Stu->all(['classroom'=>$code]);
echo json_encode($students);
?>