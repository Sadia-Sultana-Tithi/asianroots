<?php
error_reporting(0);
include"db_connection.php";

session_start();
global $conn;
?>

<!DOCTYPE html>
<html>

<head>
   <!-- Account -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

</head>
<body>
 
        <div class="logo" style="padding: 0 25px 0 25px;
    background-color: #dfdbda;">
            <a class="navbar-brand" href="home.php" ><img src="images/asianroots.png" height="80px" width="200px"></a>

             <a href="#" class="mainlink" style="
                  margin-left: 200px;
                  text-align: center;
                  text-decoration: none;
                  font-size: 17px;">Home</a> &emsp;&emsp;
           
            <a href="products.php" style="
            
                  text-align: center;
                  text-decoration: none;
                  font-size: 17px;">Products</a>&emsp;&emsp;
            <a href="skintypeQuiz.php"style="
                  
                  text-align: center;
                  text-decoration: none;
                  font-size: 17px;">Skin Assessment</a>&emsp;&emsp;
            <a href="dermatologist/doctors_available.php"style="
                    
                  text-align: center;
                  text-decoration: none;
                  font-size: 17px;">Dermatologist</a>&emsp;&emsp;

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
         
           
            
        
       <br>
 <font>
   <!--  <h3 class="text-center text-light bg-info p-2 " >all products</h3> -->
<div class="container-fluid">
    <div class="row">
<div class="col-lg-2">
    <h5>Filter products</h5>
    <hr>
    <h6 class="text-info">Select your skin type</h6>
    <ul class="list-group">
     <?php
       $sql="select distinct type from products";
       $result=$conn->query($sql);
       while($row=$result->fetch_assoc()){
     ?>
    <li class="list-group-item">
        <div class="form-check">
            <label class="form-check-label">
                <input type="checkbox" class="form-check-input product_check"
                       value="<?=$row['type'];?>" id="skin_type"


            </label><?=$row['type'];?>
        </div>
    </li>
        <?php } ?>

<!--        select product-->
        <h6 class="text-info">Select your product</h6>
        <ul class="list-group">
            <?php
            $sql="select distinct product_type from products";
            $result=$conn->query($sql);
            while($row=$result->fetch_assoc()){
                ?>
                <li class="list-group-item">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input type="checkbox" class="form-check-input product_check"
                                   value="<?=$row['product_type'];?>" id="product_type"


                        </label><?=$row['product_type'];?>
                    </div>
                </li>


            <?php } ?>
<!--       allergy-->

            <h6 class="text-info">Any allergy?</h6>
            <ul class="list-group">
                      <li class="list-group-item">
                        <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input product_check"
                                       value="aloevera" id="allergy"
                            </label>Aloevera
                        </div>
                    </li>
                <li class="list-group-item">
                    <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input product_check"
                                       value="nuts" id="allergy"
                            </label>Nuts
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="form-check">
                            <label class="form-check-label">
                                <input type="checkbox" class="form-check-input product_check"
                                       value="Avobenzone" id="allergy"
                            </label>Avobenzone
                        </div>
                    </li>

            </ul>
    </div>
        <div class="col-lg-10">
            <h5 class="text-center" id="textchange"> All products</h5>
            <hr>
            <div class="row" id="result">
                <?php
                $sql="select * from products";
                $result=$conn->query($sql);
                while($row=$result->fetch_assoc()){
                    ?>
                    <div class="col-md-3 mb-2" style="margin-left: 30px;">
                        <div class="card">
                            <img class="card-img-top" src="<?php echo $row['image']; ?>" alt="Card image">
                            <div class="card-body">
                                <h4 class="card-title"> <?php echo $row['product_name']; ?></h4>

                                <h6 class="card-text"><?php echo $row['product_type']; ?></h6>
                                <form  method="post">
                                    <input type="submit" name="submit"  value="View details" style="background: #7faba8" class="btn btn-primary">
                                    <input type="hidden" name="product_name" value=<?php echo $row['product_name']; ?>>
                                    <input type="hidden" name="p_id" value=<?php echo $row['p_id']; ?>>


                                </form>

                            </div>
                        </div>
                    </div>
                    <?php
                     } ?>

 </div>   <?php
            if(isset($_POST['submit'])) {
            $a=($_POST['p_id']);
            $b=($_POST['product_name']);
            $_SESSION['p_id']= $a;
            $_SESSION['p_name']=$b;
            ?>
                <script>
                    window.location.href=" ViewDetails.php";
                </script>
            <?php


            }
            ?>

        </div>
</div>
</div>
 </font>
    <script>
        $(document).ready(function(){
            $(".product_check").click(function(){
               var action='data';
               var skintype=get_filter_text('skin_type');
               var producttype=get_filter_text('product_type');
               var allergy=get_filter_text('allergy');

           $.ajax({
                 url:'action.php',
                 method:'POST',
                 data:{ action:action,skintype:skintype,producttype:producttype,allergy:allergy},
                 success:function (response){
                     $("#result").html(response);
                     $("#textchange").text("filtered products");
                 }
           });


            function get_filter_text(text_id){
                var filterdata=[];
                $('#'+text_id+':checked').each(function (){
                 filterdata.push($(this).val());
                });
                return filterdata;
            }



        });
        });

    </script>





</body>


</html>
<style>

    font{
        font-family: 'Source Sans Pro',sans-serif;

    }
</style>