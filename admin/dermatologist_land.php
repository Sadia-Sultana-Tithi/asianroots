<?php



$conn = mysqli_connect('localhost','root','','asianroots');



if(isset($_POST['add_doctor'])){

   
   $d_name = $_POST['d_name'];
   $d_speciality = $_POST['d_speciality'];
   $d_appointment = $_POST['d_appointment'];
  
 

   if(empty($d_name) || empty( $d_speciality) ||empty($d_appointment))
   {
      $message[] = 'please fill out all';
   }
   else{

      $insert = "INSERT INTO dermatologist(d_name, d_speciality, d_appointment) VALUES('$d_name','$d_speciality','$d_appointment')";

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
   mysqli_query($conn, "DELETE FROM dermatologist WHERE d_id = $id");
   header('location:dermatologist_land.php');
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
       <a href="asianroots.png">  <img src="asianroots.png" height="100" width="270"></a></div>
<div class="container">

   <div class="admin-product-form-container">

      <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post" enctype="multipart/form-data">
         <h3>add a new doctor</h3>
         
         <input type="text" placeholder="enter doctor name" name="d_name" class="box">
         <input type="text" placeholder="enter doctor speciality" name="d_speciality" class="box">
         <input type="text" placeholder="enter doctor appointment time" name="d_appointment" class="box">
         <input type="submit" class="btn" name="add_doctor" value="add doctor">
      </form>

   </div>

   <?php

   $select = mysqli_query($conn, "SELECT * FROM dermatologist");
   
   ?>
   <div class="product-display">
      <table class="product-display-table">
         <thead>
         <tr>
       
            <th>name</th>
            <th>speciality</th>
            <th>time</th>
            <th>action</th>
         </tr>
         </thead>
         <?php 
         while($row = mysqli_fetch_assoc($select)){ 
         ?>
         <tr>
            
            <td><?php echo $row['d_name']; ?></td>
            <td><?php echo $row['d_speciality']; ?></td>
            <td><?php echo $row['d_appointment']; ?></td>
            <td>
               <a href="add_dermatologist.php?edit=<?php echo $row['d_id']; ?>" class="btn">
                   <i class="fas fa-edit"></i> edit </a>
               <a href="dermatologist_land.php?delete=<?php echo $row['d_id']; ?>" class="delete">   <i class="fas fa-trash"></i> delete </a>
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
   overflow-x: hidden;
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