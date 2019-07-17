<?php
include 'connect2.php';
$str="delete from student where name='".$_REQUEST["id"]."'";
mysqli_query($conn,$str);
header("location:table_up.php");
?>

