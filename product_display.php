
<?php
include('ViewDetails.php');

?>

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
                    Skin Type
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">dry</a>
                    <a class="dropdown-item" href="#">sensitive</a>
                    <a class="dropdown-item" href="#">combination</a>
                    <a class="dropdown-item" href="#">oily</a>

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
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<br><br>
<?php
include_once ("db_connection.php");
global $conn,$a,$b;
$query="select * from products";
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
<!--                 <p class="card-text">   <?php echo $result['price']; ?></p>bdt
 -->               <form  method="post">
                <input type="submit" name="submit"  value="View details" style="background: #7faba8"class="btn btn-primary">
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











