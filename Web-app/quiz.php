<!--code by webdevtrick (webdevtrick.com) -->
<head>
 <meta charset=UTF-8 />
 
 <title>Skin Type Detection</title>
 
 <link rel="stylesheet" type="text/css" href="style.css" />
</head>
 
<body>
 <div class="right"> <img src="images/asianroots.jpg" width="300" height="100"></div>
 <div class=upper>

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
        <p style="font-size:30px; margin-left: 60px; color:rgb(128,128,128)">Simply answer the 9 questions below to get started!</p>
    </ul></p>
 <div id="page-wrap">
    


 
 <form action="result.php" method="post" id="quiz">
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
            
            <input  type="submit" value="Submit" class="submitbtn" />
 </fieldset>
 </form>
</div>

 
 </div>
  <style type="text/css">
        body{
            background-color: rgb(245,245,245);
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
              background-color: rgb(255, 153, 102);
              color: white;
            }
  </style>
 
</body>
 
</html>