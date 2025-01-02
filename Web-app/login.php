
<?php
session_start();
error_reporting(0);
include_once ("db_connection.php");
global $conn;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        h1 {
            color: #8c3434;
            font-family: Bookman Old Style;
            font-size: 20px;
            padding-left: 20px;
        }

       /*font{
           color: #78787e;
           font-family: "Bookman Old Style";
           margin-top: 1px;
           padding-left: 20px;

       }*/
    </style>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">
    <script src="login.js"></script>
   
    <title>Login</title>

</head>
<body>
<div class="logo">
            <a class="navbar-brand" href="home.php"><img src="images/asianroots.png" height="80px" width="200px"></a>
        </div>

    
    <div class="header">
     
        <font style="float: right;margin-right: 40px;">New User?<a class="sign"href="signup.php"> Sign Up</a></font>
    </div>

    <br>
    <div class="left">
    </div>
    
<div class="right" style="background-color: #f4d6c3" >
<div class="logbox">
    <h1> Welcome Back!</h1>
    <font > &nbsp; &nbsp;log in to continue</font>
    <br>


    <form  action="login.php" method="post">
        <div class="form-group">
            <label >&nbsp; &nbsp;Username</label>
            <input type="text" class="username" name="name" placeholder="Enter username">
            <input type="hidden" name="c_id">
        </div>
        <div class="form-group">
            <label >&nbsp; &nbsp;Password</label>
            <input type="password" class="password" name="password"  placeholder="Password">
        </div>
             <button class="loginbutton" type="submit"  name="btnclick" style="margin-left: 80px">  Log in </button>
    </form>

</div>
</div><br><br>

</body>
</html>

<?php

if(isset($_POST["btnclick"])){

    $name = $_POST["name"];
    $password = $_POST["password"];


    $_SESSION["status"]=false;

    //condition for checking valid input from user
    $sql = " Select * from customer where name='$name' AND password='$password' ";
    $result = mysqli_query($conn,$sql);
    $row_num = mysqli_num_rows($result);
    $data= mysqli_fetch_assoc($result);

    if ($row_num == 1)
{
         $_SESSION["status"]= true;
          $c_id=$data['c_id'];
          $_SESSION["c_id"]=$c_id;
          $_SESSION["name"]=$name;

        echo ("<script LANGUAGE='JavaScript'>
    window.alert('Login successful');
    window.location.href='http://localhost/skincare2/user_dashboard.php';
    </script>");
    }
    else{
        echo ("<script LANGUAGE='JavaScript'>
    window.alert('Invalid');
    window.location.href='http://localhost/skincare2/login.php';
    </script>");
    }

   }



?>
