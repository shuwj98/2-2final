<?php
include"db3.php";
$result=mysqli_query($db,"insert into $table(name,email,message) values('$_GET[name]','$_GET[email]',
'$_GET[message]')");
mysqli_close($db);
echo "<script>alert('계시글이 입력 되었습니다.'); </script>";
echo"<meta http-equiv='refresh' content='3; URL=list1.php'>";

?>
<script>
alert('계시판이 입력되었습니다.">;

</script>

