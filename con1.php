<?php
$db=mysqli_connect("localhost","s2040","2040","s2040_db");
$result=mysqli_query($db,"create table visit(Name char(20),Email char(20), Message text)");
mysqli_close($db);
?>

