<?php
include"db1.php";
$pass=md5('$_POST[pass]');
$result=mysqli_query($db, "insert into $table (name,id,pass,email,phone) values('$_POST[name]','$_POST[id]',
'$pass','$_POST[email]','$_POST[phone]')");
mysqli_close($db);
echo" <script>
                alert('가입 되었습니다.');
                   window.close(); 
                </script>";
?>


