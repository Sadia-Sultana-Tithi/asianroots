
<?php
session_start();

if ($_SESSION["status"] != true){
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Login first');
    window.location.href='http://localhost/skincare2/login.php';
    </script>");
}
else
    $cid=$_SESSION["c_id"];
include ("db_connection.php");


global $conn;
$query = "select * from appointment where id=$cid";
$data = mysqli_query($conn, $query);
$total = mysqli_num_rows($data);
$result = mysqli_fetch_assoc($data);

$query1 = "select name from customer where c_id=$cid";
$data1 = mysqli_query($conn, $query1);
$total1 = mysqli_num_rows($data1);
$result1 = mysqli_fetch_assoc($data1);

$queryr = "select * from review where c_id=$cid";
$datar = mysqli_query($conn, $queryr);
$totalr = mysqli_num_rows($datar);
$resultr = mysqli_fetch_assoc($datar);


?>




<!DOCTYPE html>
<html lang="" xmlns="http://www.w3.org/1999/html">
<head>
    <meta charset="UTF-8">
    <!-- Account -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>user landing</title>

</head>
<body>
<div class="header">
    <div class="logo">
            <a class="navbar-brand" href="http://localhost/skincare2/home.php"><img src="http://localhost/skincare2/images/asianroots.png" height="80px" width="200px"></a>
        </div>
    <!-- <font style="float: right;margin-right: 40px;margin-top: 10px; border: 1px solid darkred; background: pink;">

    </font> -->


</div>

<!-- Fetch Name from login info -->
<div class="acc-submenu" >
    <a class="acc" href="login.php" style="text-decoration: none;margin-left: 85%;"></a>
    <i class="fa fa-user" style = "font-size: 25px;margin-left: 85%" > 
                          <?php echo $result1['name']; ?>             
        </i >

    <form action="logout.php" method="post">
    <input  type="submit"  name="logout" value="Logout!" style="float:right;margin-right:2%">
    </form>

</div>


<div class="container">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators" >
            <li data-target="#myCarousel" data-slide-to="0"  class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <img src="images/myth.webp" alt="" style="width:50%;height: 50%;margin-left: 27%">
            </div>

            <div class="item">
                <img src="images/myth3.webp" alt="" style="width:50%;height:50%;margin-left: 27%">
            </div>

            <div class="item">
                <img src="images/myth1.webp" alt="" style="width:50%;height:50%;margin-left: 27%">
            </div>
        </div>

<!--         Left and right controls-->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<div class="admin">
    <h1>User PANEL</h1>

    <div class="button">
    <form method="post">
        <button name="appointment"><img src="images/appointment.svg" width="200" height="200"><br>Appointment </button>
        <button name="review"><a href=""> <img src="images/rev.svg" width="200" height="200"><br> Review &nbsp;</a></button>
        <button name="skintype"><a href="skintypeQuiz.php">  <img src="images/skin-type.svg" width="200" height="200"> <br>Skintype &nbsp;</a></button>
    </form>

    </div>
</div>

<?php
   if(isset($_POST["appointment"])){

       if($total==1) {
?>
               <br>
               <div class="box" style="margin-left: 33%">
                   <h1> APPOINTMENT HISTORY</h1>

            &nbsp; &nbsp;  &nbsp; &nbsp;    
            Serial Number: <?php echo $result['serial'];?><br><br>
            &nbsp; &nbsp;  &nbsp; &nbsp;  
            Patient Name: <?php echo $result['first_name'],$result['last_name'];?><br><br>
            &nbsp; &nbsp;  &nbsp; &nbsp;  
            Patient Contact no: <?php echo $result['contact'];?><br><br>
            &nbsp; &nbsp;  &nbsp; &nbsp;  
            Patient Email:<?php  echo $result['email'];?><br><br>
            &nbsp; &nbsp;  &nbsp; &nbsp;  
            Appointment Time:<?php  echo $result['appointment_day'];?>

               </div>
            
    <?php

   }
       else
       {
           echo "no appointment yet";
       }
       }

   ?>

<?php
if(isset($_POST["review"])){

    if($totalr>=1) {
        ?>
        <br>
        <div class="box">
            <h1> Review HISTORY</h1>

            <div class="info"> Serial Number: <?php echo $resultr['name'];?> </div>
            <div class="info">Patient Name: <?php echo $resultr['feedback'];?> </div>
            <div class="info">Patient Contact no: <?php echo $resultr['contact'];?> </div>
            <div class="info"> product Name:<?php  echo $resultr['product'];?> </div>


        </div>

        <?php

    }
    else
    {
        echo "no appointment yet";
    }
}

?>
<!-- <form action="logout.php" method="post">
    <input  type="submit"  name="logout" value="Logout!" style="float: right; background-color: #ffddcf">
</form> -->


<style type=text/css>

*{
    text-decoration: none;
}

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
    .upper{


        padding: 25px 50px 50px;
        margin-left: 20%;
        border-radius: 5px;
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
        margin-top: 30px;
        float: right;

    }

    .box{
        /*outline-color: #8c3434;*/
        border: 3px #8c3434 inset;
        height: 300px;
        width: 500px;
        margin-left: 30%;
        background-color: rgba(176, 222, 202, 0.35);
    }
    .info{

        height: 20px;
        width: 498px;
        border: 2px rgba(165, 42, 42, 0.49) solid;
        margin-top: 2px;
        background-color: rgba(221, 221, 221, 0.4);
        margin-right: 2px;

    }

</style>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
