<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
  
   

    <title>Sign up</title>


    <style>
        .cover{
            width: 100%;
            height: 641px;

        }

        .formback{

            height: 480px;
            width: 500px;
            background-color: rgba(140, 52, 52, 0.29);
            margin-left: 400px;
            border-radius: 30px;

        }
        .formbox{

            height: 30px;
            width:500px;
            margin-left: 90px;
            border:2px  solid rgba(0, 0, 0, 0);
            margin-top: 20px;
            border-radius: 5px;

        }
        h3{
            text-align: center;
            color: #8c3434;
            font-family: Bookman Old Style;
            font-size: 20px;
        }
        .signup{
            height: 40px;
            width: 65px;
            margin-left: 90px;
            margin-top: 30px;
            border-radius: 6px;
            background-color: rgba(205, 92, 92, 0.59);
        }
        .signup:hover{

            background-color: aquamarine;
        }
        
    </style>


</head>
<body>

<div class="cover">
    <div class="logo">
            <a class="navbar-brand" href="home.php"><img src="images/asianroots.png" height="80px" width="200px"></a>
        </div>
    <form action="signupback.php" method="post">

    <div class="formback"><br>
        <h3>Welcome to Sign Up!</h3>
        <br>
        <div class="formbox"style="">
            <input type="text" placeholder="Full Name" id="name" name="name">
        </div>
        <div class="formbox" style="margin-top:10px">
            <input type="number" placeholder="Phone Number"id="phone"name="phone">
        </div>
        <div class="formbox" style="margin-top:10px">
            <input type="text" placeholder="Email" id="email" name="email">
        </div>
        <div class="formbox" style="margin-top:10px">
            <input type="text" placeholder="Password" id="pass1" name="pass1">
        </div>
        <div class="formbox" style="margin-top:10px">
            <input type="text" placeholder="Confirm Password"id="pass2"name="pass2">
        </div>
        <button class="signup" type="submit" name="submit">  Sign up </button>

</div>
</div>
</form>

</body>
</html>