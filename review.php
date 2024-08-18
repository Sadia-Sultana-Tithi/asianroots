
<?php
function review(){

error_reporting(0);

if ($_SESSION["status"] != true){
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Login first');
    window.location.href='http://localhost/skincare2/login.php';
    </script>");

}

?>

<!DOCTYPE html>
<html>
    <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="">
</head>
 <body>

    <br>
<div style="height: 250px;width:38%;border:1px solid black;margin-left: 35% ">
  <form action="reviewback.php" method="post" style="margin-left: 10px"><br>
    
  <h3>WE APPRECIATE YOUR OPINION</h3>

  <label>Name:</label> <br>
  <input id="name" name="name" placeholder="name" size="60px">
      <br><br>

  <div class="feedback">
  <label>Write your feedback:</label><br>
  <input id="feedback" name="feedback" placeholder="" size="60px">
  <br><br></div>
  <button class="submit" name="submit"><b>submit</b></button>&nbsp
  <button class="cancel"><b>CANCEL</b></button><br>
  </div>

</form>
</div>

 
</body>
</html>
<?php
}
?>