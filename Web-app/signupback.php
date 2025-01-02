
<?php

$servername = "localhost";
$username = "root";
$db = "asianroots";
$password = "";

$conn =   mysqli_connect($servername, $username, $password, $db);

if(isset($_POST['submit'])){

	if(!empty($_POST['name'] ) && 
		!empty($_POST['pass1']) && 
		!empty($_POST['pass2']) && 
		!empty($_POST['phone'])&& 
		!empty($_POST['email'])&&($_POST['pass1']==($_POST['pass2'])) ) {
    
    	$name = $_POST['name'];
        $rpassword = $_POST['pass2'];
        $password = $_POST['pass1'];
        $contact = $_POST['phone'];
        $email = $_POST['email'];

       $sql = "INSERT INTO  customer (name,phonenumber,password,email )
				VALUES ('$name','$contact','$password','$email')";

					if (mysqli_query($conn, $sql)) {

					 echo"<script LANGUAGE='JavaScript'>
    window.alert('successfully registered ');
    window.location.href='login.php';
    </script>";
					} 
					else {
echo"";
					}

	}

else{
	echo"<script LANGUAGE='JavaScript'>
    window.alert('try again ');
    window.location.href='signup.php';
    </script>";
}

}

?>