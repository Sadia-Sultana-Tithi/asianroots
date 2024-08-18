<?php



$conn = mysqli_connect('localhost','root','','asianroots');



if(isset($_POST['add_product'])){


    $product_name = $_POST['product_name'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    $details = $_POST['details'];
    $image = $_POST['image'];
    $product_type = $_POST['product_type'];
    $features = $_POST['features'];
    $ingri= $_POST['ingri'];
    $s1_q = $_POST['s1_q'];
    $s1_a = $_POST['s1_a'];
    $s2_q = $_POST['s2_q'];
    $s2_a = $_POST['s2_a'];
    $s3_q = $_POST['s3_q'];
    $s3_a = $_POST['s3_a'];
    $p_id = $_POST['p_id'];



//
//    if(empty($d_name) || empty( $d_speciality) ||empty($d_appointment))
//    {
//        $message[] = 'please fill out all';
//    }
//    else
    {

        $insert = "INSERT INTO products(product_name, type, price,details,image,product_type,features,ingri,s1_q,s1_a,s2_q,s2_a,s3_q,s3_a,p_id) 
       VALUES('$product_name','$type','$price','$details','$image','$product_type','$features','$ingri','$s1_q','$s1_a','$s2_q','$s2_a','$s3_q','$s3_a','$p_id')";

        $upload = mysqli_query($conn,$insert);

        if($upload){

            $message[] = 'new product added successfully';
        }
        else{
            $message[] = 'could not add the product';
        }
    }

};

if(isset($_GET['delete'])){
    $id = $_GET['delete'];
    mysqli_query($conn, "DELETE FROM products WHERE p_id= $id");

};

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">


</head>
<body>


<?php

if(isset($message)){
    foreach($message as $message){
        echo '<span class="message">'.$message.'</span>';
    }
}

?>
<div class="logo">
<a href="home.php"><img src="images/asianroots.jpg" height="100" width="270">
</a>
    &emsp; &emsp; &emsp; &emsp; &emsp; &emsp; &emsp;
    <a href="admin_land.php"> <font size="15px" style="margin-left: 48%"> Admin Home </font></a>
</div>
<div class="container">

    <div class="admin-product-form-container">

        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
            <h3>add a new product</h3>

            <input type="text" placeholder="type" name="type" class="box">
            <input type="text" placeholder="enter price" name="price" class="box">
            <input type="text" placeholder="enter details" name="details" class="box">
            <input type="text" placeholder="enter image" name="image" class="box">
            <input type="text" placeholder="enter product_type" name="product_type" class="box">
            <input type="text" placeholder="enter features" name="features" class="box">
            <input type="text" placeholder="enter ingredients" name="ingri" class="box">
            <input type="text" placeholder="enter step-1 question" name="s1_q" class="box">
            <input type="text" placeholder="enter step-1 answer" name="s1_a" class="box">
            <input type="text" placeholder="enter step-2 question" name="s2_q" class="box">
            <input type="text" placeholder="enter step-2 answer" name="s2_a" class="box">
            <input type="text" placeholder="enter step-3 question" name="s3_q" class="box">
            <input type="text" placeholder="enter step-3 answer" name="s3_a" class="box">
            <input type="text" placeholder="enter product_name" name="product_name" class="box">
            <input type="text" placeholder="enter p_id" name="p_id" class="box">
            <input type="submit" class="btn" name="add_product" value="Add product">
        </form>

    </div>

    <?php

    $select = mysqli_query($conn, "SELECT * FROM products");

    ?>
    <div class="product-display">
        <table class="product-display-table">
            <thead>
            <tr>

                <th>product_name</th>
                <th>product_type</th>
                <th>price</th>
                <th>details</th>
                <th>features</th>
                <th>ingredients</th>
                <th>product id</th>
                <th>step-1 question</th>
                <th>step-1 answer</th>
                <th>step-2 question</th>
                <th>step-2 answer</th>
                <th>step-3 question</th>
                <th>step-3 answer</th>
                <th>image</th>
                <th>action</th>
            </tr>
            </thead>
            <?php
            while($row = mysqli_fetch_assoc($select)){
                ?>
                <tr>

                    <td><?php echo $row['product_name']; ?></td>
                    <td><?php echo $row['type']; ?></td>
                    <td><?php echo $row['price']; ?></td>
                    <td><?php echo $row['details']; ?></td>
                    <td><?php echo $row['features']; ?></td>
                    <td><?php echo $row['ingri']; ?></td>
                    <td><?php echo $row['p_id']; ?></td>
                    <td><?php echo $row['s1_q']; ?></td>
                    <td><?php echo $row['s1_a']; ?></td>
                    <td><?php echo $row['s2_q']; ?></td>
                    <td><?php echo $row['s2_a']; ?></td>
                    <td><?php echo $row['s3_q']; ?></td>
                    <td><?php echo $row['s3_a']; ?></td>
                    <td><img src="<?php echo $row['image']; ?>" height="80px" width="80px"> </td>
                    <td>

                        <a href="add_product.php?delete=<?php echo $row['p_id']; ?>" class="delete">
                            <i class="fas fa-trash"></i> delete </a>
                    </td>
                </tr>
            <?php }; ?>
        </table>

    </div>



    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

        :root{
            --green:#27ae60;
            --black:#333;
            --white:#fff;
            --bg-color:#eee;
            --box-shadow:0 .9rem 1rem rgba(0,0,0,.1);
            --border:.1rem solid var(--black);
        }

        *{
            font-family: 'Poppins', sans-serif;
            margin:0;
            padding:0;
            box-sizing: border-box;
            outline: none;
            border:none;
            text-decoration: none;

        }
        .delete{
            display: block;
            width: 100%;
            cursor: pointer;
            border-radius: .5rem;
            margin-top: 1rem;
            font-size: 1.7rem;
            padding:1rem 3rem;
            color:white;
            text-align: center;
            background: indianred;
        }

        html{
            font-size: 45%;
            /*overflow-x: hidden;*/
        }
        body{
            background-color: #F6F6F6;
        }

        .btn{
            display: block;
            width: 100%;
            cursor: pointer;
            border-radius: .5rem;
            margin-top: 1rem;
            font-size: 1.7rem;
            padding:1rem 3rem;
            background: #7faba8;
            color:white;
            text-align: center;
        }

        .btn:hover{
            background: powderblue;
            color: black;
        }
        .delete:hover{
            background: tomato;
        }

        .message{
            display: block;
            background: var(--bg-color);
            padding:1.5rem 1rem;
            font-size: 2rem;
            color:var(--black);
            margin-bottom: 2rem;
            text-align: center;
        }

        .container{
            max-width: 1200px;
            padding:2rem;
            margin:0 auto;
        }

        .admin-product-form-container.centered{
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;

        }

        .admin-product-form-container form{
            max-width: 100rem;
            margin:0 auto;
            padding:2rem;
            border-radius: .5rem;
            background: var(--bg-color);
        }

        .admin-product-form-container form h3{
            text-transform: uppercase;
            color:var(--black);
            margin-bottom: 1rem;
            text-align: center;
            font-size: 2.5rem;
        }

        .admin-product-form-container form .box{
            width: 100%;
            border-radius: .5rem;
            padding:1.2rem 1.5rem;
            font-size: 1.7rem;
            margin:1rem 0;
            background: var(--white);
            text-transform: none;
        }

        .product-display{
            margin:2rem 0;
        }

        .product-display .product-display-table{
            width: 100%;
            text-align: center;
        }

        .product-display .product-display-table thead{
            background: var(--bg-color);
        }

        .product-display .product-display-table th{
            padding:1rem;
            font-size: 2rem;
        }


        .product-display .product-display-table td{
            padding:1rem;
            font-size: 2rem;
            border-bottom: var(--border);
        }

        @media (max-width:991px){

            html{
                font-size: 55%;
            }

        }

        @media (max-width:768px){

            .product-display{
                overflow-y:scroll;
            }

            .product-display-table{
                width: 80rem;
            }

        }

        @media (max-width:450px){

            html{
                font-size: 50%;
            }

        }
    </style>
</body>
</html>
