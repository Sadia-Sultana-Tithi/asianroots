<?php
session_start();

if ($_SESSION["status"] != true){
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Login first');
    window.location.href='http://localhost/skincare2/login.php';
    </script>");
//    header("Location: login.php");
}

?>
<!DOCTYPE html>
<html>
<head>
</head>

<body>


<div class="header">
    <a class="arrow"href="home.html"> <img src="images/asianroots.png"width="20%" height="65px"> </a>
</div>
<form name="myForm" action="action_page.php" onsubmit="return validateForm()" method="post" >


    <fieldset>
        
        <legend><h2>Appointment</h2></legend>

        First Name:  <input id ="fname" type="text" ><br><br>
        
        Last Name:<input id ="fname" type="text" ><br><br>
        

        Gender: <input type="radio" id="genderM" name="gender" value="male"> Male
                <input type="radio" id="genderF" name="gender" value="male"> Female
                <input type="radio" id="genderO" name="gender" value="male"> Others<br><br>

              Contact no: <input id="number"type="tel"></br><br> 

              Email: <input id="email" type="email" ></br><br>

              Doctor:  <select name="SelectDoctor" id="select">
                           <option value = "-1" selected>[Choose one]</option>
                           <option value = "1">Cosmetic Dermatology</option>
                           <option value = "2">Dermatopathology</option>
                           <option value = "3">Mohs Surgery</option>
                        </select> </br><br>
                       
              <button>Submit</button>



</fieldset>
</form>

 <script>
function validateForm(){
  var firstname= document.getElementById("fname").value;
  var lastname=document.getElementById("fname").value;
  var gender=document.getElementById("genderM").value
  var gender=document.getElementById("genderF").value
   var gender=document.getElementById("genderO").value
  var contact=document.getElementById("number").value
  
  
  if(firstname.trim()=="")
  {
    alert("please enter name!");
    return false;
  }
   if(genderM.checked==false && genderF.checked==false && genderO.checked==false ) {
        alert("You must select male or female");
        return false;
    }  
    if(contact.trim()=="")
  {
    alert("please enter your phone number!");
    return false;
  }
  var num=/^[0-9]{7}/;
  if(!contact.trim().match(num))
  {
    alert("please enter numeric number and length must be 7!");
    return false;
  }

  if( document.myForm.SelectDoctor.value == "-1" ) {
            alert( "Please choose your preferable branch!" );
            return false;
         }
  else 
    return true;
  

  
}
</script>
<style>
  body{
    background: url("images/back1.jpg");
  }
        form {
            width: 500px;
            padding: 15px 40px 40px;
            margin: 50px auto 0;
            border-radius: 5px;
            background-color: rgba(140, 52, 52, 0.29);
        }
      input{
            border: 1px solid #ccc;
            margin-left: 10px;
            border-radius: 2px;
            position: center;
        }
        
</style>
</body>
</html>
