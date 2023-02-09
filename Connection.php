<?php
$servername = "localhost";
$username   = "root";
$passwprd   = "";
$dbname     = "rockeysales";

$conn = mysqli_connect($servername,$username,$passwprd,$dbname);
if($conn)
{
    echo "Connectio Ok";
}
else{
    echo "Connection Failed";
}
?>