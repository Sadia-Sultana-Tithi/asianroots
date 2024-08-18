<?php

$conn = mysqli_connect('localhost','root','','asianroots');

$id = $_GET['edit'];

if(isset($_POST['update_doctor'])){

   
   
   $d_name = $_POST['d_name'];
   $d_speciality = $_POST['d_speciality'];
   $d_appointment = $_POST['d_appointment'];
  
 

   if(empty($d_name) || empty( $d_speciality) ||empty($d_appointment))
   {
      $message[] = 'please fill out all';
   }
   else{

      $update_data = "UPDATE dermatologist SET  d_name='$d_name', d_speciality='$d_speciality',d_appointment='$d_appointment'  WHERE d_id = '$id' ";

      $upload = mysqli_query($conn, $update_data);

      if($upload){
         header('location:dermatologist_land.php');
      }
      else{
         $$message[] = 'please fill out all!'; 
      }

   }
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>
<body>

<?php
   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }
?>

<div class="container">


<div class="admin-product-form-container centered">

   <?php
      
      $select = mysqli_query($conn, "SELECT * FROM dermatologist WHERE d_id = $id");
      while($row = mysqli_fetch_assoc($select)){

   ?>
   
   <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">

      <h3 class="title">update doctor</h3>
     
      <input type="text" min="0" class="box" name="d_name" value="<?php echo $row['d_name']; ?>" placeholder="enter the doctor name">

      <input type="text" min="0" class="box" name="d_speciality" value="<?php echo $row['d_speciality'];?>" placeholder="enter the doctor speciality">

      <input type="text" min="0" class="box" name="d_appointment" value="<?php echo $row['d_appointment'];?>" placeholder="enter the appointment time">

      <input type="submit" value="update_doctor" name="update_doctor" class="btn">

      <a href="dermatologist_land.php" class="btn">go back!</a>
   </form>
   


   <?php }; ?>

   

</div>

</div>

<style type="text/css">
   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

:root{
   --green:#27ae60;
   --black:#333;
   --white:#fff;
   --bg-color:#eee;
   --box-shadow:0 .5rem 1rem rgba(0,0,0,.1);
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
   text-transform: capitalize;
}

html{
   font-size: 45%;
   overflow-x: hidden;
}

.btn{
   display: block;
   width: 100%;
   cursor: pointer;
   border-radius: .5rem;
   margin-top: 1rem;
   font-size: 1.7rem;
   padding:1rem 3rem;
   background: var(--green);
   color:var(--white);
   text-align: center;
}

.btn:hover{
   background: var(--black);
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
   max-width: 50rem;
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

.product-display .product-display-table .btn:first-child{
   margin-top: 0;
}

.product-display .product-display-table .btn:last-child{
   background: crimson;
}

.product-display .product-display-table .btn:last-child:hover{
   background: var(--black);
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

   .product-display .product-display-table{
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