<?php
 #DB connect
   include"db1.php";

   $id = $_POST['id'];
   $mail = $_POST['mail_pw'];
   $name = $_POST['name'];

   #check idowner
   $query1 = "SELECT * FROM info WHERE id='$id'and email='$mail'and name='$name'";
   $mysqli_result= mysqli_query($db,$query1);
   $num=mysqli_num_rows($num);
   #null value checker


   if($num!= 1)
   {
     echo "<script>alert('Wrong Info');history.back();</script>";
   }
   else if ($num==1)
   {
     #random pw generate
     $new_pw = substr(hash("sha256",mt_rand()),1,10);
     $new_pw_hash = hash("sha256",$new_pw);
     #update pw
     $query2 = "UPDATE member SET pw_hash='$new_pw_hash' WHERE id='$id'";
     $mysqli_result2 = mysqli_query($db,$query2);
     mysqli_close($db);

     #send tmp pw

     echo "<script>alert('New pw Sent to your E-mail.')</script>";
   }

   echo "<form method=post action='sendmail.php' name='frm'>";
   echo "<input type='hidden' name='email' value=$mail>";
   echo "<input type='hidden' name='new_pw' value=$new_pw>";
   echo"<input type='hidden' name='name' value=$name>";
   echo"</form>";

   echo"<script language='javascript'>";
   echo"document.frm.submit();</script>";



  ?>
