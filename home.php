<?php
error_reporting(0);
session_start();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <!-- Media View -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skin Care</title>
    <!-- Custom CSS -->
    <link rel="stylesheet" href="home.css">
    <!-- Account -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
    <!-- Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet"> 
   
   

</head>
<body>
<div class="wrapper">

    <!-- Navigation -->
    <div class="nav" id="topnav">
        <div class="logo">
            <a class="navbar-brand" href="home.php"><img src="images/asianroots.png" height="80px" width="200px"></a>
        </div>
        <div class="links">
            <a href="#" class="mainlink">Home</a>
            <a href="#blog">Blogs</a>
            <a href="#tip">Skin Tips</a>
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


        <a href="javascript:void(0);" class="icon" onclick="myFunction()">
             <i class="fa fa-bars"></i>
        </a>
        </div>

    </div>


    <!-- LANDING PAGE -->

    <div class="landing">
        <div class="landingText" data-aos="fade-up" data-aos-duration="1000">
            <h1>Select The Best For Your Skin
                <span style="color:#e0501b; font-size: 50px"></span>
            </h1>
            <h3>It's time to have more than just beautiful skin</h3>
            <div class="btn">
                <a href="#tip">Learn More</a>
            </div>
            <div class="btn">
                <a href="bot.html">chat with chatty</a>
            </div>
        </div>
        <div class="landingImage" data-aos="fade-down" data-aos-duration="500">
            <img src="images/home again1.jpg" alt="">
        </div>
    </div>

    <!-- VIDEO  SECTION -->



    <!-- <div class="video" data-aos="fade-up" data-aos-duration="1000">
        <video width="100%" height="100%" controls autoplay>
            <source src="images/skincare.mp4" type="video/mp4">
        </video>
    </div><br><br><br> -->

    <!-- INFO SECTION -->

    <div  id="blog" class="infoSection">
        <div class="infoHeader" data-aos="fade-up" data-aos-duration="500">
            <h1 style="color:gray">Healthy skin is always in.</h1>
        </div>
        <div class="infoCards">
            <div class="card one" data-aos="fade-up" data-aos-duration="500">
                <img src="images/card1.webp" class="cardoneImg" alt="" data-aos="fade-up" data-aos-duration="1100">

                <div class="cardbgone"></div>
                <div class="cardContent">
                    <h2>Yon Ka</h2>
                    <p>Yon-Ka is a luxury Parisian brand.Their website also includes skincare tips</p>
                    <a href="https://shop.yonkausa.com/blog/skin-care-tips/skincare-ingredients-to-avoid/">
                        <div class="cardBtn">
                            <img src="images/next.png" alt="" class="cardIcon">
                        </div>
                    </a>
                </div>
            </div>
            <div class="card two" data-aos="fade-up" data-aos-duration="1300">
                <img src="images/card2.webp" class="cardtwoImg" alt="" data-aos="fade-up" data-aos-duration="1200">

                <div class="cardbgtwo"></div>
                <div class="cardContent">
                    <h2>Skin Care Tips</h2>
                    <p>How does your Skin Care Help your Overall Health?</p>
                    <a href="https://shop.yonkausa.com/blog/category/skin-care-tips/">
                        <div class="cardBtn">
                            <img src="images/next.png" alt="" class="cardIcon">
                        </div>
                    </a>
                </div>
            </div>
            <div class="card three" data-aos="fade-up" data-aos-duration="1600">
                <img src="images/card3.webp" class="cardthreeImg" alt="" data-aos="fade-up" data-aos-duration="1300">
                <div class="cardbgone"></div>
                <div class="cardContent">
                    <h2>Natural beauty workshop</h2>
                    <p>Living a healthy lifestyle includes following a balanced diet and getting enough sleep.</p>
                    <a href="https://shop.yonkausa.com/blog/skin-care-tips/skincare-ingredients-to-avoid/">
                        <div class="cardBtn">
                            <img src="images/next.png" alt="" class="cardIcon">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>


    <div class="tips" id="tip">
        <h1> Healthy Tips!</h1><br><br>
            
            <img src="images/tips12.png" height="300" width="500" data-aos="fade-up" data-aos-duration="1000"><br><br><br>
            
                Oranges are rich in citric acid, which helps in controlling acne. They have exfoliating properties also, which gives you a natural shine and youthful glow. You can apply the orange juice directly also on the skin with cotton pads or balls. As we know orange is rich in vitamin C, so it helps in controlling the signs of ageing and giving you that plump and firm skin. It increases the production of collagen. It largely helps in shrinking the pores.<br><br><br>
            
            <img src="images/tips11.png" height="300" width="500" data-aos="fade-up" data-aos-duration="1000"><br><br><br>
            
                Avocados can gently exfoliate your skin, owing to their antioxidant and mineral content. Applying avocado to your skin can unclog skin pores, remove dead skin cells, and remove excess oil. Moreover, avocados provide skin nourishment, boosting skin repair and rejuvenation.<br><br><br>

            <img src="images/tips9.png" height="300" width="500" data-aos="fade-up" data-aos-duration="1000"><br><br><br>
            
            High amounts of collagen contents in your skin help in skin firmness and make your skin appear soft. Regular consumption of amla juice boosts vitamin C levels and helps increase the production of collagen level in your skin. This will make your skin look soft and youthful.<br><br><br>

            <img src="images/tips13.png" height="400" width="550" data-aos="fade-up" data-aos-duration="1000"><br><br><br>
        
            Since aloe vera contains humectants (substances that attract water from the air or from deeper in the skin), it's thought to be especially beneficial for dry skin types. "Aloe specifically contains mucopolysaccharides, which bind moisture into the skin," says Green. "It also has cohesive effects by sticking together flaking epidermal skin cells, resulting in softer skin and improved skin integrity."
            <br><br><br>
        </div>
    

        <div class="footer">

            <h3>AsianRoots</h3>
            <h4> we have proposed a skin care routine decision support system using the knowledge-base.
                The system able to predict the user skin type based on environment, age, gender, sleeping
                hour and skin conditions that will be input by the user. After the skin type determination process
                finished, the system provides tips and knowledge of common chemical ingredient that needs to be avoided
                by the user. Expected results for the feedback are the system able to support the user to determine their
                skin type and give knowledge to the user in order to select correct routine and suitable product.</h4>
           

        <div class="footer-bottom">
            <p>copyright &copy; <a href="#">AsianRoots</a>  </p>
                    <div class="footer-menu">
                      <ul class="f-menu">
                        <a href=""style="color:#ffffff;font-size: 15px">Home</a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href=""style="color:#ffffff;font-size: 15px">About</a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href=""style="color:#ffffff;font-size: 15px">Contact</a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href=""style="color:#ffffff;font-size: 15px">Blog</a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href="admin/admin_land.php"><i class="fa fa-user" style="color:#deeeee;font-size: 18px">Admin</i></a>
                      </ul>
                    </div>
        </div>
        </div>
    </div>
        
            
   <div id="cookiePopup" class="hide">
      <img src="images/cookies.png">
      <header class="title"> We Use Cookies</header>
        <p>Please, accept these sweeties to continue enjoying our site!</p> <a href="#">Cookie Policy & Privacy.</a>
      <button id="acceptCookie">Accept</button>
    </div>
