<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
 <meta charset=UTF-8 />
  <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <title>Skin Type Detection</title>
 
 <!-- Account -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">


    
   
</head>
 
<body>
 <!-- Navigation -->
    <div class="nav" id="topnav">
        <div class="logo">
            <a class="navbar-brand" href="home.php"><img src="images/asianroots.png" height="80px" width="200px"></a>
        </div>
        <div class="links">
            <a href="#" class="mainlink">Home</a>
            <a href="products.php">Products</a>
            <a href="skintypeQuiz.php">Skin Assessment</a>
            <a href="dermatologist/doctors_available.php">Dermatologist</a>
            <a href="contact.php">Contact</a>

                <?php
                if ($_SESSION["status"]!=true) {
                    echo '<a href = "user_land.php" ><i class="fa fa-user" 
                         style = "color:#315949;font-size: 18px" > Account</i ></a>';
                 }
                else{
                    echo '<a href = "user_dashboard.php" ><i class="fa fa-user" 
                         style = "color:#315949;font-size: 18px" > Account</i ></a>';
                }
                ?>


       
        </div>

    </div>

 <div class=upper> <br><br>

 <p style="text-align: center;color: rgb(152,152,152)"> SKINCARE</p>
 <h1 style="text-align: center;font-size: 40px">Find Out Your Skin Type!</h1>
 <img src="images/skintype_image.webp" style="width:100%">

 <p style="color:   rgb(128,128,128)">Keep in mind, your skin can change based on stress levels, hormone fluctuations, diet, sleep, and even weather. These results will hopefully give you a general base you can work off of when it comes to picking the right products for your skin.<br>

    This quiz will tell you:
    <ul>

       <li style="color:   rgb(128,128,128)"> What your skin type is currently </li>
       <li style="color:   rgb(128,128,128)"> Why your skin is the way that it is </li>
        <li style="color:   rgb(128,128,128)">The types of ingredients you should be focusing on </li>
        <li style="color:   rgb(128,128,128)">Our top 5 recommended products based on your results </li>
        <p style="font-size:30px; margin-left: 60px; color:rgb(128,128,128)">Simply answer the 5 questions below to get started!</p>
    </ul></p>

 <div id="page-wrap">
    
 <form name="myForm" action="result.php" onclick ="return validateForm()" method="post" >
    <fieldset>
        
            <ol>
            
                <li>
                
                    <h3>Which of these best describes your pores?</h3>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                        <label for="question-1-answers-A">My pores are large and visible all over my face </label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                        <label for="question-1-answers-B">My pores are small and not visible</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                        <label for="question-1-answers-C">My pores are medium to large around my T-zone</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                        <label for="question-1-answers-D">My pores are visible but small</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>How does your skin look and feel when you wake up?</h3>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                        <label for="question-2-answers-A">My skin is screaming for moisture</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                        <label for="question-2-answers-B">My face is oily and shiny all over</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                        <label for="question-2-answers-C">My forehead is very oily but my cheeks feel dry</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                        <label for="question-2-answers-D">My skin is calm with a light layer of oil all over</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>How does your skin look and feel at the end of the day?</h3>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                        <label for="question-3-answers-A">Crazy oil. My makeup is basically melting off my face</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                        <label for="question-3-answers-B">Like the desert. I need to put moisturizer on asap</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                        <label for="question-3-answers-C">My forhead and nose are very shiny and oily</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                        <label for="question-3-answers-D">Dull and tires. It feels mostly dry</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>Do you have facial lines and wrinkles?</h3>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                        <label for="question-4-answers-A">Very few</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                        <label for="question-4-answers-B">Very deep</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                        <label for="question-4-answers-C">Expression lines only</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                        <label for="question-4-answers-D">None</label>
                    </div>
                
                </li>
                
                <li>
                
                    <h3>My biggest concern is...</h3>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                        <label for="question-5-answers-A">Acne and flare ups</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                        <label for="question-5-answers-B">patches of Dry,flaky skin</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                        <label for="question-5-answers-C">An occasional pimple and two</label>
                    </div>
                    
                    <div>
                        <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                        <label for="question-5-answers-D">Uneven skin tone and texture</label>
                    </div>
                
                </li>
            
            </ol>
            
            <input  type="submit" value="Submit" class="submitbtn" onSubmit="ValidateForm(this.form)"/>
 </fieldset>
 </form>
</div>
</div>
<style type="text/css">

        body{
            background-color: rgb(245,245,245);
        }
        *{
    text-decoration: none ;
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
        .footer{
          font-family: "Century Gothic";
          font-size: 15px; 
          background-color: white;
        }
        
        .upper{
            width:900px;
            background-color: white;
            padding: 25px 50px 50px;
            margin-left: 15%;
            border-radius: 5px;
        }
        form {

            width: 800px;
            padding: 15px 40px 40px;
            margin-left: 1%;
            border-radius: 5px;
            background-color: white;
        }
        
        .right{
            float:left;
   
        }
        .submitbtn {
              background-color: #e7e7e7;
              border: none;
              color: black;
              padding: 14px 80px;
              margin-left: 35%;
              text-align: center;
              text-decoration: none;
              display: inline-block;
              font-size: 16px;
            }

            .submitbtn {
              transition-duration: 0.4s;
            }

            .submitbtn:hover {
              background-color: #eab676;
              color: white;
            }
      
  </style>
 

</body>
 <script >
    
    function validateForm(){
   

       
       if(  document.getElementById("question-1-answers-A").value.checked==false || 
            document.getElementById("question-1-answers-B").value.checked==false ||
            document.getElementById("question-1-answers-C").value.checked==false || 
            document.getElementById("question-1-answers-D").value.checked==false ) {

                alert("You must fill QUESTION-1");

            return false;
        }  



      else 
        return true;
    }

</script>
    

</html>