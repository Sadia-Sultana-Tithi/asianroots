
<?php
session_start();
global $a,$p;
$a=$_SESSION['p_id'];
$p=$_SESSION['p_name'];
include 'review.php';


?>

<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" type="text/css" href=""> 
</head>
<body>
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
        </div>
</div>
<div>
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

    h1{
        font-family:"Engravers MT";
        font-size: 25px;
        color: black;
        }
    body{
        background-color: white;
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

  font-family: "Constantia";
  
} h3{
    color:#2E8BC0 ;
}

</style>



<?php

// SQL query to select data from database
global $conn;
$sql="select * from review where product like'".$p."' ";
$result=$conn->query($sql);
while($row=$result->fetch_assoc()){
?>
                <div>
                    <div style="margin-left: 400px;">
                        <b>Product:</b><?php echo $row['product'];?><br>
                        <b>Name:</b>&nbsp;<?php echo $row['name'];?> <br>
                        <b> Feedback:</b><?php echo $row['feedback'];?><br>
                        <br>
                 </div>
                </div>
                <?php
            }
             ?>

            <form method="post">
    <button style=" margin-top:20px;margin-left: 50%;font-size: 30px" name="review">Share yours</button>
</form>
<?php
           if(isset($_POST['review'])) {
               echo review();
           }
            ?>






    <style>

        td {
            background-color: #E4F5D4;
            border: 1px solid black;
        }

        th,td {
            font-weight: bold;
            border: 1px solid black;

            text-align: center;
        }

        td {
            font-weight: lighter;
        }

        a{
            text-align: center;
            text-decoration: none;
        }
    </style>



</body>

</html>

