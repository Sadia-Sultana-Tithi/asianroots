
<?php
session_start();
$servername = "localhost";
$username = "root";
$db = "asianroots";
$password = "";

$conn =   mysqli_connect($servername, $username, $password, $db);

if(isset($_POST['submit'])){

    if(!empty($_POST['name'] ) &&
        !empty($_POST['message'])
    ) {

        $name = $_POST["name"];
        $message = $_POST["message"];


        $sql = "INSERT INTO  contact (name,message)
				VALUES ('$name','$message')";

        if (mysqli_query($conn, $sql)) {

            echo"<script LANGUAGE='JavaScript'>
    window.alert('successfully submitted review ');
    window.location.href='home.php';
    </script>";
        }
        else {
            echo"you can not review a product twice";
        }

    }

    else{
        echo"<script LANGUAGE='JavaScript'>
    window.alert('try again ');
    window.location.href='contact.php';
    </script>";
    }

}

?>
