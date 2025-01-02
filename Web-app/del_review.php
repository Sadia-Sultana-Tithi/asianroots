
<!DOCTYPE html>
<html>
<head>
    <title>Deleting product</title>

</head>
<body>

<div class="logo">
            <a class="navbar-brand" href="home.php">
                <img src="images/asianroots.png" height="80px" width="200px">
            </a>
</div>

<div class="main">
<section >
    <h1>Delete Reviews!</h1><br><br>
<div class="button" >
    <a href="review.php" class="btn">Display reviews</a><br><br>
    <input type="number" name="text" placeholder="Review_id"><br><br>
        <button type="submit" name="delete" class="btn btn-default">DELETE</button>

</div>
</div>
</section>



<style>
    section{

        position: absolute;
        top: 10%;
        left: 50%;
        transform: translate(-50%,50%);
    }
    a{
        text-decoration: none;
        color: black;
        border: 1px solid black;
        background-color: white;

    }
    body {
        height: 75px;
        width: 150px;
       
    }

    h1 {
        color: darkred;
        text-align: center;
        margin-left: 40px;
    }
    
    .main{
        background-color: rgba(140, 52, 52, 0.29);
        height: 300px;
        width: 400px;
        border: 2px solid white;
        margin-left: 500px;
        margin-top: 80px;
    }
</style>
</body>
</html>
