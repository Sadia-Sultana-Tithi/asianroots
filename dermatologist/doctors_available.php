<?php
session_start();
$conn = mysqli_connect('localhost','root','','asianroots');
global $a;
?>


<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- Account -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">

    
    <title>Doctors Available</title>
    
</head>
 
<body>
    <div class="nav" id="topnav">
        <div class="logo">
            <a class="navbar-brand" href="http://localhost/skincare2/home.php"><img src="http://localhost/skincare2/images/asianroots.png" height="80px" width="200px"></a>
        </div>
        <div class="links">
            <a href="http://localhost/skincare2/home.php" class="mainlink">Home</a>
            <a href="http://localhost/skincare2/products.php">Products</a>
            <a href="http://localhost/skincare2/skintypeQuiz.php">Skin Assessment</a>
            <a href="http://localhost/skincare2/dermatologist/doctors_available.php">Dermatologist</a>
            <a href="http://localhost/skincare2/contact.php">Contact</a>

                <?php
                if ($_SESSION["status"]!=true) {
                    echo '<a href = "http://localhost/skincare2/user_land.php" ><i class="fa fa-user" 
                         style = "color:#315949;font-size: 18px" > Account</i ></a>';
                 }
                else{
                    echo '<a href = "http://localhost/skincare2/user_dashboard.php" ><i class="fa fa-user" 
                         style = "color:#315949;font-size: 18px" > Account</i ></a>';
                }
                ?>


       
        </div>

    </div>

<br><br><br><br><br>
    <div class="cover">
    <?php

   $select = mysqli_query($conn, "SELECT * FROM dermatologist");
   
   ?>

    <div class="doctor-display">
      <table class="doctor-display-table">
         <thead>
         <tr>
       
            <th>Name</th>
            <th>Speciality</th>
            <th>Time</th>
            <th>Action</th>
         </tr>
         </thead>
         <?php 
         while($row = mysqli_fetch_assoc($select)){ 
         ?>
         <tr>
            
            <td><?php echo $row['d_name']; ?></td>
            <td><?php echo $row['d_speciality']; ?></td>
            <td><?php echo $row['d_appointment']; ?></td>


            <td>

                <form  method="post">
<!--                    <input type="submit" name="submit"  value="Get Appointment" style="background: #7faba8"class="btn btn-primary">-->
                    <a href="bookingpage.php" name="submit" type="submit" class="btn">
                        <i class="fa fa-calendar"></i> Get Appointment </a>

                    <input type="hidden" name="d_id" value="<?php echo $row['d_id']; ?>" >

                </form>
<!--               <a href="bookingpage.php"  class="btn">-->
<!--                   <i class="fa fa-calendar"></i> Get Appointment </a>-->
<!--                 -->

            </td>
         </tr>
      <?php


             if(isset($_POST['submit'])) {

                 $a = $_POST['d_id'];
                 $_SESSION["d_id"] =$a;

//                 echo ("<script LANGUAGE='JavaScript'>
//    window.location.href='http://localhost/skincare2/bookingpage.php';
//    </script>");
//             }
//             else{
//                 echo ("<script LANGUAGE='JavaScript'>
//    window.alert('Invalid');
//    window.location.href='http://localhost/skincare2/login.php';
//    </script>");
//             }


             }

             }


         ?>
      </table>
   
   </div>
</div>
    <style> 
       
        *{
           text-decoration: none ;
           margin:0;
           padding:0;
        }


.logo {
    margin-top:30px;
    margin-left:5px;
}

.nav{
    position: fixed;
    z-index: 1000;
    top: 0;
    right: 0;
    left: 0;
    height: 80px;
    display: flex;
    flex-direction: row;
    justify-content: space-between;
    align-items: center;
    padding: 0 25px 0 25px;
    background-color: #dfdbda;
 
   

}
.nav {
  overflow: hidden;
  
}

.nav a {
  float: left;
  display: block;
  
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}
.nav a:hover {
  background-color: #ddd;
  color: black;
}
.nav a.active {
  background-color: #04AA6D;
  color: white;
}

.nav .icon {
  display: none;
}


.nav .links a{
    margin-right: 25px;
    font-size: 18px;
    font-weight: 500;
    color: black;
}

.nav .links .mainlink{
    color: #315949;
    font-weight: 500;
}

.nav h4{
    font-size: 22px;
    font-weight: bold;
    margin-left: 25px;
}

        body{
            background-color: #F6F6F6;
        }
        
        
        html{
           font-size: 45%;
           overflow-x: hidden;
        }
        .cover{
            
            border:1px white;
            border-radius: 2px;
            width:70%;
            padding: 40px 40px;
            margin-left: 200px;
        }
        .doctor-display{
          
             content: center; 

        }

        .doctor-display-table{
               width: 100%;
               text-align: center;
        }

        .doctor-display-table th{
            border-bottom: 1px solid #ddd;
               padding:1rem;
               font-size: 2rem;
        }


        .doctor-display-table td{
               padding:1rem;
               font-size: 2rem;
              border-bottom: 1px solid #ddd;
        }
        a{
            text-decoration: none;
        }
        h1{
            margin-left: 400px;
        }
      


    </style>
</body>
 
</html>