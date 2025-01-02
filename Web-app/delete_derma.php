
<?php
error_reporting(0);
$d_id = $_POST['d_id'];

// Database connection
$conn = new mysqli('localhost','root','','asianroots');
if($conn->connect_error){
    echo "$conn->connect_error";
    die("Connection Failed : ". $conn->connect_error);
} else {
    $stmt = $conn->prepare("delete from  dermatologist where d_id= '$d_id'");

    $execval = $stmt->execute();


    $stmt->close();
    $conn->close();
}
?>




<!DOCTYPE html>
<html>
<head>
    <title>Remove dermatologist</title>


</head>
<body>

<div class="header">
    <a class="arrow"href="home.php"> <img src="images/asianroots.png"width="280px" height="65px"> </a>
    <font style="float: right;margin-right: 40px;margin-top: 10px; border: 1px solid darkred; background: pink;"><a class="sign"href="dermatologist_land.php"> << </a></font>


</div>


<div class="main">
    <section >
        <h1>Delete Dermatologist!</h1><br><br>
        <div class="button" >
            <a href="doctors_available.php" class="btn">Display dermatologist</a><br><br>
            <form action="delete_derma.php" method="post">
                <input type="number" id="d_id" name="d_id" placeholder="enter dermatologist ID">
                <button type="submit" name="delete" class="btn btn-default">DELETE</button>

            </form>
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

    body {
        height: 75px;
        width: 150px;
        background-color: rgba(140, 52, 52, 0.29);
        background-image: url("images/back1.jpg");
    }

    h1 {
        color: darkred;
        text-align: center;
        margin-left: 40px;
    }
    input{
        line-height: 30px;
        width: 130%;
    }

    .header{
        width: 130%;
        height: 60px;

        margin-top: 0px;
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





<!--<section> <h1>delete reviews</h1></section>-->
<!--<section>-->
<!---->
<!---->
<!---->
<!--                    <form action="delete_derma.php" method="post">-->
<!--                            <label for="d_id">Dermatologist ID</label>-->
<!---->
<!--                            <input type="number" id="d_id" name="d_id">-->
<!---->
<!---->
<!---->
<!--                        <button type="submit" name="delete" class="btn btn-default">DELETE</button>-->
<!---->
<!--                    </form>-->
<!---->
<!---->
<!--</section>-->
<!--<section >-->
<!--    <div class="button" >-->
<!--        <a href="show%20experience.php" class="btn">Display reviews</a>-->
<!---->
<!--    </div>-->
<!--</section>-->
<!---->
<!---->
<!---->
<!--<style>-->
<!--    table{-->
<!---->
<!--        border: 5px white;-->
<!---->
<!---->
<!---->
<!--    }-->
<!--    section{-->
<!---->
<!--        position: absolute;-->
<!--        top: 20%;-->
<!--        left: 50%;-->
<!--        transform: translate(-50%,50%);-->
<!--    }-->
<!---->
<!--    form{-->
<!--        width: 100%;-->
<!--        height: 50%;-->
<!--        margin: 20px auto;-->
<!--        margin-top: 50px-->
<!---->
<!--    }-->
<!--    form div{-->
<!--        margin-top: 0px;-->
<!--    }-->
<!--    section div{-->
<!--        margin-top:30px ;-->
<!--    }-->
<!---->
<!--    body {-->
<!--        height: 75px;-->
<!--        width: 150px;-->
<!--        background-image: url("images/kala.jpg");-->
<!--    }-->
<!--    h2 {-->
<!--        color: white;-->
<!--        text-align: center;-->
<!--    }-->
<!--    h1 {-->
<!--        color: white;-->
<!--        text-align: center;-->
<!--    }-->
<!---->
<!--    label-->
<!--    {-->
<!--        color: white;-->
<!--        font-size: 30px;-->
<!--    }-->
<!--    input-->
<!--    {-->
<!--        font-size: 20px;-->
<!--        font-family: "Comic Sans MS";-->
<!--        margin-top: 5px;-->
<!---->
<!--    }-->
<!---->
<!---->
<!---->
<!---->
<!--</style>-->
<!--</body>-->
<!--</html>-->

