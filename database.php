<?php
$server = "localhost";
$username = "root";
$password = "";
$dbname = "msms";

$conn = mysqli_connect($server , $username , $password , $dbname);

if($conn->connect_errno){
    die("connectin error" . $conn->connect_error);
}

return $conn;

?>