
<?php
session_start();
$servername = "localhost";
$username = "root";
$db = "asianroots";
$password = "";

$conn =   mysqli_connect($servername, $username, $password, $db);

if(isset($_POST['submit'])){

	if(!empty($_POST['name'] ) &&
		!empty($_POST['feedback']) 
	 ) {
    
    	$name = $_SESSION["name"];

        $feedback = $_POST['feedback'];
        $c_id=$_SESSION["c_id"];
        $p_name=$_SESSION["p_name"];
       

       $sql = "INSERT INTO  review (name,product,feedback,c_id )
				VALUES ('$name','$p_name','$feedback',$c_id)";

					if (mysqli_query($conn, $sql)) {

					 echo"<script LANGUAGE='JavaScript'>
    window.alert('successfully submitted review ');
    window.location.href='ViewDetails.php';
    </script>";
					} 
					else {
echo"you can not review a product twice";
					}

	}

else{
	echo"<script LANGUAGE='JavaScript'>
    window.alert('try again ');
    window.location.href='review.php';
    </script>";
}

}

?>