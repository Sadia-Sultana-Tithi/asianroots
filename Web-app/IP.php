<?php
session_start();
if(!empty($_SERVER["HTTP_CLIENT_IP"]))
{
    $IP=$_SERVER["HTTP_CLIENT_IP"];
}
else if(!empty($_SERVER["HTTP_X_FORWARDED_FOR"])){
    $IP=$_SERVER["HTTP_X_FORWARDED_FOR"];
}
else{
    $IP=$_SERVER["REMOTE_ADDR"];
}
echo $IP;
$_SESSION['IP']=$IP;