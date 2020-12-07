
<?php
include"db1.php";
$pw_bf = addslashes($_POST['pw_bf']);
$pw_af = addslashes($_POST['pw_af']);
$pw_af_chk = addslashes($_POST['pw_af_chk']);
$id = $_SESSION['user_id'];
$time =time();
if(!isset($pw_af) || !isset($pw_bf) || !isset($pw_af_chk))
{
  echo "<script>alert('No NULL value');history.back()</script>";
}
else
{
  $pwbf_hash=hash("sha256",$pw_bf);
  $query = "SELECT * FROM member WHERE id='$id' and pw_hash='$pwbf_hash'";
  $res=mysqli_query($db,$query);
  $num=mysqli_num_rows($res);
  if($num == 1)
  {
    if($pw_af === $pw_af_chk)
    {
        $pwaf_hash=hash("sha256",$pw_af);
        $query1= "UPDATE member set pw_hash ='$pwaf_hash' WHERE id='$id'";
        $query2 = "UPDATE member set random='$time' WHERE id='$id'";
        $res1 = mysqli_query($db, $query1);
        $res2 = mysqli_query($db,$query2);

        if(mysqli_error($db) || mysqli_error($db))
        {
            mysqli_close($db);
            echo "<script>alert('ERROR');history.back()</script>";
        }
        else {
          mysqli_close($db);
          echo "<script>alert('pw changed plz login again')</script>";
          echo "<meta http-equiv='refresh' content='0;url=logout.php'>";
        }

    }
    else {
      mysqli_close($db);
      echo "<script>alert('check does not match... try again...');history.back()</script>";

    }
  }
  else
  {
    mysqli_close($db);
    echo "<script>alert('Current PW is not right!');history.back()</script>";

  }
}
 ?>
