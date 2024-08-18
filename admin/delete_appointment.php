<?php
if(isset($_GET['id'])){
    $id=$_GET['id'];
}

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "asianroots";
 
 // Create connection
 $conn = new mysqli($servername, $username, $password, $dbname);
 // Check connection
 if ($conn->connect_error) {
   die("Connection failed: " . $conn->connect_error);
 }
 

 $sql = "DELETE FROM appointment WHERE id='$id'";
 $result = $conn->query($sql);
 if($result){
     header('location:view_appointment.php?m=1');
 }

?>