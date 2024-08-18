<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <!-- Account -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
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


  <!-- booking section starts   -->
  <section class="book" id="book">

  <div class="row">

        <div class="image">
            <img src="book-img.svg">
        </div>

        <form name="myForm" action="appointment.php" onsubmit="return validateForm()" method="post" >


    <fieldset>
        
        <h1 style="text-align: center;font-size: 30px">Appointment</h1><br><br>

        First Name:  <input type="text" id ="fname" name="first_name"  ><br><br>
        
        Last Name:<input type="text" id ="fname"  name="last_name" ><br><br>
        

        Gender: <input type="radio" id="genderM" name="gender" value="male"> Male
                <input type="radio" id="genderF" name="gender" value="male"> Female
                <input type="radio" id="genderO" name="gender" value="male"> Others<br><br>

              Contact no: <input type="number" id="number" name="contact"></br><br> 

              Email: <input type="email" id="email" name="email" ></br><br>

              Appointment Day:  <select name="appointment_day" id="appointment_day">
                           <option value = "Not Selected" selected>Select day</option>
                           <option value = "Sunday 11:00AM ">Sunday 11:00AM</option>
                           <option value = "Monday 11:00AM">Monday 11:00AM</option>
                           <option value = "Tuesday 11:00AM">Tuesday 11:00AM</option>
                           
                        </select> </br><br>
                       
              <button class='submit' name='submit' id='submit'>Submit</button>



</fieldset>
</form>
</div>
</section>




 <script>
function validateForm(){
 
  var gender=document.getElementById("genderM").value
  var gender=document.getElementById("genderF").value
   var gender=document.getElementById("genderO").value
  var contact=document.getElementById("number").value
  
  
  
   if(genderM.checked==false && genderF.checked==false && genderO.checked==false ) {
        alert("You must select male or female");
        return false;
    }  

  if( document.myForm.appointment_day.value == "Not Selected" ) {
            alert( "Please choose your preferable day!" );
            return false;
         }
  else 
    return true;
  

  
}
</script>

<style>


*{
    font-family: 'Poppins', sans-serif;
    margin:0; padding: 0;
    box-sizing: border-box;
    outline: none; border: none;
    text-transform: capitalize;
    transition: all .2s ease-out;
    text-decoration: none;
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

html{
    font-size: 70%;
    overflow-x: hidden;
   
}

section{
    padding:2rem 10%;

}

button{
    display: inline-block;
    margin-top: 1rem;
    padding: .5rem;
    padding-left: 1rem;
    border-radius: .5rem;
    color:black;
    border-radius: 5px ;
    font-size: 1.7rem;
    background: #fff;
}

  .book .row{
    display: flex;
    align-items: center;
    flex-wrap: wrap;
 
}
 
.book .row .image{
    flex:1 1 45rem;
}

.book .row .image img{
    width: 100%;
}

.book .row form{
    flex:1 1 45rem;
    background-color: #9cccc4;
   /* border:2px solid black;*/
    text-align: center;
    padding: 2rem;
    border-radius: 50px;
    font-size: 15px;
    box-shadow: 
}

  
        
</style>
</body>
</html>