</div>
    
    <script>

          let popUp = document.getElementById("cookiePopup");
          //When user clicks the accept button
          document.getElementById("acceptCookie").addEventListener("click", () => {
         
          let d = new Date();
          //(cookie will expire after 1 minute)
          d.setMinutes(1 + d.getMinutes());
          //Create Cookie withname = myCookieName, value = thisIsMyCookie and expiry time=1 minute
          document.cookie = "myCookieName=$_SESSION['IP']; expires = " + d + ";";
          //Hide the popup
          popUp.classList.add("hide");
          popUp.classList.remove("show");
        });
        //Check if cookie is already present
        const checkCookie = () => {
          //Read the cookie and split on "="
          let input = document.cookie.split("=");
          //Check for our cookie
          if (input[0] == "myCookieName") {
            //Hide the popup
            popUp.classList.add("hide");
            popUp.classList.remove("show");
          } else {
            //Show the popup
            popUp.classList.add("show");
            popUp.classList.remove("hide");
          }
        };
        //Check if cookie exists when page loads
        window.onload = () => {
          
            checkCookie();
          };

    </script>

   

        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
        <script>
            AOS.init();
        </script>
  

    <script>
        function myFunction() {
          var x = document.getElementById("topnav");
          if (x.className === "topnav") {
            x.className += " responsive";
          } else {
            x.className = "topnav";
          }
        }
</script>
</body>

</html>




