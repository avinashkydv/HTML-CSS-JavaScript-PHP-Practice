<?php
$server = "localhost:3307";
$username = "root";
$password = "";
$database = "library";

$conn = mysqli_connect($server, $username,$password,$database);
if(!$conn){
    echo "<script>alert('Connection Failed.')</script>";

}
?>