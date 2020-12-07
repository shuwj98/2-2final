<?php
include "db1.php";
$result=mysqli_query($db, "create table $table(no int not null auto_increment
primary key, name varchar(20), id varchar(10), pass varchar(40),
email varchar(20), phone varchar(30))");
mysqli_close($db);
?>

