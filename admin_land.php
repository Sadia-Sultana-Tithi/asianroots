<!DOCTYPE html>
<html lang="" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <title>admin landing</title>

</head>
<body>
<div class="header">
    <a class="arrow"href="home.php"> <img src="images/asianroots.png"width="20%" height="65px"> </a>
    <font style="float: right;margin-right: 40px;margin-top: 10px; border: 1px solid darkred; background: pink;"><a class="sign"href="home.html"> Home >></a></font>


</div>
<div class="admin"> <h1>ADMIN PANEL</h1><br>
<br>
<div class="button">
<button> <a href="del_review.php"> Modify Review </a></button>
<!-- <button><a href="">Modify Admin</a></button> -->
<button><a href="add_product.php">Modify Products</a></button><br><br>
<button><a href="dermatologist/dermatologist_land.php">Dermatologist</a></button>
<button><a href="dermatologist/view_appointment.php">View Appointment</a></button><br><br><br>
</div>
</div>
<div class="footer"></div>


<style type=text/css>


    body {
        background-image: url("images/back1.jpg");

        background-size: cover;
        background-color: rgba(140, 52, 52, 0.29);
    }
    a{
        text-decoration: none;
        color: black;
    }


    .header{

        width: 100%;
        height: 50px;
        background-color: rgba(140, 52, 52, 0.29);
        margin-top: 0px;
    }

    h1{
        text-align: center;
            color: #8c3434;
            font-family: Bookman Old Style;
            font-size: 30px;
    }
    .admin{
        border: 2px solid white;
        width: 50%;
        height: 20%;
        margin-top: 150px;
        margin-left: 340px;
        background-color: rgba(140, 52, 52, 0.29);
    }
    button{
        width: 30%;
        line-height: 200%;
        border-radius: 5%;

    }
    button:hover{
  opacity: 0.8;
  background-color: lightcoral;
  color: black;
}
.button{
    margin-left: 10%;
}
.footer{
    margin-top: 152px;
    width: 100%;
        height: 50px;
   background-color: rgba(140, 52, 52, 0.29); 
}
</style>

</body>
</html>