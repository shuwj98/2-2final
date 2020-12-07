<?php
 #DB connect
   include"db1.php";
   $name = $_POST['name'];
   $email = $_POST['mail_id'];

   $query ="SELECT id FROM member WHERE name ='$name' and email='$email'";
   $res = mysqli_query($db, $query);
   $num = mysqli_num_rows($res);
   if($num == 0 )
   {
     echo "<script>alert('no such name....')</script>";
     mysqli_close($db);
     echo "<meta http-equiv='refresh' content='0;url=find.php'>";
   }
   else if($num ==1)
   {
      $arr = mysqli_fetch_array($res);
      mysqli_close($db);
      echo "<script>alert('Your id is : $arr[0]')</script>";
      echo "<meta http-equiv='refresh' content='0;url=login.html'>";
   }
   else
   {
     echo "<script>alert('Fatal ERROR.... ask ADMIN');history.back();";
     mysqli_close($db);
   }

echo"<script>
 window.close();
</script>";
  ?>
