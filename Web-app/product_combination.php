
<!DOCTYPE html>
<html lang="en">
<head>
    <title>products</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="home.php"><img src="images/asianroots.png" height="60px" width="220px"></a>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="home.php">Back <span class="sr-only">(current)</span></a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dry
                </a>
              
                   

            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Product Type
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Shampoo</a>
                    <a class="dropdown-item" href="#">Facewash</a>
                    <a class="dropdown-item" href="#">Soap</a>
                    <a class="dropdown-item" href="#">Serum</a>

            </li>



        </ul>
      
    </div>
</nav>
<br><br>

<?php
include_once ("db_connection.php");
global $conn,$a,$b;
$query="select * from products where type LIKE'combination'";
$data=mysqli_query($conn,$query);
$total=mysqli_num_rows($data);
$result= mysqli_fetch_assoc($data);


?>
<div class="row">
    <?php
if($total!=0) {
while ($result = mysqli_fetch_assoc($data)) {
        {
?>

    <div class="col-2" style="margin-left: 30px;">
        <div class="card">
            <img class="card-img-top" src="<?php echo $result['image']; ?>" alt="Card image">
            <div class="card-body">
                <h4 class="card-title"> <?php echo $result['product_name']; ?></h4>
                <p class="card-text">   <?php echo $result['price']; ?></p>
               <form  method="post">
                <input type="submit" name="submit"  value="View details" class="btn btn-primary">
                   <input type="hidden" name="product_name" value=<?php echo $result['product_name']; ?>>
                  <input type="hidden" name="p_id" value=<?php echo $result['p_id']; ?>>


                </form>

            </div>
        </div>
    </div>


    <?php


    ?>

<?php
}

}
    if(isset($_POST['submit'])) {
        $a=($_POST['p_id']);
        $b=($_POST['product_name']);

  echo view_details($a,$b);

    }
}
    else
    {
        echo "no records";
    }
    ?>
    </div>



<?php

?>



<script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


<style>

    body{
        background-color: rgba(127, 171, 168, 0.24);
    }


    </style



<?php
 function view_details($a,$p){

?>

<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" type="text/css" href=""> 
</head>
<div>


    <div class="details">

    <?php
    include_once ("db_connection.php");
    global $conn;
    $query="select * from products where p_id=$a";
    $data=mysqli_query($conn,$query);
    $total=mysqli_num_rows($data);
    $result= mysqli_fetch_assoc($data);


    if($total!=0) {

        for($i=1;$i<=$total;$i++)
        {
        ?>

                <img class="img" src="<?php echo $result['image']; ?>" alt="Card image">
                <div class="info" style=" margin-right:50px ">
                    <h1 style="color: #189AB4;"><?php echo $result['product_name']; ?><br> <h2 style="color:#2E8BC0;">DAILY FACIAL MOISTURIZER SPF 15</h2></h1>

                <p> <?php echo $result['details']; ?>

                    <br><br>
               <h2 style="color: #05445E;">FEATURES</h2>
                <p>

    <?php echo $result['features']; ?>
            </div>
        </div>
        <div style="width: 100%; margin-left: 30px">
            <h2 style="color: #05445E;">INGREDIENTS</h2>
<p>
    <?php echo $result['ingri']; ?>
 </p>
 <div class="footer">
          <h2 style="color: #05445E;">ROUTINE</h2>
                <div class="left">
                   <h3> <?php echo $result['s1_q']; ?></h3>
                        <?php echo $result['s1_a']; ?>
                </div>
                <div class="center">
                   <h3><?php echo $result['s2_q']; ?></h3>

                    <?php echo $result['s2_a']; ?>
 
                </div>
                <div class="right">
                <h3> <?php echo $result['s3_q']; ?></h3>
                    <?php echo $result['s3_a']; ?>
                </div>
           </div>
            <a href="review.php"> Write a review </a>
        </div>

        <?php
    }
    }
    else
    {
        echo "no records";
    }
    ?>

</div>

    <style>

        .details{

            margin-top: 40px;
            margin-left: 30px;
            width: 100%;
        }

        .img{
            margin-left: 0px;
            margin-top: 50px;


        }
    .ref{
        float: right;  
        margin-right: 20px;     
      }

    h1{
        font-family:"Engravers MT";
        font-size: 25px;
        color: black;
        }
    body{
        background-color: white;
    }
    .logo{
        float: left;
        height:90px;
        width: 30%;
    }
    a{
        text-decoration: none;    
        font-size: 20px;
    }
    .info{
        width: 40%;
        float: right;
    }
    p{
        font-family: "Constantia";
        font-size: 18px;
        letter-spacing: .0rem;
        width: 90%;
    }
    .left {
  width: 28%;
  float: left;
  padding-right: 40px;

}
.right {  
  float: left;
  width: 28%;
  padding-left: 40px;
}

.center {
  float: left;
  width: 35%;
}
    .footer{
  font-size: 15px;
  display: block;
  width: 100%;
  height: 320px;
  float: left;
  /*border-top: 1px solid gray;*/
  font-family: "Constantia";
  
} h3{
    color:#2E8BC0 ;
}

</style>







<?php

}
?>









