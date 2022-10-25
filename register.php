<?php

$errorfound = false;


if (empty($_POST['Fname'])){
    echo("Name is required");
    $errorfound = true;
}

if (empty($_POST['name'])){
    echo("Name is required");
    $errorfound = true;
}
if (empty($_POST['position'])){
    echo("Name is required");
    $errorfound = true;
}

if (! filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    echo ("valid email is required");
    $errorfound = true;
}

if(strlen($_POST["psw"])<8){
    echo("password must be at least 8 characters");
    $errorfound = true;
}

if (! preg_match("/[a-z]/i",$_POST["psw"])){
    echo("passowrd must containe at least one letter");
    $errorfound = true;
}

if (! preg_match("/[0-9]/",$_POST["psw"])){
    echo("passowrd must containe at least one number");
    $errorfound = true;
}
 if($_POST["psw"] !== $_POST["pswrepeat"]){
    echo("repeat password does not must match please enter the same password");
    $errorfound = true;
 }
 if($errorfound === false ) 
 $password_hash = password_hash($_POST["psw"],PASSWORD_DEFAULT);

 $mysqli= require __DIR__ . "\database.php";

 $sql = "INSERT INTO `registration`(`full name`, `user name`, `occupation`, `email`, `password`) 
         VALUES (?,?,?,?,?) ";
 
 $stmt = $mysqli->stmt_init();

 if(! $stmt->prepare($sql)){ 
    echo("SQL error:" . $mysqli->error);
 }
 
 $stmt->bind_param("sssss",$_POST["Fname"],$_POST["name"],$_POST["position"],$_POST["email"],$password_hash);
 
 if($stmt->execute()){
    header("location:signup-success.php");
 }else {
    {
        if($mysqli->errno==1062){
            echo("Email already exsist");
        }else {
            echo($mysqli->error . "" . $mysqli->errno); 
        }
    }
 }



?>