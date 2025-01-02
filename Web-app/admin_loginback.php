<?php

include_once ("db_connection.php");
global $conn;


$userid = $_POST['username_input'];
$password = $_POST['password_input'];
$login_status = "Unsuccessful";

if (($userid )== "" || trim($password) == ""){

    echo "Please enter a valid input,", "<br>";
    $url = "http://localhost/skincare/admin_login.html";
    header("Refresh: 2; URL= $url");

}

else {
    $sql = " Select id, pass \n". " from admin \n". " where id='$userid' AND pass='$password' ";
    $result = mysqli_query($conn,$sql);
    $row_num = mysqli_num_rows($result);
    if ($row_num == 1)
    {$login_status = "successful";}



}

if ($login_status == "successful")
{
    echo $login_status;
    $url = "http://localhost/skincare2/admin_land.php";
    header("Location: $url");
}
else{


    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Login failed');
    window.location.href='http://localhost/skincare2/admin_login.php';
    </script>");


}
