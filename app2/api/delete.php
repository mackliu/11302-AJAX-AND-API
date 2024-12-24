<?php
include_once "db.php";
//處理刪除資料的請求
$id=$_POST['id'];

//$row=$Stu->find($id);

$Stu->del($id);
//echo $Stu->del($id);

echo $_POST['classroom'];
//echo $row['classroom'];

?>