<?php 
include_once "db.php";
$classes=q("select `classroom` from `students`  group by `classroom`");

echo json_encode($classes);
?>


