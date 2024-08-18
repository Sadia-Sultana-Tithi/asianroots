<?php
$conn = mysqli_connect('localhost','root','','asianroots');

session_start();

if(isset($_POST['submit'])){


   $first_name = $_POST['first_name'];
   $last_name = $_POST['last_name'];
   $gender = $_POST['gender'];
   $contact = $_POST['contact'];
   $email = $_POST['email'];
   $appointment_day=$_POST['appointment_day'];
    $id=$_SESSION["c_id"];
    $d_id=$_SESSION["d_id"];
  
    if(empty($first_name) || empty( $last_name) ||empty($contact)||empty($email)||empty($appointment_day))
    { echo $d_id;
      $message[] = 'please fill out all';
    }
    else{

      $insert = "INSERT INTO appointment(id,first_name,last_name,gender,email,contact,appointment_day) VALUES('$id','$first_name','$last_name','$gender','$email','$contact','$appointment_day')";

      $upload = mysqli_query($conn,$insert);

        if($upload){
         $message[] = 'Appointment Booked Successfully';
         }
         
        else{
         $message[] = 'Could Not Booked! Please,Check Your Information!';
         }
   }

};



?>
<!DOCTYPE html>
<html>
<body>
<?php
   if(isset($message)){
      foreach($message as $message){
         echo '<span class="message">'.$message.'</span>';
      }
   }
?>
<?php

   $select = mysqli_query($conn, "SELECT * FROM appointment");
   
   ?>

    <div class="Appointment Message">
         
         <?php 
         while($row = mysqli_fetch_assoc($select)){ 
         ?>
            
            <?php echo $row['first_name']; ?>
            <?php echo $row['last_name']; ?>
            <?php echo "Have an appointment on" ?>
            <?php echo $row['appointment_day']; ?>
         
            
       
               
            
      <?php }; ?>
     
   
   </div>
</body>
</html>