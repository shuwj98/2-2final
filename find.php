<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
<style>
.w1{font-size:15pt; margin-top:100px}
.input{width:100px}
.w2.w3{font-size:10pt}
.w3{margin-left:-10px}

</style>
  <body>
    <center>

      <form name='find_id' method="POST">
      <label>

        <h2 class='w1'>find id</h2>
        <p class='w2' >name <input type='text' name='name'  placeholder='name' ><br></p>
        <p class='w3'>email <input type='text' name='mail_id' placeholder='email'></p>
      </label>
      <input type="submit" value="submit" onclick="javascript:form.action='find_id.php';">
    </form>

     

    </center>
  </body>
</html>
