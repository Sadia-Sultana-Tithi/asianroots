<<?php error_reporting(0); ?>
<!DOCTYPE html>

<html>

<head>
	<meta charset=UTF-8 />
   <!-- ACCOUNT -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Comment -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@400;600&display=swap" rel="stylesheet">
	 <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Skin Type Quiz</title>
	
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
             /* box-shadow: 0 19px 38px #dfdbda;*/
             

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

       
         #page-wrap{
            width:900px;
            background-color: white;
            padding: 25px 50px 50px;
            margin-left: 15%;
            border-radius: 5px;
        }
        
        .image{
            background-position: center;
              background-repeat: no-repeat;
              background-size: cover;
            
        }
        p{
            font-size: 40px;
            font-family: ;
        }
        #results{
            font-size: 25px;
            font-family:sans-serif;
            color: rgb(255, 128, 0);
        }
        #details{
            font-size: 20px;
            font-family:sans-serif;
        }
        
    </style>

</head>

<body>
 
<div class="nav">
        <div class="logo">
            <a class="navbar-brand" href="home.php"><img src="images/asianroots.png" height="80px" width="200px"></a>
        </div>
        <div class="links">
            <a href="#" class="mainlink">Home</a>
           
            <a href="product_display.php">Products</a> 
            
            <a href="skintypeQuiz.php">Skin Assessment</a>
            <a href="dermatologist/doctors_available.php">Dermatologist</a>
            <a href="contact.php">Contact</a>
            <a href="user_land.php"><i class="fa fa-user" style="color:#315949;font-size: 18px"> Account</i></a>

        </div>

    </div>
	<div id="page-wrap">
        <div class="image"> <br><br><br>
          <img src="images/blogs6.jpg" style="width:100%;height:80%">
        </div>

		
		
        <?php
            
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
            $answer5 = $_POST['question-5-answers'];
        
            $dryskin = 0;
            $normalskin=0;
            $oilyskin=0;
            $combinationskin=0;

          
           if ($answer1 == "B" && $answer2 == "A" && $answer3 == "B" && $answer4 == "B" && $answer5 == "B") {  
                
               
                echo "<br><br><div id='results'> You have Dry skin </div> <br><br>";
                echo "<div id='details'> Your skin is in desperate need of moisture! Those of you with dry skin tend to have patches of flaky, itchy skin around the cheeks, chin and nose. Your complexion is a bit dull, and you experience tightness throughout the day.<br>

                Dry skin can be a result of over-cleansing with harsh face washes or scrubs containing sulfates, alcohols or other abrasive ingredients. Your skin is being stripped of its protective oils and can't effectively hold on to moisture. Keep in mind your skin type can also change with the seasons, stress levels, hormones, age and diet. So this could be temporary!<br>

                If you have dry skin, we recommend you focus on hydrating from the inside out and outside in. Drink plenty of water throughout the day, use gentle exfoliators to remove dead skin cells, and find products containing hyaluronic acid, glycerin and squalane.</div><br><br>";

              echo "<a href='products.php'style='text-decoration: none'>Suggested products For DRY Skin</a>";
              
                    
            }
            
            else if ($answer1 == "A" && $answer2 == "B" && $answer3 == "A" && $answer4 == "C" && $answer5 == "A") {  
               
                echo "<div id='results'> You have oily skin </div><br><br> ";

                echo "<div id='details'>Your sebaceous glands are working overtime! This could simply be hereditary (thanks mom and dad!) or your hormones could be off due to age, stress or even your menstrual cycle.<br>

                Those of you with oily skin typically have all-over shiny complexions that tend to get greasy as the day goes on. You have a hard time with heavy makeup, and your biggest pain point is enlarged pores (a.k.a. pesky blackheads and breakouts.)<br>

                The good news is oily skin retains moisture well, making you less prone to wrinkles and premature aging!<br>

                Even though your instinct is to strip away as much oil as possible, we actually recommend you use gentle, hydrating products that help keep your pores clean while still protecting your skin barrier. Think double cleansing, toners with AHAs and BHAs, oil-free moisturizers and lightweight SPF!</div><br><br> ";

                echo "<a href='products.php' style='text-decoration: none'>Suggested products For OILY Skin</a>";
            }
            
           else if ($answer1 == "D" && $answer2 == "D" && $answer3 == "D" && $answer4 == "C" && $answer5 == "C") {  
                
                echo "<div id='results'> You have NORMAL skin </div><br><br>";
                echo "<div id='details'>You hit the jackpot my friend! Your skin is hydrated, smooth in texture and rarely breaks out. You're never too dry or too oily, and you react well to most skincare products.<br>

                Of course, that doesn't mean your skin isn't phased by weather changes, hormone fluctuations or stress. You're just like the rest of us! You might experience dry skin in the winter, oily skin in the summer, and even battle with pesky period pimples every now and then. But overall, your skin is pretty chill.<br>

                That means you can have all the fun in the world when it comes to experimenting with beauty products! As always, we recommend you stick to clean, non-comedogenic ingredients and avoid harsh chemicals like sulfates, phthalates and parabens. Your goal is to keep your skin balanced and clean!</div><br><br> ";

                echo "<a href='products.php'style='text-decoration: none'>Suggested products For NORMAL Skin</a> ";
            }
            else{
            
            echo "<div id='results'> You have combination skin </div><br>_________________________________________________________________________<br> <br>";

            echo "<div id='details'> Your skin simply can't decide! You have an oily t-zone (forehead, nose and chin) but experience dryness around your cheeks. While this could be a result of genetics, combination skin can also occur when you use harsh or aggravating ingredients that dry out some areas of your face while stimulating oil production in others. Your skin also changes quite a bit with the seasons! Dry winters and oily summers are your norm.<br>

            The tricky part for you is finding the right combination of products to match your combination skin. You won't find a one-size-fits-all because different parts of your face require different types of ingredients.<br>

            With that in mind, we recommend you find hydrating cleansers and toners, chemical exfoliators containing glycolic and lactic acid, gel-based PM moisturizers and oil-based serums to use as spot treatments on your dry areas.</div><br><br>  ";


            echo "<a href='products.php' style='text-decoration: none'>Suggested products For COMBINATION Skin</a>";
        }

            
        ?>
	
	</div>


</body>

</html>