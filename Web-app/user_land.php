<!DOCTYPE html>
<html lang="" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>user landing</title>

</head>
<body>
<div class="header">
    <div class="logo">
            <a class="navbar-brand" href="http://localhost/skincare2/home.php"><img src="http://localhost/skincare2/images/asianroots.png" height="80px" width="200px"></a>
        </div>


</div>
<div class="acc-submenu">

        <a class="acc" href="login.php">Log In</a> &emsp;&emsp;&emsp;
        <a class="acc" href="signup.php">Sign Up</a>
</div>

<div class="admin"> 
    <h1>User PANEL</h1>

<div class="button">
    
        <button><a href="dermatologist/bookingpage.php"> <img src="images/appointment.svg" width="180" height="200"><br>Appointment &nbsp;</a></button>
        <button><a href="dermatologist/doctors_available.php"> <img src="images/doctor.svg" width="180" height="200"><br> Doctor &nbsp;</a></button>
          <button><a href="skintypeQuiz.php">  <img src="images/skin-type.svg" width="200" height="200"> <br>Skintype &nbsp;</a></button>
    

</div>
</div>



<style type=text/css>


    body {
      
       background-color:rgb(232,232,232);
    }
    a{
        text-decoration: none;
        color: black;
    }



    h1{
            text-align: center;
            color: #8c3434;
            font-family: Bookman Old Style;
            font-size: 30px;
    }
    
    button{
        width: 20%;
        line-height: 200%;
        border-radius: 5%;
        font-family: Bookman Old Style;
        border: none;
        font-size: 20px;
       

    }
    
    button:hover{
      opacity: 0.8;
      color: black;
    }
    .button{
        margin-left: 30%;


    }
    .acc{   
        font-size: 20px;
        color: indianred;
        float: right;
        margin-right: 20px;
    }
   .acc-nav{
    float: right;

   }

</style>

</body>
</html>